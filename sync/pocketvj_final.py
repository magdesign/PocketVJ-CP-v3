#!/usr/bin/env python

from time import sleep
import os
import RPi.GPIO as GPIO
GPIO.setmode (GPIO.BOARD)
GPIO.setwarnings (False)

GPIO.setup (7,GPIO.IN)
GPIO.setup (11,GPIO.IN)
GPIO.setup (12,GPIO.IN)
GPIO.setup (13,GPIO.IN)
GPIO.setup (15,GPIO.IN)
GPIO.setup (16,GPIO.IN)
GPIO.setup (18,GPIO.IN)
GPIO.setup (22,GPIO.IN)

# Button Klasse
class Button(object):
    def __init__(self, controller, gpio_input, start_command, stop_command):
        self.controller = controller
        self.gpio_input = gpio_input
        self.input_buffer = 0
        self.input_buffer_prev = 0
        self.state = False
        self.start_command = start_command
        self.stop_command = stop_command
        
    def update_state(self):
        self.input_buffer = GPIO.input(self.gpio_input) # Hardware Button lesen
        if ((self.input_buffer_prev == 0) and (self.input_buffer == 1)): # button press (entprellt)
            if self.state:
               if self.stop_command: self.stop_command() 
            else:
                if self.controller.last_button and self.controller.last_button != self.gpio_input:
                    last_button = self.controller.buttons[self.controller.last_button]
                    last_button.stop_command()
                if self.start_command: self.start_command()
            
            self.state = not self.state
            self.controller.last_button = self.gpio_input
            for button in self.controller.buttons.values():
                if button.gpio_input != self.gpio_input:
                    button.state = False

        self.input_buffer_prev = self.input_buffer # Entprellung

# Buttons Klasse
class ButtonController(object):
    def __init__(self, button_data):
        self.buttons = {}
        self.last_button = None

        for button in button_data:
            self.buttons[button[0]] = Button(self, button[0], button[1], button[2])

        while(True):
            for button in self.buttons.values():
                button.update_state()

# Commands
def cmd_stop_omx():     #define stop kommando
    os.system ("sudo /var/www/sync/omxkill.py")
    print "stop all movies"
    
def cmd_start_vid1():   #define video 1
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/01* &")
    print "start movie 01"
    
def cmd_start_vid2():   #define video 2
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/02* &")
    print "start movie 02"

def cmd_start_vid3():   #define video 3
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/03* &")
    print "start movie 03"
    
def cmd_start_vid4():   #define video 4
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/04* &")
    print "start movie 04"
    
def cmd_start_vid5():   #define video 5
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/05* &")
    print "start movie 05"

def cmd_start_vid6():   #define video 6
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/06* &")
    print "start movie 06"

def cmd_start_vid7():   #define video 7
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/07* &")
    print "start movie 07"

def cmd_start_vid8():   #define video 8
    os.system ("/usr/bin/omxplayer-sync -mu /media/internal/08* &")
    print "start movie 08"

ButtonController([
  (13, cmd_start_vid1, cmd_stop_omx),
  (12, cmd_start_vid2, cmd_stop_omx),
  (11, cmd_start_vid3, cmd_stop_omx),
  (07, cmd_start_vid4, cmd_stop_omx),
  (22, cmd_start_vid5, cmd_stop_omx),
  (18, cmd_start_vid6, cmd_stop_omx),
  (16, cmd_start_vid7, cmd_stop_omx),
  (15, cmd_start_vid8, cmd_stop_omx),
])

# cleanup
GPIO.cleanup()
