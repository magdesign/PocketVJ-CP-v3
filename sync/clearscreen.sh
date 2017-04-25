#!/bin/bash


printf "\033c" > /dev/tty0
printf "\033c" > /dev/tty1

sudo -u root setterm -cursor off > /dev/tty0

