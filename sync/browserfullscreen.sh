#!/bin/sh

#disable mousepointer
unclutter &
#minimal window manager
matchbox-window-manager &
#run browser

chromium-browser http://localhost/slideshow/index.html --start-fullscreen --kiosk --incognito --noerrdialogs --disable-translate --no-first-run --fast --fast-start --disable-infobars --disable-features=TranslateUI --disk-cache-dir=/dev/null

#use this flag if fullscreen is bad: --window-size=1920,1080