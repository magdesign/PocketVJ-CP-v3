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

#test power LED for 2 seconds
GPIO.output(36, GPIO.HIGH)
sleep (2)
GPIO.output(36, GPIO.LOW)

#test Output 1 for 2 seconds
GPIO.output(29, GPIO.HIGH)
sleep (2)
GPIO.output(29, GPIO.LOW)

#test Output 2 for 2 seconds
GPIO.output(31, GPIO.HIGH)
sleep (2)
GPIO.output(31, GPIO.LOW)






while(True):
    if (GPIO.input(32)==GPIO.LOW):
        print ("IN 1")
    if (GPIO.input(33)==GPIO.LOW):
        print ("IN 2")
    if (GPIO.input(35)):
        print ("Button 1")
    if (GPIO.input(38)):
        print ("Button 2")
    if (GPIO.input(40)):
        print ("Button 3")
    if (GPIO.input(37)):
        print ("Button 4")


GPIO.cleanup()
