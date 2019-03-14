## Roadmap
**********
### Important:<br />

- fix terminal square blink when nothing is playing (in osc mode, also in standard mode?) <br />
- midi support for usb midi devices https://github.com/magdesign/PocketVJ-CP-v3/issues/5#issuecomment-453174457 (thanks to frankbash).<br />

- add dmx in scripts to trigger videos via dmx: https://wiki.openlighting.org/index.php/OLA_DMX_Trigger <br />

### Video: <br />
- fade in/out for movies <br />
- play movies and images after each other <br />
- sync with USB alsa audio does not work, fix it! (is this needed in any way?)<br />
- jump to next file button <br />
- Slow motion function (1 Increase Speed 2 Decrease Speed) (dbus control no ready yet, waiting for new omxplayer version https://github.com/popcornmix/omxplayer)<br />
- Master Slave auto-detection<br />
- Audio reactive effects, like RGB change to beat, pulsating brightness, some efx similar to camera effects<br />

### Streaming: <br />
- Remove NDI since NewTek discountinued ARM support.<br />
- add TCPSyphon parts for video wall: https://github.com/magdesign/PocketVJ-CP-v3/issues/5#issuecomment-452022353<br />
- Update Tcpsyphon (https://github.com/z37soft/INetSyphon_RaspberryPi_SDK) to newest version.<br />
- uv4l (https://www.linux-projects.org/uv4l/tutorials/desktop-streaming/)<br />

### Image: <br />
- slideshow with ken burns effect (maybe with QT: https://gist.github.com/nbergont/8963892, or openFramworks ofImage) <br />
- make a new slideshow function based on webbrowser so we could use transition effects <br />

### Mapper: <br />
- Build a completely new version of Mapper with more performance, remote controllable, syncable, edge blending. Prototype availabe on my github https://github.com/magdesign/MAGmapper. <br />
- Find a way to make the B101 CSI HDMI brige working again in ofxMapperCam. <br />

### Filebrowser: <br />
- Simplified filebrowser to upload files with drag'n'drop (dropzone.js, but how to configure server?) <br />

### Autostart
- Autostart to Processing in fullscreen (still not sure how to execute command, any help from a processing pro?) <br />
- Autostart to sound analyzer (cava)  <br />

### Others:<br />
- Integrate some sort of remote management (what about security, fireall etc?) <br />
- Integrate remote webcam control  <br />
- configure a libray and button for lirc to remotely turn on/off TV's and Projectors without RJ45. <br />
- move softedge file location to another place<br />
- Add OLA DMX trigger scripts to control PVJ with DMX commands<br />
- Add OLA DMX recorder script and DMX playback script to record and playback DMX commands <br />
- Search for an DMX player, https://github.com/peterdikant/SimpleDmxEngine which could be synced to omxplayer <br />
- add a cava button br />
- screen controls for color, brightness, contrast (openframeworks solution?) <br />
- function to show CPU usage (top is loded, just need to implement in CP now)<br />
- function to display version of omxplayer, feh, tcpsyphon<br />


### OS for PVJ xxx: <br />
- switch to debian stretch or use http://raspex.exton.se/ <br />
- add Fugio (https://www.bigfug.com) Update: https://github.com/bigfug/Fugio/issues/46#issuecomment-464824307 <br />
- add docker ? <br />

### Manual .pdf: <br />
- Something about GPIO, where is the script and how to connect buttons <br />

### Others, Website (Pocketvj.com): <br />

- make a contest for more opensource case designs, e.g. camera case, ir case... <br />
- people who can't afford PocketVJ can promote it on socialmedia and make tutorials for discounts.  <br />
- add more info about the projects i am donationg to. <br />


### Tutorials (Pocketvj.com/Vimeo): <br />

- Uplaod with Filezilla<br />
- All autostart functions <br />
- Filename-Fixer<br />
- new promo video which features the product <br />

=======================<br />

Opensource rocks, closedsource sucks<br />
©2018 marc-andré gasser

