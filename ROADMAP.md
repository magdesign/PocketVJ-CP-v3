## Roadmap
**********

### Video: <br />
- make a function which plays movies and images after each other <br />
- sync with USB alsa audio does not work, fix it! <br />
- jump to next file button <br />
- Slow motion function (1 Increase Speed 2 Decrease Speed) (dbus control no ready yet, waiting for new omxplayer version https://github.com/popcornmix/omxplayer)<br />
- Master Slave auto-detection<br />

### Streaming: <br />
- Support NDI http://forums.newtek.com/showthread.php?150879-Not-able-to-open-NDI-receive-on-Linux http://mkto-q0143.com/WQ0aoaVif0k3CMg00x00e00 <br />
- Update Tcpsyphon (need libs from debian stretch, causes PVJ update to 4.0 or a good dependencies hack)
- uv4l (https://www.linux-projects.org/uv4l/tutorials/desktop-streaming/)

### Image: <br />
- Gif player <br />
- slideshow with ken burns effect (maybe with QT, or openFramworks ofImage)<br />

### Mapper: <br />
- Integrate slideshow into mapper (coming soon, https://github.com/magdesign/ofxPiMapper) <br />
- Spherical mask <br />
- Grid mesh <br />
- Add playlist version of mapper (plays every video in /media/internal/video) <br />
- .svg to .xml parser to import .svg from mapping softwares to mapper (as soones as circular shapes are finished) (https://github.com/magdesign/mapping-converter)
- audio usb alsa support<br />
- compile shortcut for bigmove, make moves even bigger, also small moves<br />
- make mapper working without mouse<br />
- Make sync script compatible with video mapper <br />

### Autostart
- Autostart to Processing in fullscreen (still not sure how to execute command)<br />

### Others:<br />

- Add some processing demos in fullscreen <br />
- get into pi3d: http://pi3d.github.io/html/ReadMe.html#setup-on-the-raspberry-pi maybe do a mapper + slidshow with this<br />
- get into shaders: http://journeytounknownsoundscapes.blogspot.ch/2013/02/raspi-as-poor-mans-video-jockey.html?m=1<br />
- more shader stuff: https://github.com/dff180/pishadertoy<br />
- integrate sound analyzer for use with mic or soundfile: https://github.com/karlstav/cava<br />
- sound reactive video effects<br />
- processing<br />
- integrate UV4L Streaming Server (http://www.linux-projects.org/uv4l/) (tested: works 640x480, waiting for HD)<br />
- adding a function to check filenames, when there is a space, auto rename with _ , remove 'umlauts' (use a sed command for this)<br />
- screen controls for color, brightness, contrast (openframeworks solution?) <br />
- Integrate RaspiVJ function for videomixing (http://w.xuv.be/projects/raspivj#raspivj) <br />
- function to show CPU usage (top) (/opt/vc/bin/vcgencmd measure_temp)
- function to display version of omxplayer, feh, tcpsyphon
- Integrate artnet player from aeby: https://github.com/atizo/epicwall/tree/master/standalone
..

### Manual: <br />

- update manual for CP2.0.x release <br />
- shortcuts for mapping mode with keyboard <br />
- more description for tcpsclient, with example using syphoner to capture software <br />
- correct errors concerning timer.txt (possible to seperate with commas? ) <br />
- Add scheduler commands <br />

=======================<br />
©2017 marc-andré gasser

