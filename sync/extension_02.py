#!/usr/bin/env python

from time import sleep
import os
import RPi.GPIO as GPIO
GPIO.setmode (GPIO.BCM)
GPIO.setwarnings (False)

#define gpio inputs/buttons
GPIO.setup(27, GPIO.IN)
GPIO.setup(18, GPIO.IN)
GPIO.setup(17, GPIO.IN)
GPIO.setup(04, GPIO.IN)
GPIO.setup(25, GPIO.IN)
GPIO.setup(24, GPIO.IN)

# Button Class for debouncing
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
    os.system ("sudo /var/www/sync/stopall")
    print "stop all"
    
def cmd_start_vid1():   #define function knob 1
    os.system ("sudo /var/www/sync/startmasterone01")
    print "play_01"
    
def cmd_start_vid2():   #define function knob 2
    os.system ("sudo /var/www/sync/startmasterone02")
    print "play_02"

def cmd_start_vid3():   #define function knob 3
    os.system ("sudo /var/www/sync/startmasterone03")
    print "play_03"
    
    
def cmd_start_vid4():   #define function knob 4
    os.system ("sudo /var/www/sync/startmasterone04")
    print "play_04"

def cmd_start_vid5():   #define function knob 5
    os.system ("sudo /var/www/sync/startmasterone05")
    print "play_05"

def cmd_start_vid6():   #define function knob 6
    os.system ("sudo /var/www/sync/startmasterone06")
    print "play_06"


# Butten controller defines what to do when button is pressed for the first time,
# second argument defines what happens when button is pressed for the second time

ButtonController([
  (27, cmd_start_vid1, cmd_start_vid1),
  (18, cmd_start_vid2, cmd_start_vid2),
  (17, cmd_start_vid3, cmd_start_vid3),
  (04, cmd_start_vid4, cmd_start_vid4),
  (25, cmd_start_vid5, cmd_start_vid5),
  (24, cmd_start_vid6, cmd_start_vid6),
  #(24, cmd_start_vid6, cmd_stop_omx),
])

# cleanup
GPIO.cleanup()
