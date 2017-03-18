Roadmap
*******
- upgrade to newest pimapper, which looks very promising in terms of alsa audio and syncing...
- mapper: compile shortcut for bigmove, make moves even bigger, also small moves
- mapper: remote buttons for scaling up and scaling down
- update and include all license texts of all used tools...
- slideshow with ken burns effect (maybe with QT, or openFramworks ofImage))
- integrate miracast (https://github.com/albfan/miraclecast) do we need this?
- integrate sound analyzer for use with mic or soundfile: https://github.com/karlstav/cava
- .svg to .xml parser to import .svg from mapping softwares to mapper (https://github.com/magdesign/mapping-converter)
- mapper remote: moving has quite a big delay, fix this
- make mapper working without mouse
- button to manually load a mouse connected after boot
- more FBO sources, masks
- integrate UV4L Streaming Server (http://www.linux-projects.org/uv4l/) (tested: works 640x480, waiting for HD)
- change the startscripts with option -b to blank screen
- Slow motion function (1 Increase Speed 2 Decrease Speed) (dbus control no ready yet, waiting for new omxplayer version)
- Sync in seamless loop 
- edge blending function
- adding an OSC wrapper for remote control (https://wiki.openlighting.org/index.php/OLA_DMX_Trigger) e.g. select video1 and play, stop.
   omxplayer via OSC: https://github.com/Hemisphere-Project/HPlayer
- sync for slideshow
- Master Slave auto-detection
- integrate LTC / SMPTE function (https://github.com/x42/libltc)
- adding manual slideshow function which also plays movies (placed in images folder)
- user can define RJ45 Network adress by himself
- adding support of wireless/bluetooth mouse in mapping mode (e.g. Logitech MX)
- adding a function to check filenames, when there is a space, auto rename with _ , remove 'umlauts'
- screen controls for color, brightness, contrast (openframeworks solution?)
- adding a screen recorder to record a TCPSyphon stream (maybe possible with RPI3)
- Make sync script compatible with video mapper 
- Automaticly convert incompatible movies to h264  (PocketVJ 3 release), when finished picture with smiley:finshed ;-)
- Integrate RaspiVJ function for videomixing (http://w.xuv.be/projects/raspivj#raspivj)
- Artnet output for lightning control
- DMX Creator bridge (emulate usb keyboard over gpio)
- webcam and 3G hotspot for remote controlling
- Integrate LPMT (already tried it: https://github.com/Foaly/lpmt/issues/15)
- integration to a third party mapping tool
- make compatible with other arm boards like nanoPi
- and much more....
..

Manual:
*******
- shortcuts for mapping mode with keyboard
- more description for tcpsclient, with example using syphoner to capture software
- how to change things with shell in a box link

=======================
©2016 marc-andré gasser

