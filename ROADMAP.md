Roadmap
*******
- mapper: switch media selection to center of screen, make remote for input selection (numbers)
- make remote for mapping masks, corners
- make shortcut in CP for play master loop
- change the deploy script (vj100, wifi channel is= 6, ff vj 101, wifi channel is 7 etc. in /etc/hostapd/hostapd.conf 
- write scripts for extension board: http://36.media.tumblr.com/b1ff51289c41dbd475433b8f058adc8b/tumblr_o2nhexniKa1uyck1ko1_1280.jpg
.
- improve sync script with turingmachine
- add play/pause function to mapper (omxplayer overlay)
- mapper does not run without mouse connected
- finish the layout with new button sizes
.
=====================================================================

- fix the no mouse mapper behaviour
- make an online update function which updates everything incl. depencies (while dhcp is active)
- test if I can compile https://github.com/labatrockwell/openTSPS to work with a webcam
- user can define RJ45 Network adress by himself
- adding display force resolution to 1280x800
- add a regular video player (omxplayer without sync) with pause, fastforward, next file, loop functions
- starting/stoping movies while manual slideshow persists
- adding slideshow function which also plays movies
- a simple text tool to overlay text infos (for displaying showtimes) (maybe with suptitle function)
- adding support of wireless/bluetooth mouse in mapping mode (e.g. Logitech MX)
- adding a function to check filenames, when there is a space, auto rename with _ , remove 'umlauts'
- sync for slideshow
- add new testfile which is smoothly recorded
- adding an OSC wrapper for remote control pip install python-osc (https://pypi.python.org/pypi/python-osc)
- screen controls for color, brightness, contrast (openframeworks solution?)
- Remote mouse for mapping (remotepi app, xdootool?)
- adding a screen recorder to record a TCPSyphon stream
- Start all functions without reboot
- Make sync script compatible with video mapper 
- Automaticly convert incompatible movies to h264  (PocketVJ 3 release), when finished play happy movie ;-)
- Master Slave auto-detection
- Integrate LPMT (already tried it: https://github.com/Foaly/lpmt/issues/15)
- Integrate RaspiVJ function for videomixing (http://w.xuv.be/projects/raspivj#raspivj)
- Artnet output for lightning control
- DMX Creator bridge (emulate usb keyboard over gpio)
- Slow motion function (1 Increase Speed 2 Decrease Speed to dbus control)
- Add fast forward function (dbuscontrol.sh seek, needs recompile of custom omxplayer)
- webcam and 3G hotspot for remote controlling
- check this for more tools: http://www.ofxaddons.com/categories
 - https://github.com/TsubokuLab/ofxBezierWarpManager (tried it: https://github.com/TsubokuLab/ofxBezierWarpManager/issues/3)
  - https://github.com/frauzufall/ofx2DMapping (cant find make file, how to compile?)
  - https://github.com/TsubokuLab/ofxContrast
  - https://github.com/microcosm/ofxProjectionMask (unable to compile)
  - https://github.com/julapy/ofxQuadWarp (cant find make file, how to compile?)
..


Remote:
*******
- make remote control scripts for mapper manual mask adjustment
- test synergy on rpi (for remote mouse in mapping?)
- fix that logitech wireless mouse is accepted in mapper

Testing:
********

- test master/slave with 1h loop, 3 players, .log files
- test imageplayer/audio
- test impress
- test networking as wifi internet hotspot
- test update
- test piwall
- mapper
- test all slideshow functions / pdf
-test extension


Manual:
*******


- more description for tcpsclient
- how to change things with shell in a box link
- specs for the extension board
.

=======================
©2016 marc-andré gasser

