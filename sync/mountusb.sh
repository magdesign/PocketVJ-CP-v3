#! /bin/sh
### BEGIN INIT INFO
# Provides:          mountusb
# Required-Start:    $remote_fs $syslog
# Required-Stop:     $remote_fs $syslog
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# Short-Description: Check at boot to mount usb stick
# Description:       Copy this file to /etc/init.d/mountusb and run this command: sudo update-rc.d mountusb defaults
# From now on, the system mounts usb sticks if provided at boot
### END INIT INFO

# Author: magdesign.ch

sudo mount -t auto /dev/sda1 /media/usb
sudo mount -t auto /dev/sda2 /media/usb