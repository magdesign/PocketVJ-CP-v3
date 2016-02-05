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






while(True):
    if (GPIO.input(7)):
        print ("Taste 4")
    if (GPIO.input(11)):
        print ("Taste 3")
    if (GPIO.input(12)):
        print ("Taste 2")
    if (GPIO.input(13)):
        print ("Taste 1")
    if (GPIO.input(15)):
        print ("Taste 8")
    if (GPIO.input(16)):
        print ("Taste 7")
    if (GPIO.input(18)):
        print ("Taste 6")
    if (GPIO.input(22)):
        print ("Taste 5")


GPIO.cleanup()
