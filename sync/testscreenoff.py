#!/bin/bash
sudo killall fbi C &
pkill fbi & 
#sudo killall $(pgrep fbi) &
sudo killall -9 /usr/bin/fbi &

sudo /var/www/sync/clearscreen.sh