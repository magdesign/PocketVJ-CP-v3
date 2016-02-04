# PocketVJ Control Panel 2.0

http://www.pocketvj.com

This file is used to control the PocketVJ over the webbrowser.

Clone everything into the `/var/www/` directory.

This file is only useful if you use the omxplayer-sync https://github.com/turingmachine/omxplayer-sync script.
Read turingmachines installation instructions and get the custom build of omxplayer.

##Instruction

Add www-data to your sudoers list with: `visudo` add this line at the end: `www-data ALL=(ALL) NOPASSWD: ALL`

Allow php with: `sudo lighty-enable-mod fastcgi-php`

The videofiles have to be stored in `/media/internal/video`
The imagefiles have to be stored in `/media/internal/images`

We recommend to use your RPi as a Hotspot, setup as described here: http://elinux.org/RPI-Wireless-Hotspot

###To do list:
https://github.com/magdesign/PocketVJ-CP-v2/blob/master/roadmap.txt


###Dependencies to install:

apt-get -y install ntfs-3g

apt-get -y install python-pexpect

apt-get -y install vim

apt-get -y install figlet

apt-get -y install git-core

apt-get -y install firmware-ralink

apt-get -y install hostapd

apt-get -y install isc-dhcp-server

apt-get -y install lighttpd

apt-get -y install samba samba-common-bin

apt-get -y install php5-common php5-cgi php5 php5-mysql

apt-get -y install screen

apt-get -y install fbi

apt-get -y install ttf-mscorefonts-installer

apt-get -y install mediainfo

apt-get -y install gparted

apt-get -y install php5-cli

apt-get -y install iptables

apt-get -y install xtightvncviewer

apt-get -y install imagemagick

apt-get -y install dosfstools

apt-get -y install exfat-utils exfat-fuse

apt-get -y install hfsplus hfsprogs hfsutils

apt-get -y install xdotool

apt-get -y install expect expect-dev

apt-get -y install libreoffice

apt-get -y install avahi-daemon

apt-get -y install libavahi-compat-libdnssd-dev

apt-get -y install feh

apt-get -y install libjpeg8 libjpeg8-dev

apt-get install libao-dev avahi-utils libavahi-compat-libdnssd-dev libva-dev youtube-dl

wget -O rplay-1.0.1-armhf.deb http://www.vmlite.com/rplay/rplay-1.0.1-armhf.deb

pip install pjlink

pip install python-osc

apt-get install python-smbus

apt-get install mpg321




If you want to use PiMapper you must install openframeworks: http://forum.openframeworks.cc/t/raspberry-pi-2-setup-guide/18690
and then install and compile PiMapper https://github.com/kr15h/ofxPiMapper, then you have to simulate a fake keyboard to unleash the remote control, see here: 
http://www.fsays.eu/Blogging/Blog/Details/23

If you want to use TCPSClient, downnload it here: http://techlife.sg/TCPSClient/index.html
put it to `/usr/bin` and make `chmod u+x TCPSClient.bin`
Read the copyrights on their websites and make a donation!

If you want to install the games:
wget http://malus.exotica.org.uk/~buzz/pi/sdl/sdl1/deb/rpi1/libsdl1.2debian_1.2.15-8rpi_armhf.deb
sudo dpkg -i libsdl1.2debian_1.2.15-8rpi_armhf.deb
apt-get install ketm
apt-get install tint

For using the snapshot function:
git-clone https://github.com/info-beamer/tools.git
Go into tools/screenshot/ and type make
then move the screenshot folder to /opt/

For using the airplay function, install rplay as described here:
http://www.instructables.com/id/AirPlay-Mirroring-without-Apple-TV-using-RPi/?ALLSTEPS)

For using raspberry cast (https://github.com/vincent-lwt/RaspberryCast):
wget https://raw.githubusercontent.com/vincent-lwt/RaspberryCast/master/setup.sh && sudo sh setup.sh




Sync Script and Omxplayer fork written by: Simon Josi, http://www.yokto.net

Pi-Mapper written by: Krisjanis Rijnieks, https://github.com/kr15h/

Virtual Keyboard written by: Erwin van Dijk, http://www.fsays.eu/

TCPSyphon written by: Nozomu Miura, http://techlife.sg/

Clock written by: xorg62, https://github.com/xorg62/tty-clock

Projector Power Script by: Marco Schmalz

Testmovie by: Manuel Berner, http://towerbus.ch/

Testaudio by: Marcel Bieri, https://facebook.com/casashowband

Idea, support and concept by: Marc-André Gasser, http://magdesign.ch/


Copyright by http://magdesign.ch

Please support this project! http://www.pocketvj.com
