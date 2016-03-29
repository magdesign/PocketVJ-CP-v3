Roadmap
*******

- mapper remote:implement big step moving
- button to manualy load a mouse connected after boot
- make mapper working without mouse
- write scripts for extension board: http://36.media.tumblr.com/b1ff51289c41dbd475433b8f058adc8b/tumblr_o2nhexniKa1uyck1ko1_1280.jpg
- improve sync script with turingmachine
- Slow motion function (1 Increase Speed 2 Decrease Speed to dbus control)
- Add fast forward function (dbuscontrol.sh seek, needs recompile of custom omxplayer)
- Master Slave auto-detection
- add play/pause function to mapper (omxplayer overlay)

- adding manual slideshow function which also plays movies (placed in images folder)
- make an online update function which updates everything incl. depencies (while dhcp is active)
- test if I can compile https://github.com/labatrockwell/openTSPS to work with a webcam, to make it posible to send osc data to other applications
- user can define RJ45 Network adress by himself
- adding display force resolution to 1280x800
- integrate LTC / SMPTE function (https://github.com/x42/libltc)
- add a regular video player (omxplayer without sync) with pause, fastforward, next file, loop functions
- a simple text tool to overlay text infos (e.g. displaying showtimes) (maybe can do with suptitle function?)
- adding support of wireless/bluetooth mouse in mapping mode (e.g. Logitech MX)
- adding a function to check filenames, when there is a space, auto rename with _ , remove 'umlauts'
- sync for slideshow
- adding an OSC wrapper for remote control (python-osc)
- screen controls for color, brightness, contrast (openframeworks solution?)
- adding a screen recorder to record a TCPSyphon stream (maybe possible with RPI3)
- Make sync script compatible with video mapper 
- Automaticly convert incompatible movies to h264  (PocketVJ 3 release), when finished picture with smiley:finshed ;-)
- Integrate RaspiVJ function for videomixing (http://w.xuv.be/projects/raspivj#raspivj)
- Artnet output for lightning control
- DMX Creator bridge (emulate usb keyboard over gpio)

- webcam and 3G hotspot for remote controlling
- Integrate LPMT (already tried it: https://github.com/Foaly/lpmt/issues/15)
- check this for more tools: http://www.ofxaddons.com/categories
 - https://github.com/TsubokuLab/ofxBezierWarpManager (tried it: https://github.com/TsubokuLab/ofxBezierWarpManager/issues/3)
  - https://github.com/frauzufall/ofx2DMapping (cant find make file, how to compile?)
  - https://github.com/TsubokuLab/ofxContrast
  - https://github.com/microcosm/ofxProjectionMask (unable to compile)
  - https://github.com/julapy/ofxQuadWarp (cant find make file, how to compile?)
..



Testing:
********

- test master/slave with 1h loop, 3 players, .log files
- test imageplayer/audio
- test impress
- test networking as wifi internet hotspot
- test update
- test piwall
- mapper, all remote buttons
- test all slideshow functions / pdf
- test extension
- more than 3 pocketvjs in same environment, is wifi faster when switching channels?


Manual:
*******
- shortcuts for mapping mode with keyboard
- more description for tcpsclient, with example using syphoner to capture software
- how to change things with shell in a box link
- overall specs description and specs for the extension board, preorder link
- workflow tutorial video: from mapping tool to pocketvj


=======================
©2016 marc-andré gasser

