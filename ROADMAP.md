## Roadmap
**********

### Video: <br />
- test if gstreamer gst-omx is loading videos faster for GPIO implementations <br />
- play movies and images after each other <br />
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
- slideshow with ken burns effect (maybe with QT: https://gist.github.com/nbergont/8963892, or openFramworks ofImage)<br />

### Mapper: <br />
- Grid mesh <br />
- Website or screengrabber as source for mapper  <br />
- Add playlist version of mapper (plays every video in /media/internal/video) <br />
- audio usb alsa support<br />
- compile shortcut for bigmove, make moves even bigger, also small moves<br />
- make mapper working without mouse<br />
- Make sync script compatible with video mapper <br />

### Autostart
- Autostart to Processing in fullscreen (still not sure how to execute command) <br />

### Others:<br />
 
- include SuperPikixPi into update process<br />
- move softedge file location to another place<br />
- Add OLA DMX trigger scripts to control PVJ with DMX commands<br />
- Add OLA DMX recorder script and DMX playback script to record and playback DMX commands <br />
- Search for an DMX player, https://github.com/peterdikant/SimpleDmxEngine which could be synced to omxplayer <br />
- Add some processing demos in fullscreen <br />
- integrate sound analyzer for use with mic or soundfile: https://github.com/karlstav/cava<br />
- sound reactive video effects https://github.com/karlstav/cava https://github.com/xdaimon/music_visualizer<br />
- integrate UV4L Streaming Server (http://www.linux-projects.org/uv4l/) (tested: works 640x480, waiting for HD)<br />
- adding a function to check filenames, when there is a space, auto rename with _ , remove 'umlauts' (use a sed command for this)<br />
- screen controls for color, brightness, contrast (openframeworks solution?) <br />
- function to show CPU usage (top)<br />
- function to display version of omxplayer, feh, tcpsyphon<br />
- Integrate artnet player from aeby: https://github.com/atizo/epicwall/tree/master/standalone<br />
- Integrate PiTunnel for remote management <br />
- Hub75 library to be compatible with led panels and adafruit board <br />
- Integrate RaspiVJ function for videomixing (http://w.xuv.be/projects/raspivj#raspivj) <br />
- get into pi3d: http://pi3d.github.io/html/ReadMe.html#setup-on-the-raspberry-pi maybe do a mapper + slidshow with this<br />
- get into shaders: http://journeytounknownsoundscapes.blogspot.ch/2013/02/raspi-as-poor-mans-video-jockey.html?m=1<br />
- more shader stuff: https://github.com/dff180/pishadertoy<br />
- https://github.com/scottlawsonbc/audio-reactive-led-strip<br />
...

### Manual: <br />

- update manual for CP2.0.x release, new screenshots <br />
- shortcuts for mapping mode with keyboard <br />
- more description for tcpsclient, with example using syphoner to capture software <br />
- correct errors concerning timer.txt (possible to seperate with commas? ) <br />
- Add scheduler commands <br />

### Tutorials (Vimeo): <br />

- Uplaod with Filezilla<br />
- DMX functions<br />
- Mapping Converter<br />
- new update tutorial<br />


=======================<br />
©2018 marc-andré gasser

