## Roadmap
**********

### Video: <br />
- test if gstreamer gst-omx is loading videos faster for GPIO implementations (compile: https://gist.github.com/Swap-File/ea4b7a4739ca8c859bd7c3c3d8b087e6) <br />
- play movies and images after each other <br />
- sync with USB alsa audio does not work, fix it! (is this needed in any way?)<br />
- jump to next file button <br />
- Slow motion function (1 Increase Speed 2 Decrease Speed) (dbus control no ready yet, waiting for new omxplayer version https://github.com/popcornmix/omxplayer)<br />
- Master Slave auto-detection<br />

### Streaming: <br />
- Support NDI http://forums.newtek.com/showthread.php?150879-Not-able-to-open-NDI-receive-on-Linux http://mkto-q0143.com/WQ0aoaVif0k3CMg00x00e00 <br />
- Update Tcpsyphon (https://github.com/z37soft/INetSyphon_RaspberryPi_SDK)
- uv4l (https://www.linux-projects.org/uv4l/tutorials/desktop-streaming/)

### Image: <br />
- Gif player <br />
- slideshow with ken burns effect (maybe with QT: https://gist.github.com/nbergont/8963892, or openFramworks ofImage)<br />

### Mapper: <br />
- New version from kr15h with remote server, make it compatible with CP (webbased) and release<br />
- inputs for this : <br />
Basic communication: https://robots.thoughtbot.com/json-event-based-convention-websockets <br />
Canvas:  https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_canvas_fillrect <br />
Drawing the rectangles:http://sigmajs.org/ , or using snap.svg-min.js<br />
Others:<br />
http://danielnill.com/nodejs-tutorial-with-socketio , https://github.com/sitepoint-editors/websocket-demo<br />
 A send event must look something like this: <br />
 { <br />
   "button" : 0, <br />
   "event" : "mouseDragged", <br />
   "x" : 1434, <br />
   "y" : 165 <br />
} <br />
 <br />
Notes:  <br />
- First get canvas size from pocketVJ with: tvservice -s, parse the result to draw a canvas in website. <br />
- get list of all available sources. <br />
<br />
Or realize it with openframeworks ofxHTTP, ofxJSONRPC <br />
 https://github.com/bakercp/ofxJSONRPC <br />
https://github.com/kashimAstro/ofxUIJquery<br />
https://github.com/fx-lange/ofxSyncedParams<br />
https://github.com/armadillu/ofxRemoteUI<br />
Any inputs very welcome, also looking for someone who is familiar with the materia and might solve this pretty fast.<br />
<br />


- Bezier Warp, as seen here: https://github.com/TsubokuLab/ofxBezierWarpManager https://github.com/sticknor/ofxBezierWarpManager, both examples are openGL, but i hope there is a way without it<br />
- Grid mesh <br />
- Website or screengrabber as source for mapper  <br />
- Add playlist version of mapper (plays every video in /media/internal/video) <br />
- audio usb alsa support<br />
- compile shortcut for bigmove, make moves even bigger, also small moves(not importand if remote server works <br />
- Make sync script compatible with video mapper, need new ofxomxplayer, find a coder who can do this, payable! <br />

### Autostart
- Autostart to Processing in fullscreen (still not sure how to execute command) <br />

### Others:<br />
 
- buttons in CP for camera efx (already in backend implemented) <br />
- check if changes in htaccess file can help resolving functions e.g. 2.0.0.100/update <br />
- include SuperPikixPi into update process<br />
- move softedge file location to another place<br />
- Add OLA DMX trigger scripts to control PVJ with DMX commands<br />
- Add OLA DMX recorder script and DMX playback script to record and playback DMX commands <br />
- Search for an DMX player, https://github.com/peterdikant/SimpleDmxEngine which could be synced to omxplayer <br />
- Add some processing demos in fullscreen <br />
- integrate sound analyzer for use with mic or soundfile: https://github.com/karlstav/cava<br />
- sound reactive video effects https://github.com/karlstav/cava https://github.com/xdaimon/music_visualizer<br />
- integrate UV4L Streaming Server (http://www.linux-projects.org/uv4l/) (tested: works 640x480, waiting for HD)<br />
- screen controls for color, brightness, contrast (openframeworks solution?) <br />
- function to show CPU usage (top)<br />
- function to display version of omxplayer, feh, tcpsyphon<br />
- make an artnet/dmx script to control omxplayer: http://doityourselfchristmas.com/forums/archive/index.php/t-22092.html <br />
- Integrate artnet player from aeby: https://github.com/atizo/epicwall/tree/master/standalone<br />
- Integrate PiTunnel for remote management <br />
- Hub75 library to be compatible with led panels and adafruit board <br />
- Integrate RaspiVJ function for videomixing (http://w.xuv.be/projects/raspivj#raspivj) <br />
- get into pi3d: http://pi3d.github.io/html/ReadMe.html#setup-on-the-raspberry-pi maybe do a mapper + slidshow with this<br />
- get into shaders: http://journeytounknownsoundscapes.blogspot.ch/2013/02/raspi-as-poor-mans-video-jockey.html?m=1<br />
- more shader stuff: https://github.com/dff180/pishadertoy<br />
- https://github.com/scottlawsonbc/audio-reactive-led-strip<br />
...

### OS for PVJ 3.6: <br />
- switch to alpinelinux: https://wiki.alpinelinux.org/wiki/Raspberry_Pi
- add Fugio (https://www.bigfug.com)<br />
- integrate driver for usb webcam: sudo apt-get install fswebcam<br />
- integrate neopixel driver https://dordnung.de/raspberrypi-ledstrip/ws2812<br />
- integrade HUB75 library <br />
- add htop for monitoring usage

### Manual .pdf: <br />

- update manual for CP2.0.x release, new screenshots, half way done...i hate office programs <br />
- shortcuts for mapping mode with keyboard <br />
- more description for tcpsclient, with example using syphoner to capture software <br />
- correct errors concerning timer.txt (possible to seperate with commas? ) <br />
- Add scheduler commands <br />
- Something about GPIO, where is the script and how to connect buttons <br />

### Tutorials (Pocketvj.com/Vimeo): <br />

- Uplaod with Filezilla<br />
- All autostart functions <br />
- DMX functions<br />
- Filename-Fixer<br />
- Show the streamer function to stream audio over wifi<br /> 
- Mapper remote versions<br />

=======================<br />
Opensource rocks, closedsource sucks<br />
©2018 marc-andré gasser

