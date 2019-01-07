## Update PVJ 3.7 or older to use PureData

Make sure your PocketVJ is connected to the internet, use ssh or the "Access the Heart" function in Control Panel.

Go to the home folder:
`cd /home/pi/`

Download the compiled PureData package:
`wget https://puredata.info/downloads/pd-extended-0-43-3-on-raspberry-pi-raspbian-wheezy-armhf/releases/1.0/Pd-0.43.3-extended-20121004.deb`

Install the package:
`sudo dpkg -i Pd-0.43.3-extended-20121004.deb`

You might get dependency problems
Wait until you see something like:

`Processing triggers for systemd (215-17+deb8u7) ...
Errors were encountered while processing:
 pd-extended`


then type:

`sudo apt-get -f install -y`

to make sure Purdata is now installing correct, once again:
 
 `sudo dpkg -i Pd-0.43.3-extended-20121004.deb`

No set root priorities for PureData:
 
`sudo chmod 4755 /usr/bin/pd-extended`


finally remove the .deb package with:

`sudo rm /home/pi/Pd-0.43.3-extended-20121004.deb`
