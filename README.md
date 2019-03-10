This is not compatible with PocketVJ 2.0 \
Works only with PocketVJ 3.x

# PocketVJ Control Panel 2.x.x

### http://www.pocketvj.com

These files are used to control the PocketVJ 3.x via webbrowser. \
Clone everything into the `/var/www` directory.

## Always read the release notes before you update: https://github.com/magdesign/PocketVJ-CP-v3/blob/master/RELEASE_NOTES.md

![Alt text](https://github.com/magdesign/PocketVJ-CP-v3/blob/master/05_mapper.png?raw=true "Optional Title")

## Instruction

- Add www-data to your sudoers list with:\
   `visudo` add this line at the end: `www-data ALL=(ALL) NOPASSWD: ALL`
- Allow php with: `sudo lighty-enable-mod fastcgi-php`

#### Content Locations
- The video files have to be stored in `/media/internal/video`
- The image files have to be stored in `/media/internal/images`
- The pdf files have to be stored in `/media/internal/pdf`
- The audio files in `/media/internal/audios`

### To do list:
https://github.com/magdesign/PocketVJ-CP-v3/blob/master/ROADMAP.md

### If you Build it from scratch
use the Raspian Jessie Lite image together with RPi2/RPi3<br />
(no official support for Raspian Stretch yet, but most of things should work, gstreamer0.10-plugins-bad gstreamer1.0 have no canditate)

### Dependencies to install:


`sudo apt-get -y install avahi-daemon avahi-utils dosfstools exfat-fuse exfat-utils expect expect-dev fbi feh figlet firmware-ralink git-core gparted hfsplus hfsprogs hfsutils hostapd iceweasel imagemagick iptables isc-dhcp-server libao-dev libavahi-compat-libdnssd-dev libavahi-compat-libdnssd-dev libgstreamer-plugins-base0.10-dev libgstreamer-plugins-base1.0-dev libgstreamer0.10-0 libgstreamer0.10-dev libjpeg8 libjpeg8-dev libncurses5-dev libopenblas-dev libreoffice-impress libva-dev lightdm lighttpd lxappearance lxde-core lxterminal mediainfo mpg123 mpg321 ntfs-3g okular php5 php5-cgi php5-cli php5-common php5-mysql python-dbus python-dev python-pexpect python-pip python-smbus rc-gui samba samba-common-bin screen shellinabox tk ttf-mscorefonts-installer usbmount vim x11-xserver-utils xdotool xinit xpdf xtightvncviewer youtube-dl gstreamer0.10-plugins-base gstreamer0.10-plugins-good gstreamer0.10-tools gstreamer0.10-plugins-ugly gstreamer0.10-plugins-bad gstreamer1.0 subversion libfreeimage3 libcppunit-1.13-0 libcppunit-dev ola ola-python g++ make git build-essential libqt4-dev qt4-dev-tools fakeroot debhelper devscripts pkg-config libasound2-dev libusb-dev libftdi-dev libudev-dev libmad0-dev libsndfile1-dev libfftw3-dev`



`
sudo pip install pjlink python-osc svgtools svgpathtools svgwrite PyYAML evdev
`
<br />

disable OLA on boot: `sudo systemctl disable olad
`
<br />

install QLC+: <br />

cd /home/pi <br />
git clone https://github.com/mcallegari/qlcplus.git <br />
cd qlcplus <br />
qmake <br />
make -j4 <br />
sudo make install <br />


remove qlcplus source folder to free up space: <br />
`
sudo rm -rf /home/pi/qlcplus
` 
<br />
install Overlay: <br />
`git clone https://github.com/AndrewFromMelbourne/raspidmx to /home/pi/`

<br />

install HPlayer:
`git clone https://github.com/Hemisphere-Project/HPlayer.git` to /home/pi/HPlayer<br />
cd HPlayer
make
cp -R bin/ ~/HPlayer

...

get the omxplayer-sync:
https://github.com/turingmachine/omxplayer-sync
Read turingmachines installation instructions.
...
 edit `/etc/lighttpd/lighttpd.conf` to change `server.document-root` to: `/var/www/`
...

If you want to use PiMapper, https://github.com/kr15h/ofxPiMapper, you must install openframeworks 0.9.2 for arm (openframeworks is placed in /home/pi/openFrameworks): http://forum.openframeworks.cc/t/raspberry-pi-2-setup-guide/18690, before compiling change the keyboard commands in /src/Application/Application.cpp and in src/Application/Modes/ProjectionMappingMode.cpp

Update: (you dont have to compile, just install all other stuff, then open ControlPanel and hit update mapper...)

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
- `git clone https://github.com/info-beamer/tools.git`
- Go into `tools/screenshot/` and type `make`
- then move the screenshot folder to `/opt/`


...


Install Pi-Wall:

```bash
wget http://dl.piwall.co.uk/pwlibs1_1.1_armhf.deb \
&& dpkg -i pwlibs1_1.1_armhf.deb \
&& wget http://dl.piwall.co.uk/pwomxplayer_20130815_armhf.deb \
&& dpkg -i pwomxplayer_20130815_armhf.deb
```

...

- install eXtplorer in `/var/www/eXtplorer`
- configure it with: `sudo nano /var/www/eXtplorer/include/init.php`
- change the root directory to `/media/;`

...

Please support this project, otherwise it will die some day...!

http://www.pocketvj.com
