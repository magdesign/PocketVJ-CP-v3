This is not compatible with PocketVJ 2.0 only with PocketVJ 3.0/3.1
# PocketVJ Control Panel 1.07b

http://www.pocketvj.com

This files are used to control the PocketVJ 3.0/3.1 via webbrowser.


Clone everything into the `/var/www/` directory.


![Alt text](https://github.com/magdesign/PocketVJ-CP-v3/blob/master/05_mapper.png?raw=true "Optional Title")




##Instruction

Add www-data to your sudoers list with: `visudo` add this line at the end: `www-data ALL=(ALL) NOPASSWD: ALL`

Allow php with: `sudo lighty-enable-mod fastcgi-php`

The video files have to be stored in `/media/internal/video`
The image files have to be stored in `/media/internal/images`
The pdf files have to be stored in `/media/internal/pdf`
The audio files in `/media/internal/audios`

We recommend to use your RPi as a Hotspot, setup as described here: http://elinux.org/RPI-Wireless-Hotspot
(udhcpd seems to work well in debian jessie)

###To do list:
https://github.com/magdesign/PocketVJ-CP-v3/blob/master/ROADMAP.md

###If you Build it from scratch
use the Raspian Lite image together with RPi2/RPi3

###Dependencies to install:

apt-get -y install lxde-core lxterminal lxappearance xinit lightdm ntfs-3g python-pexpect vim figlet git-core firmware-ralink hostapd isc-dhcp-server lighttpd samba samba-common-bin php5-common php5-cgi php5 php5-mysql screen fbi ttf-mscorefonts-installer mediainfo gparted php5-cli iptables xtightvncviewer imagemagick dosfstools exfat-utils exfat-fuse hfsplus hfsprogs hfsutils xdotool expect expect-dev avahi-daemon libavahi-compat-libdnssd-dev feh libjpeg8 libjpeg8-dev libao-dev avahi-utils libavahi-compat-libdnssd-dev libva-dev youtube-dl python-smbus mpg321 mpg123 libreoffice-impress rc-gui python-pip iceweasel python-dbus xpdf x11-xserver-utils libncurses5-dev shellinabox tk okular mountusb libgstreamer0.10-0 libgstreamer0.10-dev gstreamer0.10-tools gstreamer0.10-plugins-base libgstreamer-plugins-base0.10-dev gstreamer0.10-plugins-good gstreamer0.10-plugins-ugly gstreamer0.10-plugins-bad libgstreamer-plugins-base1.0-dev 
gstreamer1.0

pip install pjlink python-osc svgtools svgpathtools svgwrite

sudo aptitude install libmicrohttpd-dev libjansson-dev libnice-dev libssl-dev libsrtp-dev libsofia-sip-ua-dev libglib2.0-dev libopus-dev libogg-dev libini-config-dev libcollection-dev pkg-config gengetopt libtool automake dh-autoreconf

...

configure janus as described here:
https://planb.nicecupoftea.org/2015/10/17/hackspace-hat-quick-install-or-audio-and-video-streaming-from-a-raspberry-pi-to-a-remote-or-local-webrtc-compatible-browser/

...

get the omxplayer-sync: 
https://github.com/turingmachine/omxplayer-sync
Read turingmachines installation instructions.

...

If you want to use PiMapper you must install openframeworks 0.9.2 for arm (openframeworks is placed in /home/pi/openFrameworks): http://forum.openframeworks.cc/t/raspberry-pi-2-setup-guide/18690, before compiling change the keyboard commands in /src/Application/Application.cpp as following:

(will update this, since there changed a lot in recent releases...)

OF_KEY_BACKSPACE to 'd' (delete)

TAB to '5' (toggle)

KEY_UP to '8'

KEY_DOWN to '9'

KEY_LEFT to '7'

KEY_RIGHT to '0'

'h' to 1 (one layer up)

'j' to 2 (one layer down)

d to a (duplicate)

] to v

[ to b

{ to n

} to m

< to k

> to l

space to w (play/pause)

If you want to enable audio, change in: src/Sources/VideoSource.cpp 
line 6:bool VideoSource::enableAudio = true;

line 7 decide weather hdmi or jack: bool VideoSource::useHDMIForAudio = false;

and in: example/src/ofApp.cpp
line 8: ofx::piMapper::VideoSource::enableAudio = true;


Then compile PiMapper (cd into the /example folder and type make) https://github.com/kr15h/ofxPiMapper. 

after compiling go to /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources and delete the two folders images and video.

Then create symlinks

ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos

ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images

Here is a table of keyboard shortcuts for the mapper provided by chaot2:
https://github.com/magdesign/PocketVJ-CP-v3/files/188104/Keys_PocketVJ-VP-v3.pdf

...

To have remote access via Control Panel (for mapping and presentation) you must simulate a fake keyboard, see here: 
http://www.fsays.eu/Blogging/Blog/Details/23
(place it in `/opt/fsaysuinput` `/opt/fsayskeyboard`) 

...


For TCPSClient, download the package here: http://techlife.sg/TCPSClient/index.html
put it to `/usr/bin` and make `chmod u+x TCPSClient.bin`
Read the copyrights on their websites and make a donation!


...


For using the snapshot function:
git-clone https://github.com/info-beamer/tools.git
Go into tools/screenshot/ and type make
then move the screenshot folder to /opt/


...


Install Pi-Wall:

wget http://dl.piwall.co.uk/pwlibs1_1.1_armhf.deb

dpkg -i pwlibs1_1.1_armhf.deb

wget http://dl.piwall.co.uk/pwomxplayer_20130815_armhf.deb

dpkg -i pwomxplayer_20130815_armhf.deb

...

install eXtplorer in /var/www/eXtplorer and configure it:
sudo nano /var/www/eXtplorer/include/init.php

change the root directory to '/media/';

...

Please support this project! 
http://www.pocketvj.com
