#!/bin/bash
#kill all running tasks
sudo /var/www/sync/omxkill.py
sudo /var/www/sync/testscreenoff.py &
sudo killall -9 /home/pi/of_v0.8.4/addons/ofxPiMapper/example/./bin/example
sudo killall -9 /usr/bin/TCPSClient.bin
sudo /var/www/sync/rplay stop
sudo killall -9 /var/www/sync/tty-clock
sudo killall -9 feh
sudo /var/www/sync/killxsession
sudo /var/www/sync/clearscreen.sh
sudo sudo killall -9 mpg321

#display testscreen
sudo fbi -T 1 -noverbose /var/www/sync/testscreen.png &
