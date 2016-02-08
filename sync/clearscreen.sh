#!/bin/bash

printf "\033c" > /dev/tty1


TERM=linux setterm -blank -cursor off >/dev/tty1