Roadmap
*******
- get rid of the noise from audio jack using omxplayer
- change the startscripts with option -b to blank screen
- compile newest ofxPimapper, implement play/pause in CP
- improve sync script with turingmachine (recompile omxplayer, push resolution fix)
- Add fast forward function (dbuscontrol.sh seek, needs recompile of custom omxplayer)
- Slow motion function (1 Increase Speed 2 Decrease Speed to dbus control)
- adding an OSC wrapper for remote control (https://wiki.openlighting.org/index.php/OLA_DMX_Trigger) e.g. select video1 and play, stop.

- mapper remote:implement big step moving
- button to manualy load a mouse connected after boot
- make mapper working without mouse

- sync for slideshow
- Master Slave auto-detection
- integrate LTC / SMPTE function (https://github.com/x42/libltc)

- add play/pause function to mapper (omxplayer overlay)
- adding manual slideshow function which also plays movies (placed in images folder)
- user can define RJ45 Network adress by himself
- adding display force resolution to 1280x800

- add a regular video player (omxplayer without sync) with pause, fastforward, next file, loop functions
- a simple text tool to overlay text infos (e.g. displaying showtimes) (maybe can do with suptitle function?)
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

