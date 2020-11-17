#!/bin/bash

#blank the screen and hide the cursor

sudo sh -c "TERM=linux setterm -foreground black >/dev/tty0"
sudo sh -c "TERM=linux setterm -clear all >/dev/tty0"



#The old commands as reference:
#echo 0 > /sys/class/graphics/fbcon/cursor_blink
#TERM=linux setterm -blank 0 -powersave off -powerdown 0 -foreground black -clear -cursor off >/dev/tty0
#TERM=linux setterm -blank 0 -powersave off -powerdown 0 -foreground black -clear -cursor off >/dev/tty1
#TERM=linux setterm -blank 0 -powersafe off -powerdown 0 >/dev/tty2