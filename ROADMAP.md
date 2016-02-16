Roadmap
*******
what is still to do on PVJ3:

- stop video only script
- loading mapper sets needs save, kill and restart mapper function!
- start image player does not write output status, also pdf player
- set slideshowtime, shall kill and restart imageplayer to take action
- fix the ofx behaviour when logitech wifi mouse is connected 
- mapper does not run without mouse connected
- make all functions executable without reboot

- install and test piwall (see readme): http://www.piwall.co.uk/ 
    test for slave: pwomxplayer --tile-code=41 udp://239.0.1.23:1234?buffer_size=1200000B
    for master:  avconv -re -i movie.avi -vcodec copy -f avi -an udp://239.0.1.23:1234
    figure out how they ment the udp adressing..

- checkout RTMP
- check this for more tools: http://www.ofxaddons.com/categories
  - https://github.com/TsubokuLab/ofxBezierWarpManager (tried it: https://github.com/TsubokuLab/ofxBezierWarpManager/issues/3)
  - https://github.com/frauzufall/ofx2DMapping (cant find make file, how to comile?)
  - https://github.com/TsubokuLab/ofxContrast
  - https://github.com/microcosm/ofxProjectionMask (unable to compile)
  - https://github.com/julapy/ofxQuadWarp (cant find make file, how to comile?)
 ..
=====================================================================

- fix the no mouse mapper behaviour
- make an online update function which updates everything incl. depencies (while dhcp is active)
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
- screen controls for color, brightness, contrast
- Remote mouse for mapping (remotepi app, xdootool?)
- adding a screen recorder to record a TCPSyphon stream
- Start all functions without reboot
- Make sync script compatible with video mapper 
- Automaticly convert incompatible movies to h264  (PocketVJ 3 release), when finished play happy movie ;-)
- Master Slave auto-detection
- Integrate LPMT (already tried it: https://github.com/Foaly/lpmt/issues/15)
- Integrate RaspiVJ function for videomixing
- Artnet output for lightning control
- DMX Creator bridge (emulate usb keyboard over gpio)
- Slow motion function (1 Increase Speed 2 Decrease Speed to dbus control)
- Add fast forward function (dbuscontrol.sh seek, needs recompile of custom omxplayer)
- webcam and 3G hotspot for remote controlling 



Remote:
*******
- make remote control scripts for mapper manual mask adjustment
- save and load comp with name giving for mapper
- test synergy on rpi (for femote mouse in mapping?)
- fix that logitech wireless mouse is accepted in mapper


Testing:
********

- test master/slave
- test imageplayer/audio
- test impress
- test networking as wifi internet hotspot
- test all slideshow functions / pdf

Manual:
*******

- remove rplay, raspberry cast section
- more description for tcpsclient
- how to change things with shell in a box link
- specs for the extension board
.

=======================
©2016 marc-andré gasser

