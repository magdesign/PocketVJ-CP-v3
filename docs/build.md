# Build

> These files are used to control the PocketVJ 3.xx via web browser.

- Clone everything into the `/var/www/` directory.

If you Build it from scratch...

> Keep in mind that some dependencies are outdated and the whole process may take a lot of time!!
> use the Raspian Jessie Lite image 8.0 (jessie) together with RPi3b+

- Add www-data to your sudoers list with:\
   `visudo` add this line at the end: `www-data ALL=(ALL) NOPASSWD: ALL`
- Allow php with: `sudo lighty-enable-mod fastcgi-php`

## Install dependencies

### Install required dependencies via apt

```bash
sudo apt-get -y install avahi-daemon avahi-utils dosfstools exfat-fuse exfat-utils expect expect-dev fbi feh figlet firmware-ralink git-core gparted hfsplus hfsprogs hfsutils hostapd iceweasel imagemagick iptables isc-dhcp-server libao-dev libavahi-compat-libdnssd-dev libavahi-compat-libdnssd-dev libgstreamer-plugins-base0.10-dev libgstreamer-plugins-base1.0-dev libgstreamer0.10-0 libgstreamer0.10-dev libjpeg8 libjpeg8-dev libncurses5-dev libopenblas-dev libreoffice-impress libva-dev lightdm lighttpd lxappearance lxde-core lxterminal mediainfo mpg123 mpg321 ntfs-3g okular php php-cgi php-cli php-common php-mysql python-dbus python-dev python-pexpect python-pip python-smbus rc-gui samba samba-common-bin screen shellinabox tk ttf-mscorefonts-installer usbmount vim x11-xserver-utils xdotool xinit xpdf xtightvncviewer youtube-dl gstreamer0.10-plugins-base gstreamer0.10-plugins-good gstreamer0.10-tools gstreamer0.10-plugins-ugly gstreamer0.10-plugins-bad gstreamer1.0 subversion libfreeimage3 libcppunit-1.13-0v5 libcppunit-dev ola ola-python g++ make git build-essential libqt4-dev qt4-dev-tools fakeroot debhelper devscripts pkg-config libasound2-dev libusb-dev libftdi-dev libudev-dev libmad0-dev libsndfile1-dev libfftw3-dev
```

### install required python lib

```bash
sudo pip install pjlink python-osc svgtools svgpathtools svgwrite PyYAML evdev
```

### Disable OLA on boot

```bash
sudo systemctl disable olad
```

### Install QLC+

```bash
cd /home/pi
git clone <https://github.com/mcallegari/qlcplus.git>
cd qlcplus
qmake
make -j4
sudo make install
```

### Remove `qlcplus` source folder

to free up space:

```bash
sudo rm -rf /home/pi/qlcplus
```

### Install Overlay

to `/home/pi/`

```bash
git clone https://github.com/AndrewFromMelbourne/raspidmx
```

### Install HPlayer

to `/home/pi/HPlayer`

```bash
git clone https://github.com/Hemisphere-Project/HPlayer.git
cd HPlayer
make
cp -R bin/ ~/HPlayer
```

### Install omxplayer

get the [omxplayer-sync](https://github.com/turingmachine/omxplayer-sync)
Read turingmachines installation instructions.

### Lighthttpd

edit `/etc/lighttpd/lighttpd.conf` to change `server.document-root` to: `/var/www/`

### PiMapper

If you want to use PiMapper[PiMapper](https://github.com/kr15h/ofxPiMapper)

You **must** install [openframeworks 0.9.2 for arm](http://forum.openframeworks.cc/t/raspberry-pi-2-setup-guide/18690)

(openframeworks is placed in /home/pi/openFrameworks):

before compiling change the keyboard commands in /src/Application/Application.cpp and in src/Application/Modes/ProjectionMappingMode.cpp

Update: (you dont have to compile, just install all other stuff, then open ControlPanel and hit update mapper...)

### Remote access

To have remote access via Control Panel (for mapping and presentation) you must simulate a fake keyboard, see [here](http://www.fsays.eu/Blogging/Blog/Details/23)

_place it in `/opt/fsaysuinput` `/opt/fsayskeyboard`_

### TCPSClient

Download the package [here](http://techlife.sg/TCPSClient/index.html)

put it to `/usr/bin` and make `chmod u+x TCPSClient.bin`
Read the copyrights on their websites and make a donation!

### Snapshot

For using the snapshot function

```bash
git clone https://github.com/info-beamer/tools.git
cd tools/screenshot/
make
```

then move the screenshot folder to `/opt/`

### Install Pi-Wall

```bash
wget http://dl.piwall.co.uk/pwlibs1_1.1_armhf.deb \
&& dpkg -i pwlibs1_1.1_armhf.deb \
&& wget http://dl.piwall.co.uk/pwomxplayer_20130815_armhf.deb \
&& dpkg -i pwomxplayer_20130815_armhf.deb
```

### install eXtplorer

Check here to get latest [releases](https://extplorer.net/projects/extplorer/files)

1. download and extract to `/var/www/eXtplorer`
2. configure with: `sudo nano /var/www/eXtplorer/include/init.php`
3. change the root directory to `/media/;`
