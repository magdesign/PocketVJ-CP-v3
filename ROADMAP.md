## Roadmap
**********
##

- release new CP and name number it up to CP 3.0.0 so it correspondens to PVJ 3.9, would that make sense ?

### Priority:

- add "fix permissions" button, when internal storage is not writable, add fix permissions to "update all"
- speed up the stopall script to speed up all available functions
- add omxplayer error output when setting to alsa/usb audio but no soundcard is recognized
- check multiscreen when all slaves and master have audio over usb, does it stay sync => make a function to change the sleep function on line 85 for short files to a shorter time!!
- fix mapper audio volume
- add mapper hdmi audio
- sync stop: when in sync mode, send stop from master over network to all slaves (tcp. commands, is currently on a custom button)
- add countdown with processing and input variables
- set static IP resp. set to dhcp, resp, the deplay ip script does not change the ip on those! implement the fix in backend.php under updateall use iprange script from exh
- add the startlesseronce scripts for faster video start via OSC
- Update the osc_control.js 
- add wireless-power off to interfaces ?
- add usb webcam 

### Video: <br />
- check if on 24/7 sync installations files in /var/log/ or /tmp/ or /var/tmp/ grow and cause a sd overfill <br />
- check if really large videos play or if line 84 in  /usr/bin/omxplayer-sync
must be set to 15 <br />
- fade in/out for movies? <br />
- play movies and images after each other <br />
- sync with USB alsa audio does not work, fix it! (is this needed in any way?)<br />
- jump to next file button <br />
- check this: https://www.raspberrypi.org/forums/viewtopic.php?f=38&t=199775&sid=dd74ed7acb6a1eaa3f21ec4753fed07

### Autostart
- Autostart to Processing in fullscreen (still not sure how to execute command, any help from a processing pro?) <br />
- Autostart to sound analyzer (cava)  <br />

### Others:<br />

- move softedge file location to another place<br />
- function to show CPU usage (top is loded, just need to implement in CP now)<br />
- if this still causes trouble:  [terminal square blink](https://raspberrypi.stackexchange.com/questions/3268/how-to-disable-local-terminal-showing-through-when-playing-video)

### Tutorials (Pocketvj.com/Vimeo): <br />

- New video which features the product and its functions<br />
- All autostart functions <br />
- Filename-Fixer<br />


=======================<br />

Opensource rocks, closedsource sucks<br />
©2020 marc-andré gasser

