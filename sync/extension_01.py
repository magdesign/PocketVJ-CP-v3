#!/usr/bin/env python

from time import sleep
import os
import RPi.GPIO as GPIO
GPIO.setmode (GPIO.BOARD)
GPIO.setwarnings (False)

#Outputs
GPIO.setup(29, GPIO.OUT)
GPIO.setup(31, GPIO.OUT)

#LED
GPIO.setup(36, GPIO.OUT)

#buttons onboard
GPIO.setup(35, GPIO.IN)
GPIO.setup(38, GPIO.IN)
GPIO.setup(40, GPIO.IN)
GPIO.setup(37, GPIO.IN)

#inputs external
GPIO.setup(33, GPIO.IN)
GPIO.setup(32, GPIO.IN)

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
    os.system ("sudo /var/www/sync/stopall")
    print "stop all"
    
def cmd_start_vid1():   #define function knob 1
    os.system ("sudo /var/www/sync/impressprev")
    print "prev"
    
def cmd_start_vid2():   #define function knob 2
    os.system ("sudo /var/www/sync/startimage")
    print "start image"

def cmd_start_vid3():   #define function knob 3
    os.system ("sudo /var/www/sync/startpdf")
    print "start pdf"
    
    
def cmd_start_vid4():   #define function knob 4
    os.system ("sudo /var/www/sync/impressnext")
    print "next"


# Butten controller das zweite Argument definiert was passiert wenn der knopf zum
# zweiten mal gedrueckt wird

ButtonController([
  (35, cmd_start_vid1, cmd_start_vid1),
  (38, cmd_start_vid2, cmd_stop_omx),
  (40, cmd_start_vid3, cmd_stop_omx),
  (37, cmd_start_vid4, cmd_start_vid4),
  #(33, cmd_start_vid5, cmd_stop_omx),
  #(32, cmd_start_vid6, cmd_stop_omx),
])

# cleanup
GPIO.cleanup()
