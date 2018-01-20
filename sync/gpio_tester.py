#!/usr/bin/env python

from time import sleep
import os
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)

#Load all the GPIO inputs you have

GPIO.setup(04, GPIO.IN)
GPIO.setup(17, GPIO.IN)
GPIO.setup(18, GPIO.IN)
GPIO.setup(24, GPIO.IN)
GPIO.setup(25, GPIO.IN)
GPIO.setup(27, GPIO.IN)

print 'GPIO Tester - Press a button'

while True:
	if ( GPIO.input(04) == True ):
		print 'GPIO 04 Pressed'
	if ( GPIO.input(17) == True ):
		print 'GPIO 17 Pressed'
	if ( GPIO.input(18) == True ):
		print 'GPIO 18 Pressed'
	if ( GPIO.input(24) == True ):
		print 'GPIO 24 Pressed'
	if ( GPIO.input(25) == True ):
		print 'GPIO 25 Pressed'
	if ( GPIO.input(27) == True ):
		print 'GPIO 27 Pressed'
	sleep(0.1);
