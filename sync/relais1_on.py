#!/usr/bin/env python

#this script drives a relais on Pin5 to on
from time import sleep
import os
import RPi.GPIO as GPIO
GPIO.setmode (GPIO.BOARD)
GPIO.setwarnings (False)

GPIO.setup(5, GPIO.OUT)
GPIO.output(5,True)
