# PocketVJ Control Panel 3.0 (beta)
(Its beta,  use it on your own risk, for the controlpanel us the one from PocketVJ 2.0
scripts are not working on PocketVJ 2.0)

http://www.pocketvj.com

This files are used to control the PocketVJ 3.0 via webbrowser.

Clone everything into the `/var/www/` directory.

This file is only useful if you use the omxplayer-sync https://github.com/turingmachine/omxplayer-sync script.
Read turingmachines installation instructions and get the custom build of omxplayer.
https://github.com/turingmachine/omxplayer-sync

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
https://github.com/magdesign/PocketVJ-CP-v3/blob/master/roadmap.txt

###If you Build it from scratch
use the Raspian Lite image together with RPi2

###Dependencies to install:

apt-get -y install lxde-core lxterminal lxappearance xinit lightdm ntfs-3g python-pexpect vim figlet git-core firmware-ralink hostapd isc-dhcp-server lighttpd samba samba-common-bin php5-common php5-cgi php5 php5-mysql screen fbi ttf-mscorefonts-installer mediainfo gparted php5-cli iptables xtightvncviewer imagemagick dosfstools exfat-utils exfat-fuse hfsplus hfsprogs hfsutils xdotool expect expect-dev avahi-daemon libavahi-compat-libdnssd-dev feh libjpeg8 libjpeg8-dev libao-dev avahi-utils libavahi-compat-libdnssd-dev libva-dev youtube-dl python-smbus mpg321 mpg123 libreoffice-impress rc-gui python-pip iceweasel python-dbus xpdf x11-xserver-utils libncurses5-dev shellinabox tk okular

pip install pjlink

pip install python-osc


...


If you want to use PiMapper you must install openframeworks 9.2 for arm (openframeworks is placed in /home/pi/openFrameworks): http://forum.openframeworks.cc/t/raspberry-pi-2-setup-guide/18690, before compiling change the keyboard command in /src/Application/ProjectionMappingState.cpp (OF_KEY_BACKSPACE to 'd') and then compile PiMapper https://github.com/kr15h/ofxPiMapper. 
after compiling go to /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources and delete the two folders images and video.
Then create symlinks ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/video  /media/internal/images   ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images


...

To have remote access via Control Panel (for mapping and presentation) you must simulate a fake keyboard, see here: 
http://www.fsays.eu/Blogging/Blog/Details/23
(place it in `/opt/fsaysuinput` `/opt/fsayskeyboard`) 

...


For TCPSClient, downnload the package here: http://techlife.sg/TCPSClient/index.html
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

Please support this project! 
http://www.pocketvj.com
