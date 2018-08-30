## Roadmap
**********
### fixes:  <br />
- fix that no longer .xsession file says what to autostart, use /home/pi/.config/lxsession/LXDE/autostart instead.
this might fix the problem when making apt upgrade and all the x functions do not work anymore.<br />
- remove videomapper remote app button in CP and add magmapper button (when the prototype runs).<br />


### Video: <br />
- remove hplayer since now everything works with osc <br />
- fade in out for movies <br />
- play movies and images after each other <br />
- sync with USB alsa audio does not work, fix it! (is this needed in any way?)<br />
- jump to next file button <br />
- Slow motion function (1 Increase Speed 2 Decrease Speed) (dbus control no ready yet, waiting for new omxplayer version https://github.com/popcornmix/omxplayer)<br />
- Master Slave auto-detection<br />
- Audio reactive effects, like RGB change to beat, pulsating brightness, some efx similar to camera effects<br />

### Streaming: <br />
- Remove NDI since NewTek discountinued ARM support.
- Update Tcpsyphon (https://github.com/z37soft/INetSyphon_RaspberryPi_SDK) to newest version.
- uv4l (https://www.linux-projects.org/uv4l/tutorials/desktop-streaming/)

### Image: <br />
- Gif player, gif for cli https://github.com/google/gif-for-cli <br />
- slideshow with ken burns effect (maybe with QT: https://gist.github.com/nbergont/8963892, or openFramworks ofImage)<br />

### Mapper: <br />
- Build a completely new version of Mapper with more performance, remote controllable, syncable, edge blending. Prototype availabe on my github. <br />

### Autostart
- Autostart to Processing in fullscreen (still not sure how to execute command, any help from a processing pro?) <br />
- Autostart to sound analyzer (cava)  <br />

### Others:<br />
- temporary shutdown webserver function to gain more ressources when using OSC or pixi.
- check if changes in htaccess file can help resolving functions e.g. 2.0.0.100/update <br />
- move softedge file location to another place<br />
- Add OLA DMX trigger scripts to control PVJ with DMX commands<br />
- Add OLA DMX recorder script and DMX playback script to record and playback DMX commands <br />
- Search for an DMX player, https://github.com/peterdikant/SimpleDmxEngine which could be synced to omxplayer <br />
- Check if processing is still working and add some processing demos in fullscreen <br />
- sound reactive video effects https://github.com/karlstav/cava https://github.com/xdaimon/music_visualizer<br />
- screen controls for color, brightness, contrast (openframeworks solution?) <br />
- function to show CPU usage (top is loded, just need to implement in CP now)<br />
- function to display version of omxplayer, feh, tcpsyphon<br />
- Integrate artnet player from aeby: https://github.com/atizo/epicwall/tree/master/standalone<br />
- Integrate PiTunnel for remote management (is this needed? what about security, fireall etc?) <br />

### OS for PVJ 3.7: <br />
- add Fugio (https://www.bigfug.com) Update: not installable nor compilable on raspian jessie :( <br />
- update qlcplus for headless without hdmi (run with -n or --nogui), need to compile newest version <br />

### OS for PVJ 3.8: <br />
- switch to alpinelinux: https://wiki.alpinelinux.org/wiki/Raspberry_Pi<br />

### Manual .pdf: <br />

- Something about GPIO, where is the script and how to connect buttons <br />

### Tutorials (Pocketvj.com/Vimeo): <br />

- Uplaod with Filezilla<br />
- All autostart functions <br />
- Filename-Fixer<br />
- new promo video which features the product <br />

=======================<br />

Opensource rocks, closedsource sucks<br />
©2018 marc-andré gasser

