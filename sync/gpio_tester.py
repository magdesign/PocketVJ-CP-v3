#!/usr/bin/env python

from time import sleep
import os
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)

#Load all the GPIO inputs you want to test

GPIO.setup(04, GPIO.IN)
GPIO.setup(17, GPIO.IN)
GPIO.setup(18, GPIO.IN)
GPIO.setup(24, GPIO.IN)
GPIO.setup(25, GPIO.IN)
GPIO.setup(27, GPIO.IN)

# debounce buttons and trigger the rising event,  since they can be noisy
GPIO.add_event_detect(04, GPIO.RISING, bouncetime=250)
GPIO.add_event_detect(17, GPIO.RISING, bouncetime=250)
GPIO.add_event_detect(18, GPIO.RISING, bouncetime=250)
GPIO.add_event_detect(24, GPIO.RISING, bouncetime=250)
GPIO.add_event_detect(25, GPIO.RISING, bouncetime=250)
GPIO.add_event_detect(27, GPIO.RISING, bouncetime=250)



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
#	if ( GPIO.input(27) == False ):
#                print 'GPIO 27 released'
		
		
	sleep(0.1);
