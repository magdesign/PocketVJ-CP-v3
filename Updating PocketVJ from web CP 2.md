Updating PocketVJ from web CP 2.3.7 - 2.4.0 adding OSC control.

![Screen Shot 2018-08-16 at 9.29.42 AM](https://ws3.sinaimg.cn/large/006tNbRwly1fueo4ma5hsj31gg19udoq.jpg)

Check CP in upper right hand corner of web CP.

Next we will login and control the PocketVJ (PVJ) using SSH

On a Mac open up **Terminal**

Type `ssh pi@192.168.1.xxx`   (Your IP address will may be different, use AngryIP Scanner or Login to your network Router to discover the PocketVJ IP Address)

	You will be prompted for a password; enter `pocketusr`

![Screen Shot 2018-08-16 at 9.35.53 AM](https://ws1.sinaimg.cn/large/006tNbRwly1fueo4kprhrj311w0qkwhi.jpg)

Now we will install node js. This is for Raspberry Pi 3, I used `name -a` to reveal a armv7l core.

	wget to download.

`wget https://nodejs.org/dist/v8.11.3/node-v8.11.3-linux-armv7l.tar.xz `

	tar to extract the folder

`tar -xf node-v8.11.3-linux-armv7l.tar.xz `

	cd to open the folder

`cd node-v8.11.3-linux-armv7l/ `

	cp to copy the files to the /usr/local/   directory

`sudo cp -R * /usr/local/ `

	use node -v to check the installed version

`node -v `

	use npm -v to check the npm version

`npm -v `



if this installs correctly, then we can proceed.

Next we will install 4 packages necessary to run OSC

`sudo npm install socket.io `

`sudo npm install  node-omxplayer`

`sudo npm install osc-receiver`

`sudo npm install ip`



Now we will load the latest CP .zip file onto the internal section of the pocketVJ. You can use the web CP FTP or another FTP Client.

![Screen Shot 2018-08-16 at 10.32.57 AM](https://ws2.sinaimg.cn/large/006tNbRwly1fueo4nyy2rj31ki18ktnu.jpg)

When the PocketVJ-CP-v3-master.zip file is in the internal directory.  Got to the web CP in your browser. Goto the "Wrench Icon" on the far right tab and click "UPDATE Everything"  & WAIT...  Don't touch anything else until the PVJ has completely updated.

![Screen Shot 2018-08-16 at 10.34.44 AM](https://ws1.sinaimg.cn/large/006tNbRwly1fueo4ptgr0j31g41o8157.jpg)It should look something like this when it is done:

![Screen Shot 2018-08-16 at 10.40.41 AM](https://ws1.sinaimg.cn/large/006tNbRwly1fueo4rp0upj31g41o8k6b.jpg)

Pay attention to the CP version in the right hand corner.  Then refresh the page and it should show the latest version.

![Screen Shot 2018-08-16 at 10.40.57 AM](https://ws2.sinaimg.cn/large/006tNbRwly1fueo4ts2kvj31g41o8n8t.jpg)

Now to properly setup the Osc_control.js file, it will need to be in the right directory.

Right now it is in: `cd ~/www/sync/ `

and we want to move it to: `/home/pi/osc/`

So lets make a directory called osc and move the file into it:

```
mkdir -p /home/pi/osc/ && sudo mv /var/www/sync/osc_control.js /home/pi/osc/
```

Then you can start it manually and see if your OSC commands are making it through.

![Screen Shot 2018-08-19 at 2.36.01 PM](https://ws2.sinaimg.cn/large/006tNbRwly1fufleprnpyj311w0qkjv8.jpg) 

If should say something similar if it is running correctly.

```
pi@pocketvj-100:~ $ node /home/pi/osc/osc_control.js
Running OSC
Config TouchOSC Host to 192.168.1.101 and Port(outgoing) to 9876
```







**<u>Troubleshooting:</u>**

-----

If your RPi is connected via ethernet or wifi to a router with internet access, but is unable to download using wget, then you may have set a manual IP address.  

check using: `hostname -I`

If it says something like:

```
pi@pocketvj-100:~# hostname -I
192.168.2.100 192.168.1.105
```

then type in `sudo nano /etc/network/interfaces`

and change `static`

```
auto lo
auto eth0
iface lo inet loopback
iface eth0 inet static
address 192.168.2.100
netmask 255.255.255.0
gateway 192.168.2.1

auto wlan0
iface wlan0 inet static
address 2.0.0.100
netmask 255.255.255.0

up iptables-restore < /etc/iptables.ipv4.nat
```

to `dhcp`

```
auto lo
auto eth0
iface lo inet loopback
iface eth0 inet dhcp
address 192.168.2.100
netmask 255.255.255.0
gateway 192.168.2.1

auto wlan0
iface wlan0 inet dhcp
address 2.0.0.100
netmask 255.255.255.0

up iptables-restore < /etc/iptables.ipv4.nat
```

hit Control+O to WriteOut, hit Enter to confirm and save.

Then hit Control+X to exit, type `reboot` and try again.

-----



Don't know your ip address try: `ssh pi@pocketvj-100.local`



-----



written by Cornelius Henke III a.k.a. ProjectileObjects