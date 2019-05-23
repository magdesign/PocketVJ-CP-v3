<?php

//# Shortcuts

if ($_GET['action'] == 'pause') {
	$outputtext =  "pause video";
	system ("/var/www/sync/dbuscontrol.sh pause > /dev/null 2>&1");
	system("sudo /var/www/sync/mapperpause");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'fastforward') {
	$outputtext =  "seek video forward";
	system ("sudo /var/www/sync/dbuscontrol.sh seek 10000000");
}

if ($_GET['action'] == 'stop') {
	$outputtext =  "all players stopped";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	#system("sudo /var/www/sync/omxkill");
	#system("sudo /var/www/sync/testscreenoff.py &");
	#system("sudo killall -9 /home/pi/of_v0.8.4/addons/ofxPiMapper/example/./bin/example");
	#system("sudo killall -9 /usr/bin/TCPSClient.bin");
	#system("sudo /var/www/sync/rplay stop");
	#system("sudo killall -9 tty-clock");
	#system("sudo killall -9 mpg321");
	#system("sudo killall -9 feh");
	#system("sudo kill $(pidof X");
	#system("sudo /var/www/sync/clearscreen.sh");
}

if ($_GET['action'] == 'stopvideo') {
	$outputtext =  "stop video player only";
	system ("sudo /var/www/sync/stopvideo > /dev/null 2>&1");
}
//# Video Control Section
if ($_GET['action'] == 'getcontent') {
	system ("sudo /var/www/sync/getcontent");
	system ("sudo chmod 777 /media/internal/video/*");
	$outputtext =  "content from your defined websource downloaded";
}

//# Video Control Section

if ($_GET['action'] == 'startseamless') {
	$outputtext =  "start seamless video loop player";
	system ("sudo /var/www/sync/startseamless");
}

if ($_GET['action'] == 'startmasterwifi') {
	$outputtext =  "start master over wifi sync, be patient";
	system ("sudo /var/www/sync/startmasterwifi");
}

if ($_GET['action'] == 'startslavewifi') {
	$outputtext =  "start slave over wifi sync, be patient";
	system ("sudo /var/www/sync/startslavewifi");
}

if ($_GET['action'] == 'setseamlessscript') {
	$outputtext =  "set to seamless sync-script";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system ("sudo cp /var/www/sync/omxplayer-sync /usr/bin/omxplayer-sync");
}

if ($_GET['action'] == 'setgapscript') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	$outputtext =  "set to gap playlist sync-script";
	system ("sudo cp /var/www/sync/omxplayer-sync-old /usr/bin/omxplayer-sync");
}

if ($_GET['action'] == 'setwifiscript') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	$outputtext =  "increase sync window tolerance for wifi sync";
	system ("sudo cp /var/www/sync/omxplayer-sync-wifi /usr/bin/omxplayer-sync");
}

if (array_key_exists($_GET['action'],$actions)) {
	$a = $_GET['action'];
	$c = @$_GET['code'];
	if (array_key_exists('system',$actions[$a])) {
		if (!is_array($actions[$a]['system'])) $actions[$a]['system'] = Array($actions[$a]['system']);
		foreach ($actions[$a]['system'] as $system) {
			$command = str_replace('{{CODE}}',$c,$command);
			system($command);
		}
	}
	if (array_key_exists('exec',$actions[$a])) {
		if (!is_array($actions[$a]['exec'])) $actions[$a]['exec'] = Array($actions[$a]['exec']);
		foreach ($actions[$a]['exec'] as $system) {
			$command = str_replace('{{CODE}}',$c,$command);
			exec($command);
		}
	}
	print str_replace('{{CODE}}',$c,($actions[$a]['output']));
	exit;
}

/* startmasters (once & loops)  [start] */
if ($_GET['action'] == 'startmaster') {
	exec("sudo /var/www/sync/startmasterALL");
	$outputtext = "start player as master";
}

if ($_GET['action'] == 'startmasteronce') {
	exec("sudo /var/www/sync/startmasteroneALL");
	$outputtext = "start player as master once";
}

if (preg_match('/^startmaster[0-9{2}$/',$_GET['action'])) {
	$code = substr($_GET['action'],-2);
	exec("sudo /var/www/sync/startmasterCODE {$code}");
	$outputtext = "start video {$code} once";
	exit;
}

if (preg_match('/^startmasteronce[0-9{2}$/',$_GET['action'])) {
	$code = substr($_GET['action'],-2);
	exec("sudo /var/www/sync/startmasteroneCODE {$code}");
	$outputtext = "start video {$code} once";
	exit;
}
/* startmasters (once & loops)  [stop] */


if ($_GET['action'] == 'startslave') {
	exec("sudo /var/www/sync/startslave");
	$outputtext =  "start player as slave";
}

if ($_GET['action'] == 'startmasterusb') {
	exec("sudo /var/www/sync/startmasterusb");
	$outputtext =  "start player in usb mode";
}

if ($_GET['action'] == 'starthplayer') {
	exec("sudo /var/www/sync/starthplayer");
	$outputtext =  "start hplayer with OSC control";
}

if ($_GET['action'] == 'pause') {
	exec("sudo /var/www/sync/pause.py");
	$outputtext = "Pause, click again to resume";
}

if ($_GET['action'] == 'screenshot') {
	exec("sudo /var/www/sync/screenshot");
	$outputtext = "Printscreen saved in /media/internal/images";
}

//# Imageplayer

if ($_GET['action'] == 'stopimage') {
	$outputtext =  "image player stopped";
	system("sudo killall fbi");
	#hier muss noch kill feh und x rein?
}

if ($_GET['action'] == 'image') {
	$outputtext =  "start image player";
	system("sudo /var/www/sync/startimage > /dev/null &");
}

if ($_GET['action'] == 'imageusb') {
	$outputtext =  "start image player from usb";
	system("sudo /var/www/sync/startimageusb");
}

if ($_GET['action'] == 'startimagemanual') {
	$outputtext =  "start image player manual";
	system("sudo /var/www/sync/startimagemanual");
}

if ($_GET['action'] == 'overlay') {
	$outputtext =  "start .png overlay";
	system("sudo /var/www/sync/overlay");
}

if ($_GET['action'] == 'stopoverlay') {
	$outputtext =  "stop .png overlay";
	system("sudo /var/www/sync/overlaystop");
	//system("sudo killall -9 /home/pi/raspidmx/pngview/./pngview");
}

//# Softedge

if ($_GET['action'] == 'softedge100h') {
	$outputtext =  "start softedge 100pixel horizontal";
	system("sudo /var/www/sync/softedge100h");
}

if ($_GET['action'] == 'softedge200h') {
	$outputtext =  "start softedge 200pixel horizontal";
	system("sudo /var/www/sync/softedge200h");
}

if ($_GET['action'] == 'softedge100v') {
	$outputtext =  "start softedge 100pixel horizontal";
	system("sudo /var/www/sync/softedge100v");
}

if ($_GET['action'] == 'softedge200v') {
	$outputtext =  "start softedge 200pixel horizontal";
	system("sudo /var/www/sync/softedge200v");
}

//# Slideshow Time

if ($_GET['action'] == 'slidetime5') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=5/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=5/' /var/www/sync/xsessionslidesusb");
	system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 5s";
}

if ($_GET['action'] == 'slidetime10') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=10/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=10/' /var/www/sync/xsessionslidesusb");
	system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 10s";
}

if ($_GET['action'] == 'slidetime15') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=15/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=15/' /var/www/sync/xsessionslidesusb");
	system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 15s";
}

if ($_GET['action'] == 'slidetime0') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=0.1/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=0.1/' /var/www/sync/xsessionslidesusb");
	system("sudo /var/www/sync/startimage > /dev/null &");
	$outputtext =  "set slideshowtime to 15s";
}

//# PDF player

if ($_GET['action'] == 'startpdf') {
	$outputtext =  "start pdf player";
	system("sudo /var/www/sync/startpdf > /dev/null &");
}

if ($_GET['action'] == 'startpdfusb') {
	$outputtext =  "start pdf player";
	system("sudo /var/www/sync/startpdfusb > /dev/null &");
}

//# Testscreen

if ($_GET['action'] == 'testscreen') {
	system("sudo /var/www/sync/testscreen &");
        $outputtext =  "testscreen activated";
}

if ($_GET['action'] == 'testscreenoff') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
        system("sudo /var/www/sync/testscreenoff &");
	$outputtext =  "testscreen deactivated";
}

//# Audioplayer

if ($_GET['action'] == 'startaudio') {
	exec("sudo /var/www/sync/startaudio");
	$outputtext = "start audio player";
}

if ($_GET['action'] == 'startaudioslave') {
	exec("sudo /var/www/sync/startaudioslave");
	$outputtext = "start audio slave player";
}

if ($_GET['action'] == 'startaudiousb') {
	$outputtext =  "start audio player in usb mode";
	exec("sudo /var/www/startaudiousb");
}

if ($_GET['action'] == 'stopaudio') {
	$outputtext =  "stop audio player only";
	system("sudo killall -9 mpg321");
}

//# Testtone

if ($_GET['action'] == 'testtone') {
	exec("sudo /var/www/sync/omxkill");
	exec("sudo omxplayer-sync -mu /var/www/sync/testtone.mp3 > /dev/null 2>&1 & echo $!");
	$outputtext = "sinus 440 testtone";
}

if ($_GET['action'] == 'testtoneright') {
	exec("sudo /var/www/sync/omxkill");
	exec("sudo omxplayer-sync -mu /var/www/sync/testtone_right.mp3 > /dev/null 2>&1 & echo $!");
	$outputtext = "sinus testtone right";
}

if ($_GET['action'] == 'testtoneleft') {
	exec("sudo /var/www/sync/omxkill");
	exec("sudo omxplayer-sync -mu /var/www/sync/testtone_left.mp3 > /dev/null 2>&1 & echo $!");
	$outputtext = "sinus testtone left";
}

//# DMX OLA stuff

if ($_GET['action'] == 'startola') {
	exec("sudo /etc/init.d/olad start");
	$outputtext = "OLA Daemon started, ready on port :9090";
}

if ($_GET['action'] == 'startqlcplus') {
	$outputtext =  "start QLC+";
	system("sudo /var/www/sync/startqlcplus");
}

//# Puredata stuff

if ($_GET['action'] == 'startpd') {
	$outputtext =  "start puredata";
	system("sudo /var/www/sync/startpd");
}

//# USB Stick mount

if ($_GET['action'] == 'reboot') {
	$outputtext =  "rebooting now!";
	system("sudo reboot");
}

if ($_GET['action'] == 'shutdown') {
	$outputtext =  "shutting down";
	system("sudo poweroff");
}

if ($_GET['action'] == 'eject') {
	$outputtext =  "usb stick unmounted";
	system("sudo umount /dev/sda1");
}

if ($_GET['action'] == 'mount') {
	$outputtext =  "usb stick mounted";
	system("sudo mount /dev/sda1 /media/usb/");
}

//# Autostart behaviour

if ($_GET['action'] == 'master') {
	$outputtext = "master set";
	system("sudo cp /var/www/sync/rc.local.master /etc/rc.local");
}

if ($_GET['action'] == 'autostartloop01') {
	$outputtext = "master01 loop set";
	system("sudo cp /var/www/sync/rc.local.master01 /etc/rc.local");
}

if ($_GET['action'] == 'autostartloop02') {
	$outputtext = "master02 loop set";
	system("sudo cp /var/www/sync/rc.local.master02 /etc/rc.local");
}


if ($_GET['action'] == 'slave') {
	$outputtext =  "slave set";
	system("sudo cp /var/www/sync/rc.local.slave /etc/rc.local");
}

if ($_GET['action'] == 'seamless') {
	$outputtext =  "set to seamless player";
	system("sudo cp /var/www/sync/rc.local.seamless /etc/rc.local");
}

if ($_GET['action'] == 'streamermaster') {
	$outputtext = "master with audioserver";
	system("sudo cp /var/www/sync/rc.local.streamermaster /etc/rc.local");
}

if ($_GET['action'] == 'streamerslave') {
	$outputtext =  "slave with audioserver";
	system("sudo cp /var/www/sync/rc.local.streamerslave /etc/rc.local");
}

if ($_GET['action'] == 'streamerseamless') {
	$outputtext =  "seamless with audioserver";
	system("sudo cp /var/www/sync/rc.local.streamerseamless /etc/rc.local");
}

if ($_GET['action'] == 'streameraudio') {
	$outputtext =  "audio with audioserver";
	system("sudo cp /var/www/sync/rc.local.streameraudio /etc/rc.local");
}

if ($_GET['action'] == 'extension1') {
	$outputtext =  "extension1 set to image presenter";
	system("sudo cp /var/www/sync/xsessionimage /home/pi/.xsession");
	system("sudo cp /var/www/sync/rc.local.ext1 /etc/rc.local");
}

if ($_GET['action'] == 'usb') {
	$outputtext =  "usb mode set";
	system("sudo cp /var/www/sync/rc.local.usb /etc/rc.local");
}

if ($_GET['action'] == 'setimage') {
	$outputtext =  "set to image player";
	system("sudo cp /var/www/sync/rc.local.image /etc/rc.local");
}

if ($_GET['action'] == 'setimageusb') {
	$outputtext =  "image player usb mode set";
	system("sudo cp /var/www/sync/rc.local.imageusb /etc/rc.local");
}

if ($_GET['action'] == 'setaudio') {
	$outputtext =  "autostart audio set";
	system("sudo cp /var/www/sync/rc.local.audio /etc/rc.local");
}

if ($_GET['action'] == 'setaudiousb') {
	$outputtext =  "autostart audio usb set";
	system("sudo cp /var/www/sync/rc.local.audiousb /etc/rc.local");
}

if ($_GET['action'] == 'screenshare') {
	$outputtext =  "set to screenshare mode";
	system("sudo cp /var/www/sync/vncstartup /home/pi/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.screenshare /etc/rc.local");
}

if ($_GET['action'] == 'setmapper') {
	$outputtext =  "set to mapping mode";
	system("sudo cp /var/www/sync/rc.local.mapper /etc/rc.local");
}

if ($_GET['action'] == 'setmapperremote') {
	$outputtext =  "set to mappingremote mode";
	system("sudo cp /var/www/sync/rc.local.mapperremote /etc/rc.local");
}

if ($_GET['action'] == 'setmappercam') {
	$outputtext =  "set to mapping with cam";
	system("sudo cp /var/www/sync/rc.local.mappercam /etc/rc.local");
}

if ($_GET['action'] == 'setqlc') {
	$outputtext =  "set to QLC+ DMX console";
	system("sudo cp /var/www/sync/xsessionqlcplus /home/pi/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.qlcplus /etc/rc.local");
}

if ($_GET['action'] == 'setpd') {
	$outputtext =  "set to puredata";
	system("sudo cp /var/www/sync/xsessionpd /home/pi/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.pd /etc/rc.local");
}

if ($_GET['action'] == 'powerpoint') {
	$outputtext =  "set to presentationmode";
	system("sudo cp /var/www/sync/xsessionppt /home/pi/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.impress /etc/rc.local");
}

if ($_GET['action'] == 'setimagemanual') {
	$outputtext =  "set to manual imageplayer";
	system("sudo cp /var/www/sync/xsessionimage /home/pi/.config/lxsession/LXDE/autostart");
	system("sudo cp /var/www/sync/rc.local.screenshare /etc/rc.local");
}

if ($_GET['action'] == 'setpdf') {
	$outputtext =  "set to pdf";
	system("sudo cp /var/www/sync/rc.local.pdf /etc/rc.local");
}

if ($_GET['action'] == 'setsyphon') {
	$outputtext =  "set to TCPSClient";
	system("sudo cp /var/www/sync/rc.local.syphon /etc/rc.local");
}

if ($_GET['action'] == 'sethplayer') {
	$outputtext =  "set to hPlayer OSC";
	system("sudo cp /var/www/sync/rc.local.hplayer /etc/rc.local");
}

if ($_GET['action'] == 'setairplay') {
	$outputtext =  "set to Airplay Mirror";
	system("sudo cp /var/www/sync/rc.local.airplay /etc/rc.local");
	system("sudo rm /home/pi/.xsession");
}

if ($_GET['action'] == 'setpicast') {
	$outputtext =  "set to RaspberryCast Mirror";
	system("sudo cp /var/www/sync/rc.local.picast /etc/rc.local");
}

if ($_GET['action'] == 'autostartclock') {
	$outputtext =  "set to autostart with clock display";
	system("sudo cp /var/www/sync/rc.local.clock /etc/rc.local");
}

if ($_GET['action'] == 'custom1') {
	$outputtext = "set autostart custom1";
	system("sudo cp /var/www/sync/rc.local.custom /etc/rc.local");
}

if ($_GET['action'] == 'custom2') {
	$outputtext = "set autostart custom2";
	system("sudo cp /var/www/sync/rc.local.custom2 /etc/rc.local");
}

if ($_GET['action'] == 'custom') {
	$outputtext = "set autostart custom1";
	system("sudo cp /var/www/sync/rc.local.custom /etc/rc.local");
}

if ($_GET['action'] == 'setprocessing') {
	$outputtext = "autostart processing";
	system("sudo cp /var/www/sync/rc.local.processing /etc/rc.local");
}

if ($_GET['action'] == 'setsuperpikixpi') {
	$outputtext = "autostart setsuperpikixpi http://pikilipita.com/ (Donate!)";
	system("sudo cp /var/www/sync/rc.local.superpikixpi /etc/rc.local");
}

if ($_GET['action'] == 'setosc') {
	$outputtext = "autostart to OSC receiver";
	system("sudo cp /var/www/sync/rc.local.osc /etc/rc.local");
}



//# AirPlay support
//restart airplay daemon:

if ($_GET['action'] == 'airplayrestart') {
	$outputtext =  "restart airplay service";
	system("sudo /var/www/sync/rplay stop");
	system("sudo /var/www/sync/rplay start");
}

//# RaspberryCast support

//restart raspberrycast daemon:

if ($_GET['action'] == 'picastrestart') {
	$outputtext =  "restart raspberry cast service";
	system("/home/pi/RaspberryCast/./RaspberryCast.sh stop");
	system("/home/pi/RaspberryCast/./RaspberryCast.sh start");
}

//# Display IP

if ($_GET['action'] == 'ipwifi') {
    $output = shell_exec("sudo /sbin/ifconfig -a wlan0 | awk '/(cast)/ { print $2 }' | cut -d':' -f2 | head -1");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

if ($_GET['action'] == 'iplan') {
    $output = shell_exec("sudo /sbin/ifconfig -a eth0 | awk '/(cast)/ { print $2 }' | cut -d':' -f2 | head -1");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}


//# Set Boot.conf resolution

if ($_GET['action'] == 'bootconf') {
	$outputtext =  "custom boot conf to boot";
	system("sudo cp /media/internal/config.txt /boot/config.txt");
}

if ($_GET['action'] == 'bootconfusb') {
	$outputtext =  "custom boot conf from usb to boot";
	system("sudo cp /media/usb/config.txt /boot/config.txt");
}

if ($_GET['action'] == 'hdmireset') {
	$outputtext =  "reset resolution settings";
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
}

if ($_GET['action'] == 'hdmi1') {
	$outputtext =  "forced to use 1024x768";
	system("sudo cp /var/www/sync/forcehdmi1 /boot/config.txt");
}

if ($_GET['action'] == 'hdmi4') {
	$outputtext =  "forced to use hdmi 1280x720";
	system("sudo cp /var/www/sync/forcehdmi4 /boot/config.txt");
}

if ($_GET['action'] == 'hdmi5') {
	$outputtext =  "forced to 1920x1080";
	system("sudo cp /var/www/sync/forcehdmi5 /boot/config.txt");
}

if ($_GET['action'] == 'hdmi6') {
	$outputtext =  "forced to 1280x800";
	system("sudo cp /var/www/sync/forcehdmi6 /boot/config.txt");
}

if ($_GET['action'] == 'forcevga') {
	$outputtext =  "force 800x600";
	system("sudo cp /var/www/sync/forcevga /boot/config.txt");
}


if ($_GET['action'] == 'force1200') {
	$outputtext =  "force 1680 x 1050 rgb";
	system("sudo cp /var/www/sync/force1200 /boot/config.txt");
}

if ($_GET['action'] == 'analog1') {
	$outputtext =  "force RCA PAL output";
	system("sudo cp /var/www/sync/analog1 /boot/config.txt");
}

if ($_GET['action'] == 'analog2') {
	$outputtext =  "force RCA NTSC output";
	system("sudo cp /var/www/sync/analog2 /boot/config.txt");
}


if ($_GET['action'] == 'clean') {
	$outputtext =  "clean hidden files";
	system("sudo rm -R /media/internal/.[DTf_]*");
	system("sudo rm -R /media/internal/__MACOSX");
	system("sudo rm -R /media/internal/video/.[DTf_]*");
	system("sudo rm -R /media/internal/video/__MACOSX");
	system("sudo rm -R /media/internal/images/.[DTf_]*");
	system("sudo rm -R /media/internal/images/__MACOSX");
	system("sudo rm -R /media/internal/audio/.[DTf_]*");
	system("sudo rm -R /media/internal/audio/__MACOSX");
//# also files on usb sticks
	system("sudo rm -R /media/usb/.[DTf_]*");
	system("sudo rm -R /media/usb/__MACOSX");
}


if ($_GET['action'] == 'screenon') {
	$outputtext = shell_exec('sudo /opt/vc/bin/tvservice -p');
}

if ($_GET['action'] == 'screenoff') {
	$outputtext = shell_exec('sudo /opt/vc/bin/tvservice -o');
}

//# Set Boot.conf resolution rotate screen

if ($_GET['action'] == 'rotate0') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0/' /boot/config.txt");
	$outputtext =  "Display Rotation = Normal";
}

if ($_GET['action'] == 'rotate1') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=1/' /boot/config.txt");
	$outputtext =  "Display Rotation = 90°";
}

if ($_GET['action'] == 'rotate2') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=2/' /boot/config.txt");
	$outputtext =  "Display Rotation = 180°";
}

if ($_GET['action'] == 'rotate3') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=3/' /boot/config.txt");
	$outputtext =  "Display Rotation = 270°";
}

if ($_GET['action'] == 'flip1') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0x10000/' /boot/config.txt");
	$outputtext =  "Display Flip Horizontally";
}

if ($_GET['action'] == 'flip2') {
	system("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0x20000/' /boot/config.txt");
	$outputtext =  "Display Flip Vertically";
}


//# Display Info

if ($_GET['action'] == 'getresolution') {
	$output = shell_exec('sudo tvservice -s');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 50, "<br />\n");
}

if ($_GET['action'] == 'parser') {
    $output = shell_exec('sudo tvservice -d edid.dat');
    $output = shell_exec('sudo edidparser edid.dat');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 50, "<br />\n");
}

if ($_GET['action'] == 'codecinfo') {
	$output = shell_exec('mediainfo --Inform="General;%CompleteName%  Format: %Format% Codec: %CodecID%  Bitrate: %OverallBitRate%  " /media/internal/video/*');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 50, "<br />\n");
}

if ($_GET['action'] == 'movieinfo') {
	$output = shell_exec('mediainfo --Inform="Video;Videosize: %Width%x%Height% pixel  " /media/internal/video/*');
	$preoutputtext2 = "<pre>$output</pre>";
	$newtext = wordwrap($preoutputtext2, 32, "<br />\n");
	$outputtext = "$newtext\n";
}

if ($_GET['action'] == 'diskspace') {
    $output = shell_exec('df -h /media');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 124, "<br />\n");
}


//# Update & Firmmare Stuff

if ($_GET['action'] == 'firmwareupdate') {
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo apt-get remove omxplayer");
	system("rm -rf /usr/bin/omxplayer /usr/bin/omxplayer.bin /usr/lib/omxplayer");
	system("rm -f /usr/bin/omxplayer-sync");
	system ("rm -f /usr/bin/dbuscontrol.sh");
	system("sudo apt-get clean");
    system("sudo cp /var/www/sync/python3-dbus_1.2.0-2+b1_armhf.deb /var/cache/apt/archives/python3-dbus_1.2.0-2+b1_armhf.deb");
    system("sudo dpkg -i *.deb /var/cache/apt/archives/python3-dbus_1.2.0-2+b1_armhf.deb");
    system("sudo cp /var/www/sync/libssh-4_armhf.deb /var/cache/apt/archives/libssh-4_0.6.3-4+deb8u2_armhf.deb");
   	system("sudo dpkg -i *.deb /var/cache/apt/archives/libssh-4_0.6.3-4+deb8u2_armhf.deb");
	//new omxplayer version:
	system("sudo cp /var/www/sync/omxplayer_0.3.7-git20170130-62fb580_armhf.deb /var/cache/apt/archives/omxplayer_0.3.7-git20170130-62fb580_armhf.deb");
  	system("sudo dpkg -i *.deb /var/cache/apt/archives/omxplayer_0.3.7-git20170130-62fb580_armhf.deb");
  	//old omxplayer version:
	//system("sudo cp /var/www/sync/omxplayer_0.3.7-git20160923-dfea8c9_armhf.deb /var/cache/apt/archives/omxplayer_0.3.7-git20160923-dfea8c9_armhf.deb");
  	//system("sudo dpkg -i *.deb /var/cache/apt/archives/omxplayer_0.3.7-git20160923-dfea8c9_armhf.deb");
  	//cleanup:
	system("sudo apt-get clean");
    //system("sudo cp /var/www/sync/omxplayer /usr/bin/omxplayer");
	//system("sudo cp /var/www/sync/omxplayer.bin /usr/bin/omxplayer.bin");
	system("sudo cp /var/www/sync/omxplayer-sync /usr/bin/omxplayer-sync");
	system("sudo chmod a+x /usr/bin/omxplayer");
	system("sudo chmod a+x /usr/bin/omxplayer.bin");
	system("sudo chmod a+x /usr/bin/omxplayer-sync");
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
	system("sudo cp /var/www/sync/timer.txt /media/internal/timer.txt");
	$outputtext =  "Player & Sync to PVJ v3.x";
}

if ($_GET['action'] == 'controlpanel') {
	$outputtext =  "update ControlPanel USB";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp -r /media/usb/PocketVJ-CP-v3-master.zip /media/internal/PocketVJ-CP-v3-master.zip");
	system("sudo unzip /media/internal/PocketVJ-CP-v3-master.zip -d /media/internal/");
	system("sudo cp -r /media/internal/PocketVJ-CP-v3-master/* /var/www");
	system("sudo chmod 755 -R /var/www");
	system("sudo rm -r /media/internal/PocketVJ-CP-v3-master.zip");
	system("sudo rm -r /media/internal/PocketVJ-CP-v3-master");
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
	system("sudo cp /var/www/sync/timer.txt /media/internal/timer.txt");
	$outputtext =  "ControlPanel Updated";
}

if ($_GET['action'] == 'controlpanelintern') {
	$outputtext =  "update ControlPanel internal, .zip must be provided";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo unzip /media/internal/PocketVJ-CP-v3-master.zip -d /media/internal/");
	system("sudo cp -r /media/internal/PocketVJ-CP-v3-master/* /var/www/");
	system("sudo chmod 755 -R /var/www/");
	system("sudo rm -r /media/internal/PocketVJ-CP-v3-master.zip");
	system("sudo rm -r /media/internal/PocketVJ-CP-v3-master");
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
	system("sudo cp /var/www/sync/timer.txt /media/internal/timer.txt");
	$outputtext =  "ControlPanel Update";

}

if ($_GET['action'] == 'controlpanelweb') {
	$outputtext =  "update ControlPanel via internet";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo wget https://github.com/magdesign/PocketVJ-CP-v3/archive/master.zip -O /media/internal/PocketVJ-CP-v3-master.zip");
	system("sudo unzip /media/internal/PocketVJ-CP-v3-master.zip -d /media/internal/");
	system("sudo cp -r /media/internal/PocketVJ-CP-v3-master/* /var/www/");
	system("sudo chmod 755 -R /var/www/");
	system("sudo rm -r /media/internal/PocketVJ-CP-v3-master.zip");
	system("sudo rm -r /media/internal/PocketVJ-CP-v3-master");
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
	system("sudo cp /var/www/sync/timer.txt /media/internal/timer.txt");
	$outputtext =  "ControlPanel Update";

}

if ($_GET['action'] == 'mapperupdate') {
	$outputtext =  "update mapper";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper");
	system("sudo unzip /var/www/sync/mapperNoAudio.zip -d /");
	//system ("rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	//system ("rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
		//Add Mapper Remote
  system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server");
	system("sudo unzip /var/www/sync/example_remote-server.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/images");
}

if ($_GET['action'] == 'mapperaudioupdate') {
	$outputtext =  "update mapper";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper");
	system("sudo unzip /var/www/sync/mapperAudio.zip -d /");
	//following two lines are only used when .zipped different, as on this release
	system ("sudo rm -rf /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	system ("sudo rm -rf /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	//Add Mapper Remote
  system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server");
	system("sudo unzip /var/www/sync/example_remote-server.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/images");

}

if ($_GET['action'] == 'mapperupdateold') {
	$outputtext =  "update mapper performance";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper");
	system("sudo unzip /var/www/sync/mapperNoAudioold.zip -d /");
	//system ("rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	//system ("rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	//Add Mapper Remote
    system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server");
	system("sudo unzip /var/www/sync/example_remote-server.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/images");
}

if ($_GET['action'] == 'mapperaudioupdateold') {
	$outputtext =  "update mapper performance";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper");
	system("sudo unzip /var/www/sync/mapperAudioold.zip -d /");
	//following two lines are only used when .zipped different, as on this release
	system ("rm -rf /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	system ("rm -rf /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	//Add Mapper Remote
    system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server");
	system("sudo unzip /var/www/sync/example_remote-server.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/images");

}



if ($_GET['action'] == 'updateall') {
	//Update CP
	system("sudo unzip /media/internal/PocketVJ-CP-v3-master.zip -d /media/internal/");
	system("sudo cp -r /media/internal/PocketVJ-CP-v3-master/* /var/www/");
	system("sudo chmod 755 -R /var/www/");
	system("sudo rm -rf /media/internal/PocketVJ-CP-v3-master.zip");
	system("sudo rm -rf /media/internal/PocketVJ-CP-v3-master");
	//Update omxplayer and sync
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo apt-get remove omxplayer");
	system("rm -rf /usr/bin/omxplayer /usr/bin/omxplayer.bin /usr/lib/omxplayer");
	system("rm -f /usr/bin/omxplayer-sync");
	system("rm -f /usr/bin/dbuscontrol.sh");
	system("sudo apt-get clean");
   	system("sudo cp /var/www/sync/python3-dbus_1.2.0-2+b1_armhf.deb /var/cache/apt/archives/python3-dbus_1.2.0-2+b1_armhf.deb");
  	system("sudo dpkg -i *.deb /var/cache/apt/archives/python3-dbus_1.2.0-2+b1_armhf.deb");
	system("sudo cp /var/www/sync/libssh-4_armhf.deb /var/cache/apt/archives/libssh-4_0.6.3-4+deb8u2_armhf.deb");
   	system("sudo dpkg -i *.deb /var/cache/apt/archives/libssh-4_0.6.3-4+deb8u2_armhf.deb");
	//new omxplayer version:
	system("sudo cp /var/www/sync/omxplayer_0.3.7-git20170130-62fb580_armhf.deb /var/cache/apt/archives/omxplayer_0.3.7-git20170130-62fb580_armhf.deb");
  	system("sudo dpkg -i *.deb /var/cache/apt/archives/omxplayer_0.3.7-git20170130-62fb580_armhf.deb");
  	//old omxplayer version:
	//system("sudo cp /var/www/sync/omxplayer_0.3.7-git20160923-dfea8c9_armhf.deb /var/cache/apt/archives/omxplayer_0.3.7-git20160923-dfea8c9_armhf.deb");
	//system("sudo dpkg -i *.deb /var/cache/apt/archives/omxplayer_0.3.7-git20160923-dfea8c9_armhf.deb");
	//cleanup:
	system("sudo apt-get clean");
	system("sudo cp /var/www/sync/omxplayer-sync /usr/bin/omxplayer-sync");
	system("sudo chmod a+x /usr/bin/omxplayer");
	system("sudo chmod a+x /usr/bin/omxplayer.bin");
	system("sudo chmod a+x /usr/bin/omxplayer-sync");
	//Update Interfaceswifi
	system("sudo cp /var/www/sync/interfaceswifi /etc/network/interfaceswifi");
	//Update Boot config
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
	//Update timer.txt
	system("sudo cp /var/www/sync/timer.txt /media/internal/timer.txt");
	//Update Mapper
	system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper");
	system("sudo unzip /var/www/sync/mapperNoAudio.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/sources/images");
	//Add Mapper Remote
    system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server");
	system("sudo unzip /var/www/sync/example_remote-server.zip -d /");
	system ("sudo ln -s /media/internal/video /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/videos");
	system ("sudo ln -s /media/internal/images /home/pi/openFrameworks/addons/ofxPiMapper/example_remote-server/bin/data/sources/images");
    //Add Mapper Camera
    system("sudo rm -r /home/pi/openFrameworks/addons/ofxPiMapper/example_camera");
	system("sudo unzip /var/www/sync/example_camera.zip -d /");
	//TCPSyphon new tcpsyphon needs debian strech libs!!
	//reinstalls TCPSyphon
	system("sudo rm /usr/bin/TCPSClient.bin");
	system("sudo cp /var/www/sync/TCPSClient.bin /usr/bin/TCPSClient.bin");
	system("sudo chmod +x /usr/bin/TCPSClient.bin");
	//Set to PJlink
	system("sudo cp /var/www/sync/beamer_on_off_pjlink.sh /var/www/sync/beamer_on_off.sh");
	system("sudo chmod 755 /var/www/sync/beamer_on_off.sh");
	//Update mappingconverter
	system("sudo rm -rf /home/pi/openFrameworks/apps/myApps/mapping-converter2");
	system("sudo unzip /var/www/sync/mappingconverter.zip -d /home/pi/openFrameworks/apps/myApps/");
	//Update SuperPikixPi
	//not implemented yet, create a zip and unpack
	//
	//Update OSC control in home folder
	system("sudo cp /var/www/sync/osc_control.js /home/pi/osc/osc_control.js");
	//remove old chunk form CP 1.14
	system("sudo rm /var/www/sitemap.xml");
	//remove .xsession file
	system("sudo rm -rf /home/pi/.xsession");
	//Text Output
	$outputtext =  "Update Controlpanel, Mapper, OMXPLAYER, Timer, Boot";
}

if ($_GET['action'] == 'factoryreset') {
	$outputtext =  "factory reset system";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	system("sudo cp /var/www/sync/omxplayer-sync /usr/bin/omxplayer-sync");
    system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
  	system("sudo cp /var/www/sync/rc.local.master /etc/rc.local");
  	system("sudo cp /var/www/sync/dbuscontrol.sh /usr/bin/dbuscontrol.sh");
 	system("sudo cp /var/www/sync/timer.txt /media/internal/timer.txt");
  	system("sudo /var/www/sync/./namefixer > /dev/null 2>&1");
 	system("sudo chmod +rx /usr/bin/dbuscontrol.sh");
	system("sudo chmod 755 -R /var/www");
	system("sudo chmod 777 -R /media");
	//Update OSC control in home folder
	system("sudo cp /var/www/sync/osc_control.js /home/pi/osc/osc_control.js");
	//remove .xsession file
	system("sudo rm -rf /home/pi/.xsession");
	//remove lost&found files
	system ("rm -rf /media/lost+found/");
	//system("sudo rm -rf /tmp/*");
	//system("sudo rm -rf /var/log/*");
	//system("sudo rm -rf /var/tmp/*");
	//system("sudo apt-get clean");
}

//# Set Wifi Channel

if ($_GET['action'] == 'setwifi1') {
	$outputtext =  "wifi channel 1";
	system("sudo sed -ri 's/^channel=.+$/channel=1/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi3') {
	$outputtext =  "wifi channel 3";
	system("sudo sed -ri 's/^channel=.+$/channel=3/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi6') {
	$outputtext =  "wifi channel 6";
	system("sudo sed -ri 's/^channel=.+$/channel=6/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi9') {
	$outputtext =  "wifi channel 9";
	system("sudo sed -ri 's/^channel=.+$/channel=9/' /etc/hostapd/hostapd.conf");
}

if ($_GET['action'] == 'setwifi1') {
	$outputtext =  "wifi channel 1";
	system("sudo sed -ri 's/^channel=.+$/channel=1/' /etc/hostapd/hostapd.conf");
}

//# Wifi

if ($_GET['action'] == 'wifiup') {
	$outputtext =  "wifi on";
	system("ifconfig wlan0 up");
}

if ($_GET['action'] == 'wifidown') {
	$outputtext =  "wifi off";
	system("sudo ifconfig wlan0 down");
}

//# Disable Wifi & Bluetooth

if ($_GET['action'] == 'wifidisable') {
	$outputtext =  "wifi&bluetooth permanent off";
	system("sudo cp /var/www/sync/raspi-blacklist.conf /etc/modprobe.d/raspi-blacklist.conf");
}

if ($_GET['action'] == 'wifienable') {
	$outputtext =  "wifi&bluetooth permanent on";
	system("sudo cp /var/www/sync/raspi-blacklist.empty /etc/modprobe.d/raspi-blacklist.conf");
}


//# Set Projector Stuff

if ($_GET['action'] == 'setpjlink') {
	$outputtext =  "set to PJLINK network control";
	system("sudo cp /var/www/sync/beamer_on_off_pjlink.sh /var/www/sync/beamer_on_off.sh");
	system("sudo chmod 755 /var/www/sync/beamer_on_off.sh");
}

if ($_GET['action'] == 'seteiki') {
	$outputtext =  "set to EIKI LC-XT3 network control";
	system("sudo cp /var/www/sync/beamer_on_off_eiki.sh /var/www/sync/beamer_on_off.sh");
	system("sudo chmod 755 /var/www/sync/beamer_on_off.sh");
}

//# Audio Volume

if ($_GET['action'] == 'volume_up') {
	system("sudo su - pi -c 'amixer set Master 10%+'");
	$outputtext =  "<pre>$output</pre>";
}

if ($_GET['action'] == 'volume_down') {
	system("sudo su - pi -c 'amixer set Master 10%-'");
	$outputtext =  "<pre>$output</pre>";
}

//# Audio Output

if ($_GET['action'] == 'hdmi_out') {
	//system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /etc/rc.local");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterALL");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterCODE");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb01");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb02");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasteroneALL");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasteroneCODE");
	//system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startslave");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startseamless");
	#system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudio");
	#system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudioslave");
	#system("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudiousb");
	
	$outputtext =  "Audio set to HDMI";
}

if ($_GET['action'] == 'jack_out' || $_GET['action'] == 'both_out' || $_GET['action'] == 'alsa_out') {
	
	if ($_GET['action'] == 'jack_out') {
		$use = 'local';
		$outputtext =  "Audio set to Jack";
		
	} elseif ($_GET['action'] == 'both_out') {
		$use = 'both';
		$outputtext =  "Audio set to both";
		
	} elseif ($_GET['action'] == 'alsa_out') {
		$use = 'alsa:hw:1,0';
		$outputtext =  "Audio set to alsa:hw:1,0";
	}
	
	//#system("sudo sed -ri 's/-o [a-z]+/-o {$use}/' /etc/rc.local");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startmasterALL");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startmasterCODE");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startmasteroneALL");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startmasteroneCODE");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startmasterusb");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startmasterusb01");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startmasterusb02");
	//system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startslave");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startseamless");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startaudio");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startaudioslave");
	system("sudo sed -ri 's/-o [[:graph:]]+/-o {$use}/' /var/www/sync/startaudiousb");
}

//# filename fixer
if ($_GET['action'] == 'namefixer') {
	system("sudo /var/www/sync/./namefixer > /dev/null 2>&1");
        $outputtext =  "fixed all filenames";

}

//# conform images to hd

if ($_GET['action'] == 'imageconform') {
	system("sudo /var/www/sync/stopall > /dev/null 2>&1");
	//# this converts all to jpg
	system("sudo mogrify -format jpg /media/internal/images/*.png");
	system("sudo mogrify -format jpg /media/internal/images/*.tiff");
	system("sudo mogrify -format jpg /media/internal/images/*.tif");
	system("sudo mogrify -format jpg /media/internal/images/*.jpeg");
	system("sudo mogrify -format jpg /media/internal/images/*.bmp");
	system("sudo mogrify -format jpg /media/internal/images/*.gif");
    //# this removes the original files
	system("sudo rm /media/internal/images/*.png");
	system("sudo rm /media/internal/images/*.tiff");
	system("sudo rm /media/internal/images/*.tif");
	system("sudo rm /media/internal/images/*.jpeg");
	system("sudo rm /media/internal/images/*.bmp");
	system("sudo rm /media/internal/images/*.gif");
    //# this resizes all files
	system("sudo mogrify -resize 1920x1080\> /media/internal/images/*.jpg");
	$outputtext =  "FINISHED! all images converted to jpg and resized to HD";
}

//# convert exported .svg from madmapper and mapio to mappersettings

if ($_GET['action'] == 'mappingconverter') {
	system("sudo /var/www/sync/mappingconverter");
	$outputtext = "convert convert.svg to mappersetting1";
}

//# Sheduler

if ($_GET['action'] == 'setscheduler') {
	$outputtext = "autostart into scheduler mode";
	system("sudo cp /var/www/sync/rc.local.scheduler /etc/rc.local");
}

if ($_GET['action'] == 'gettime') {
    $output = shell_exec('date');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

if ($_GET['action'] == 'timeron') {
	$outputtext =  "enable scheduler, TIMER ON";
	system("sudo crontab /media/internal/timer.txt");
}

if ($_GET['action'] == 'timeroff') {
	$outputtext =  "disable scheduler, NO TIMER";
	system("sudo crontab /var/www/sync/notimer");
}


if ($_GET['action'] == 'timer') {
    $output = shell_exec('sudo crontab -l | grep -v "^$\|^\s*\#"');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

//# Clock Display

if ($_GET['action'] == 'clockdisplay') {
	$outputtext =  "display time onscreen";
	system ("sudo /var/www/sync/stopall");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockred') {
	$outputtext =  "clock color red";
	system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=1/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockgreen') {
	$outputtext =  "clock color green";
	system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=2/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockorange') {
	$outputtext =  "clock color orange";
	system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=3/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

if ($_GET['action'] == 'clockpink') {
	$outputtext =  "clock color pink";
	system ("sudo /var/www/sync/stopall");
	system("sudo sed -ri 's/^COLOR=.+$/COLOR=5/' /var/www/sync/clockdisplay");
	system("sudo /var/www/sync/clockdisplay");
}

//# Mapper

if ($_GET['action'] == 'relaunchmapper') {
	$outputtext =  "PiMapper relaunched";
	system("sudo /var/www/sync/relaunchmapper");
}

if ($_GET['action'] == 'launchmapper') {
	$outputtext =  "PiMapper launched";
	system("sudo /var/www/sync/launchmapper");
}

if ($_GET['action'] == 'launchmappercam') {
	$outputtext =  "PiMapper Cam launched";
	system("sudo /var/www/sync/launchmappercam");
}

if ($_GET['action'] == 'launchmapperremote') {
	$outputtext =  "PiMapper Cam launched";
	system("sudo /var/www/sync/launchmapperremote");
}

if ($_GET['action'] == 'mapperplaymode') {
	$outputtext =  "Playmode/Presentation";
	system("sudo /var/www/sync/mapper1");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappertexturemode') {
	$outputtext =  "select input mesh";
	system("sudo /var/www/sync/mapper2");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappermappingmode') {
	$outputtext =  "mapping mode";
	system("sudo /var/www/sync/mapper3");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappermediaselect') {
	$outputtext =  "select input mesh, first select grid";
	system("sudo /var/www/sync/mapper4");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperpanel') {
	$outputtext =  "show/hide layer panel";
	system("sudo /var/www/sync/mappery");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappertriangl') {
	$outputtext =  "add triangle";
	system("sudo /var/www/sync/mappert");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperquad') {
	$outputtext =  "add quad";
	system("sudo /var/www/sync/mapperq");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappercircle') {
	$outputtext =  "add circle";
	system("sudo /var/www/sync/mapperr");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappersave') {
	$outputtext =  "save comp";
	system("sudo /var/www/sync/mappers");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperdelete') {
	$outputtext =  "delete";
	system("sudo /var/www/sync/mapperdel");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperpersp') {
	$outputtext =  "toggle perspective";
	system("sudo /var/www/sync/mapperpersp");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappergrid') {
	$outputtext =  "create grid";
	system("sudo /var/www/sync/mappergrid");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperimport1') {
	$outputtext =  "import mappersetting1.xml";
	system("sudo /var/www/sync/mapperimport1");
}

if ($_GET['action'] == 'mapperimport2') {
	$outputtext =  "import mappersetting2.xml";
	system("sudo /var/www/sync/mapperimport2");
}

if ($_GET['action'] == 'mapperimport3') {
	$outputtext =  "import mappersetting3.xml";
	system("sudo /var/www/sync/mapperimport3");
}

if ($_GET['action'] == 'mapperimport4') {
	$outputtext =  "import mappersetting4.xml";
	system("sudo /var/www/sync/mapperimport4");
}

if ($_GET['action'] == 'mapperimport5') {
	$outputtext =  "import mappersetting5.xml";
	system("sudo /var/www/sync/mapperimport5");
}

if ($_GET['action'] == 'mapperexport1') {
	$outputtext =  "export mappersetting1.xml";
	system("sudo /var/www/sync/mapperexport1");
}

if ($_GET['action'] == 'mapperexport2') {
	$outputtext =  "export to mappersetting2.xml";
	system("sudo /var/www/sync/mapperexport2");
}

if ($_GET['action'] == 'mapperexport3') {
	$outputtext =  "export to mappersetting3.xml";
	system("sudo /var/www/sync/mapperexport3");
}

if ($_GET['action'] == 'mapperexport4') {
	$outputtext =  "export to mappersetting4.xml";
	system("sudo /var/www/sync/mapperexport4");
}

if ($_GET['action'] == 'mapperexport5') {
	$outputtext =  "export to mappersetting5.xml";
	system("sudo /var/www/sync/mapperexport5");
}

if ($_GET['action'] == 'mapperundo') {
	$outputtext =  "undo command";
	system("sudo /var/www/sync/mapperundo");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperinfo') {
	$outputtext =  "info";
	system("sudo expect /var/www/sync/mapperinfo");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappernext') {
	$outputtext =  "select next surface";
	system("sudo /var/www/sync/mappernext");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperprev') {
	$outputtext =  "select prev surface";
	system("sudo /var/www/sync/mapperprev");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappermediaselectth') {
	$outputtext =  "select next source";
	system("sudo /var/www/sync/mapperthrough");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperplaypause') {
	$outputtext =  "play/pause mapping source";
	system("sudo /var/www/sync/mapperpause");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperaddrow') {
	$outputtext =  "add row gridwarp only";
	system("sudo /var/www/sync/mapperaddrow");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperrmrow') {
	$outputtext =  "remove row gridwarp only";
	system("sudo /var/www/sync/mapperrmrow");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperaddcolumn') {
	$outputtext =  "add column gridwarp only";
	system("sudo /var/www/sync/mapperaddcolumn");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperrmcolumn') {
	$outputtext =  "remove column gridwarp only";
	system("sudo /var/www/sync/mapperrmcolumn");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappernextvertex') {
	$outputtext =  "select next vertex";
	system("sudo /var/www/sync/mappernextvertex");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperprevvertex') {
	$outputtext =  "select previous vertex";
	system("sudo /var/www/sync/mapperprevvertex");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperleft') {
	$outputtext =  "move left";
	system("sudo /var/www/sync/mapperleft");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperleftbig') {
	$outputtext =  "move left";
	system("sudo /var/www/sync/mapperleftbig");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperright') {
	$outputtext =  "move right";
	system("sudo /var/www/sync/mapperright");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperrightbig') {
	$outputtext =  "move right";
	system("sudo /var/www/sync/mapperrightbig");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperup') {
	$outputtext =  "move up";
	system("sudo /var/www/sync/mapperup");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperupbig') {
	$outputtext =  "move up";
	system("sudo /var/www/sync/mapperupbig");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperdown') {
	$outputtext =  "move down";
	system("sudo /var/www/sync/mapperdown");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperdownbig') {
	$outputtext =  "move down";
	system("sudo /var/www/sync/mapperdownbig");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperlayerup') {
	$outputtext =  "layerup";
	system("sudo /var/www/sync/mapperlayerup");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperlayerdown') {
	$outputtext =  "layerdown";
	system("sudo /var/www/sync/mapperlayerdown");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperscaleup') {
	$outputtext =  "scaleup (has delay)";
	system("sudo /var/www/sync/mapperscaleup");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperscaledown') {
	$outputtext =  "scaledown (has delay)";
	system("sudo /var/www/sync/mapperscaledown");
	system("killall -9 /opt/fsayskeyboard");
}

//# Mapper Slide Show settings


if ($_GET['action'] == 'mapperslidetime2') {
	$outputtext =  "mapper slideshowtime 2s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>2</SlideDuration>@' /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/magslideshow_settings.xml");
}

if ($_GET['action'] == 'mapperslidetime5') {
	$outputtext =  "mapper slideshowtime 5s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>5</SlideDuration>@' /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/magslideshow_settings.xml");
}

if ($_GET['action'] == 'mapperslidetime10') {
	$outputtext =  "mapper slideshowtime 10s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>10</SlideDuration>@' /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/magslideshow_settings.xml");
}

if ($_GET['action'] == 'mapperslidetime15') {
	$outputtext =  "mapper slideshowtime 15s";
	system("sudo sed -ri 's@<SlideDuration>.+</SlideDuration>@<SlideDuration>15</SlideDuration>@' /home/pi/openFrameworks/addons/ofxPiMapper/example/bin/data/magslideshow_settings.xml");
}

if ($_GET['action'] == 'mapperresizenative') {
	$outputtext =  "mapper resize slideshow to native";
	system("sudo /var/www/sync/mappersizenative");
}

if ($_GET['action'] == 'mapperresizefit') {
	$outputtext =  "mapper resize slideshow to fit";
	system("sudo /var/www/sync/mappersizefit");
}

if ($_GET['action'] == 'mapperresizefitprop') {
	$outputtext =  "mapper resize slideshow to fitproportionally";
	system("sudo /var/www/sync/mappersizefitprop");
}

if ($_GET['action'] == 'mapperresizefillprop') {
	$outputtext =  "mapper resize slideshow to fillproportionally";
	system("sudo /var/www/sync/mappersizefillprop");
}

//# Impress Presentation

if ($_GET['action'] == 'impresslast') {
	$outputtext =  "open recent document";
	system("sudo /var/www/sync/impress");
}

if ($_GET['action'] == 'impressrelaunch') {
	$outputtext =  "Relaunch Impress";
	system("sudo pkill soffice.bin");
	system("sudo su -s /bin/bash -c startx pi&");
}

if ($_GET['action'] == 'impressplay') {
	$outputtext =  "Playmode/Presentation";
	system("sudo /var/www/sync/impressf5");

}

if ($_GET['action'] == 'impressedit') {
	$outputtext =  "Editmode";
	system("sudo /var/www/sync/impressesc");

}

if ($_GET['action'] == 'impressnext') {
	$outputtext =  "Next";
	system("sudo /var/www/sync/impressnext");
}

if ($_GET['action'] == 'impressprev') {
	$outputtext =  "Prev";
	system("sudo /var/www/sync/impressprev");

}

if ($_GET['action'] == 'impressopen') {
	$outputtext =  "Open file";
	system("sudo /var/www/sync/impressopen");
}

if ($_GET['action'] == 'impressclose') {
	$outputtext =  "Save file";
	system("sudo /var/www/sync/impressclose");
}


//# Projector Control

if ($_GET['action'] == 'beameron') {
	$outputtext =  "Projector ON";
	system("sudo /var/www/sync/beameron");
}

if ($_GET['action'] == 'beameroff') {
	$outputtext =  "Projector OFF";
	system("sudo /var/www/sync/beameroff");
}

//# Change Network to DHCP/Static

if ($_GET['action'] == 'setdhcp') {
	$outputtext =  "Set dhcp (disable sync & projector control)";
	#system("sudo cp /etc/network/interfaces /var/www/sync/interfaces.static");
	system("sudo cp /var/www/sync/interfaces.dhcp /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic100') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static100 /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic101') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static101 /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic102') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static102 /etc/network/interfaces");
}

//# Expansion Board

if ($_GET['action'] == 'setrtc') {
	$outputtext =  "set to PocketVJ RTC";
	system("sudo sed -ri 's/^dtoverlay=.+$/dtoverlay=i2c-rtc,ds1307/' /boot/config.txt");
}

if ($_GET['action'] == 'setexpansion') {
	$outputtext =  "set to PocketVJ Expansion";
	system("sudo sed -ri 's/^dtoverlay=.+$/dtoverlay=i2c-rtc,mcp7941x/' /boot/config.txt");
}



//# PiWall 4 Screen setup

if ($_GET['action'] == 'piwall_topleft') {
	system("sudo /var/www/sync/piwall_topleft > /dev/null &");
	$outputtext =  "piwall slave top left";
}

if ($_GET['action'] == 'piwall_topright') {
	$outputtext =  "piwall slave top right";
	system("sudo /var/www/sync/piwall_topright > /dev/null &");
}

if ($_GET['action'] == 'piwall_botleft') {
	$outputtext =  "piwall slave button left";
	system("sudo /var/www/sync/piwall_butleft > /dev/null &");
}

if ($_GET['action'] == 'piwall_botright') {
	$outputtext =  "piwall slave button right";
	system("sudo /var/www/sync/piwall_butright > /dev/null &");
}

//# PiWall 3 Screen Setup

if ($_GET['action'] == 'piwall_left') {
	system("sudo /var/www/sync/piwall_left > /dev/null &");
	$outputtext =  "piwall3 slave left";
}

if ($_GET['action'] == 'piwall_middle') {
	$outputtext =  "piwall3 slave middle";
	system("sudo /var/www/sync/piwall_middle > /dev/null &");
}

if ($_GET['action'] == 'piwall_right') {
	$outputtext =  "piwall3 slave right";
	system("sudo /var/www/sync/piwall_right > /dev/null &");
}

//# PiWall Master

if ($_GET['action'] == 'piwall_master') {
	$outputtext =  "piwall master";
	system("sudo /var/www/sync/piwall_masteronly > /dev/null &");
}

if ($_GET['action'] == 'piwall_masterloop') {
	$outputtext =  "piwall master loop";
	system("sudo /var/www/sync/piwall_master > /dev/null &");
}

//# Stream Audio from ALSA to Janus server only available in PocketVJ 3.2
//# does not work when usb soundcard is connected, due indexing of devices, loopback must be device 2
//# check with cat /proc/asound/modules
//# Access with link: http://192.168.2.100/streamer/index.html

if ($_GET['action'] == 'audiostream') {
	system("sudo /var/www/sync/startmasterstream");
	$outputtext =  "start video master loop and send audio to server";
}

if ($_GET['action'] == 'audiostreamslave') {
	system("sudo /var/www/sync/startslavestream");
	$outputtext =  "start video slave loop and send audio to server";
}

if ($_GET['action'] == 'audiostreamseamless') {
	system("sudo /var/www/sync/startseamlessstream");
	$outputtext =  "start video seamless and send audio to server";
}

if ($_GET['action'] == 'startaudiostream') {
	exec("sudo /var/www/sync/startaudiostream");
	$outputtext = "start audio streaming player";
}

if ($_GET['action'] == 'audiostreamstop') {
	$outputtext =  "stop video master loop and stop audio server";
	system("sudo /var/www/sync/omxkill");
	system("sudo pkill gst-launch");
	system("sudo killall -9 janus");
	system("sudo modprobe -r snd-aloop");
}

//# TCPSyphon Receiver

if ($_GET['action'] == 'tcpsserver') {
	system("sudo /var/www/sync/tcpsserver");
	$outputtext =  "re/start TCPSyphon Receiver";
}

if ($_GET['action'] == 'tcpsserver_downleft') {
	system("sudo /var/www/sync/tcpsserver_downleft");
	$outputtext =  "re/start TCPSyphon Receiver downleft";
}

if ($_GET['action'] == 'tcpsserver_downright') {
	system("sudo /var/www/sync/tcpsserver_downright");
	$outputtext =  "re/start TCPSyphon Receiver downright";
}

if ($_GET['action'] == 'tcpsserver_topright') {
	system("sudo /var/www/sync/tcpsserver_topright");
	$outputtext =  "re/start TCPSyphon Receiver topright";
}
if ($_GET['action'] == 'tcpsserver_topleft') {
	system("sudo /var/www/sync/tcpsserver_topleft");
	$outputtext =  "re/start TCPSyphon Receiver topleft";
}


//# NDI Receiver

if ($_GET['action'] == 'ndireceiver') {
	$output = shell_exec('sudo /home/pi/NDI_SDK/examples/C++/NDIlib_Find/./NDIlib_Find');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

//# NDI sender

if ($_GET['action'] == 'ndisend') {
	$output = shell_exec('sudo /home/pi/NDI_SDK/examples/C++/NDIlib_Send_Video/./NDIlib_Send_Video /media/internal/video/* &');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

//# System Stuff for Fun

if ($_GET['action'] == 'gettemp') {
	$output = shell_exec('sudo /opt/vc/bin/vcgencmd measure_temp');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

if ($_GET['action'] == 'getgpu') {
	$output = shell_exec('sudo vcdbg reloc');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

if ($_GET['action'] == 'cpuusage') {
	$output = shell_exec('top');
	system("sudo killall -9 top");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 124, "<br />\n");
}

//# Stop Webserver

if ($_GET['action'] == 'stopwebserver'){
	$outputtext =  "CP - Webserver down";
	system("sudo systemctl stop hostapd.service");
}

//# OSC receiver

if ($_GET['action'] == 'oscreceiver') {
	system("sudo /var/www/sync/osc_start");
	$outputtext =  "start OSC Control Receiver";
}


//# Camera Live Feed

if ($_GET['action'] == 'camerafeed') {
	$outputtext =  "start camerafeed";
	system("sudo /var/www/sync/camerafeed");
}

if ($_GET['action'] == 'camerapicture') {
	$outputtext =  "snap a picture with camera and store in /internal/images";
	system("sudo /var/www/sync/camerapicture");
}


//# enable camera in boot.config

if ($_GET['action'] == 'disablecamera') {
	system("sudo sed -ri 's/^start_x=.+$/start_x=0/' /boot/config.txt");
	$outputtext =  "camera disabled, please reboot!";
}

if ($_GET['action'] == 'enablecamera') {
	system("sudo sed -ri 's/^start_x=.+$/start_x=1/' /boot/config.txt");
	$outputtext =  "camera enabled, please reboot!";
}

//# enable camera efx

if ($_GET['action'] == 'cameranone') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=none/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = none";
}

if ($_GET['action'] == 'cameragpen') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=gpen/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = gpen";
}

if ($_GET['action'] == 'camerasketch') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=sketch/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = sketch";
}

if ($_GET['action'] == 'cameraemboss') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=emboss/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = emboss";
}

if ($_GET['action'] == 'camerahatch') {
	system("sudo sed -ri 's/^EFX=.+$/EFX=hatch/' /var/www/sync/camerafeed");
	$outputtext =  "camera efx = hatch";
}

//# Custom Buttons / Functions

if ($_GET['action'] == 'customfunction1') {
	system("sudo /var/www/sync/customfunction1");
	$outputtext =  "customfunction1";
}

if ($_GET['action'] == 'customfunction2') {
	system("sudo /var/www/sync/customfunction2");
	$outputtext =  "customfunction2";
}


echo $outputtext;
?>
