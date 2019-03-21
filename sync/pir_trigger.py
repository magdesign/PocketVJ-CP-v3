#!/usr/bin/env python

#This script is used to trigger an action with a PIR sensor, for example starting a video
#Setup the input pin where your PIR is connected
#Setup trigger counts until action is triggered, this prevents fault triggers since the sensor outputs random false triggers


from time import sleep
import os
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM) #describes the pin numbering to name of the GPIO, e.g. GPIO27


# user defined variables:

pir = 27 #set the GPIO number where your PIR is connected
triggers = 20 #set how many triggers until action starts, this debounces noise 20 equals ~10second of movement

counter = 0 #set glob counter to 0
#

GPIO.setup(pir, GPIO.IN)

#debounce buttons
GPIO.add_event_detect(pir, GPIO.RISING, bouncetime=2500)


print 'GPIO Tester - Press a button'

print "initalizing...."
sleep (5)

while True:
	if ( GPIO.input(pir) == True ):
		global counter
		counter += 1
		print ('GPIO 27 Pressed\n{0}'.format(counter))
		if counter == (triggers):
			print "                                 !!!   action   !!!  SLEEEEP 5s  "
			sleep (5)
			#os.system ("fbi /media/internal/images/action.png")
			#sleep (10)
			#os.system ("sudo /var/www/sync/testscreenoff")
	
	if ( GPIO.input(27) == False ):
                print '                                                                                                                           GPIO 27 Released'
		counter = 0

	sleep(0.5);
