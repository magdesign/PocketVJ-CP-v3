#!/usr/bin/env python

#This file chooses a random video when there comes an input on GPIO 16
#All videos must be defined manually in the list
#If there is nothing running, I would run an FBI in background.

#This script is written by magdesign.ch and may be used for whatever you want
#You must provide the authors name:
#Marc-André Gasser, https://www.pocketvj.com


import os, time, subprocess, signal, psutil, random
import RPi.GPIO as GPIO

DEBUG = False

GPIO.setmode (GPIO.BOARD)
GPIO.setwarnings (False)

BUTTON_BARRIER = 16

GPIO.setup (BUTTON_BARRIER, GPIO.IN)

DEVNULL = open(os.devnull, 'w')
INTRO = 1; SLIDES = 2

MOVIES = {
  INTRO: '/media/internal/video/00_intro.mov',
  SLIDES: [
    '/media/internal/video/01_video.mov',
    '/media/internal/video/02_video.mov',
    '/media/internal/video/03_video.mov',
    '/media/internal/video/04_video.mov',
    '/media/internal/video/05_video.mov',
    '/media/internal/video/06_video.mov',
    '/media/internal/video/07_video.mov',
    '/media/internal/video/08_video.mov',
    '/media/internal/video/09_video.mov',
    '/media/internal/video/10_video.mov',
    '/media/internal/video/11_video.mov',
    '/media/internal/video/12_video.mov',
    '/media/internal/video/13_video.mov',
    '/media/internal/video/14_video.mov',
    '/media/internal/video/15_video.mov',
    '/media/internal/video/16_video.mov',
    '/media/internal/video/17_video.mov',
    '/media/internal/video/19_video.mov',
    '/media/internal/video/20_video.mov',
    '/media/internal/video/21_video.mov',
    '/media/internal/video/22_video.mov',
    '/media/internal/video/23_video.mov',
    '/media/internal/video/24_video.mov',
    '/media/internal/video/25_video.mov',
    '/media/internal/video/26_video.mov',
  ],
}

class Button(object):
    def __init__(self, gpio_input):
        self.gpio_input = gpio_input
        self.input_buffer = 0
        self.input_buffer_prev = 0

    # check for button press (debounced)
    def check(self, callback):
        self.input_buffer = GPIO.input(self.gpio_input)
        if ((self.input_buffer_prev == 0) and (self.input_buffer == 1)): # debounce
            if callable(callback):
                callback() # call callback on button press
        self.input_buffer_prev = self.input_buffer

class DezibelGame():
    def __init__(self):
        self.button_barrier = Button(BUTTON_BARRIER)
        self.process = None

    # show slide callback
    def show_slide(self):
      self.kill_player(self.process.pid)
      index = random.randint(0, len(MOVIES[SLIDES]) - 1)
      self.play_blocking(MOVIES[SLIDES][index])
      self.play_nonblocking(MOVIES[INTRO])

    # play file nonblocking with loop
    def play_nonblocking(self, filename):
        if DEBUG: print "play: %s" % filename
        self.filename = filename
        self.process = subprocess.Popen(["omxplayer","-o","both", "--loop", "--no-osd", filename],
            stdin=DEVNULL, stdout=DEVNULL, stderr=DEVNULL)
        time.sleep(1)

    # play file blocking barrier input
    def play_blocking(self, filename):
        if DEBUG: print "play: %s" % filename
        subprocess.call(["omxplayer","-o","both", filename],
            stdin=DEVNULL, stdout=DEVNULL, stderr=DEVNULL)

    # kill current player instance
    def kill_player(self, parent_pid, sig=signal.SIGTERM):
        try:
            process = psutil.Process(parent_pid)
        except psutil.error.NoSuchProcess:
            return
        for pid in process.get_children(recursive=True):
            os.kill(pid.pid, sig)

    def run(self):
        # play INTRO
        self.play_nonblocking(MOVIES[INTRO])

        # main loop
        while(True):
            # check for button press
            self.button_barrier.check(self.show_slide)

DezibelGame().run()

# cleanup
GPIO.cleanup()
