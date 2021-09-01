
TROUBLESHOOTING
===============

**Get help online:** https://github.com/magdesign/PocketVJ-CP-exh/issues

There will always be a solution :-)


**Movie plays, but stutters** => Check if it is really a h.264 compressed movie.

**I dont get an IP address from the PocketVJ** => Be patient, try again.


.. note::
    Sometimes there are power peaks which can cause that the Wifi signal is not strong enough.
    Known are some issues with Hdmi to VGA adapters with old VGA devices who suck a lot of power.
    Also after plugging in some USB sticks. If there are many wireless devices in the room, change the wifi channel, since most units use channel 6 as standard.


**Movie is not playing**

- Make sure that there is no space or special character in the filename and it is not longer than 16 characters, my_video_file.mp4 not: my video file.mp4.
- Make sure your video is converted with the h264 codec (this causes in most cases the error)
- Make sure your video data is in the correct folder (/media/internal/video/).
- Make sure your PocketVJ is not configured to ‘Slideshow’ mode.
- Make sure audio output is set to HDMI/ Jack or both if there is no external soundcard connected, otherwise it will search for the ALSA device and will not start.

**USB-Stick does not work anymore on my computer** => Plug it back into the PocketVJ and Click UNMOUNT in the control panel.

Make sure to always mount and unmount your USB devices!

**Connected several PocketVJs over a router**
- Check the Gateway settings of your router, in original mode the PocketVJ runs in 192.168.2.1

**Remote “Power On Projector” does not work**

- Login to projector, enable PJLink, disable all passwords
- Under Service, enable DDDP and set the Crestron control IP to: 192.168.2.254
- make sure the Projector has following network info:


``IP: 192.168.2.254``

``Subnet: 255.255.255.0``

``Default Gateway: 192.168.2.1``

``DNS Server: 192.168.2.1``

- check this troubleshoot video: https://vimeo.com/379009854
- make sure the computer which is connected to the PocketVJ CP is not connected to second network, for example RJ45 in your local network and wifi to PocketVJ, if this is the case, unplug rj45 until it finds the projector, then you can plug it in again.
 Get a list of standard passwords for projectors here: https://github.com/magdesign/PocketVJ-CP-v3/blob/master/projector_passwords.md



CREATE h264 MOVIES
******************

Best way to do this is using https://handbrake.fr

Beleive me, the Adobe codecs are crap!





**Finally, after several hours I reached the end of the documentation, if there is somethingn wrong or missing, please tell me!**