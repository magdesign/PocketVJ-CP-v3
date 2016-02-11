<?php



if ($_GET['action'] == 'stop') {
	$outputtext =  "all players stopped";
	system ("sudo /var/www/sync/stopall > /dev/null 2>&1");
	#system("sudo /var/www/sync/omxkill.py");
	#system("sudo /var/www/sync/testscreenoff.py &");
	#system("sudo killall -9 /home/pi/of_v0.8.4/addons/ofxPiMapper/example/./bin/example");
	#system("sudo killall -9 /usr/bin/TCPSClient.bin");
	#system("sudo /var/www/sync/rplay stop");
	#system("sudo killall -9 /var/www/sync/tty-clock");
	#system("sudo killall -9 mpg321");
	#system("sudo killall -9 feh");
	#system("sudo kill $(pidof X");
	#system("sudo /var/www/sync/clearscreen.sh");
}

if ($_GET['action'] == 'startmaster') {
	exec("sudo /var/www/sync/startmaster");
	$outputtext = "start player as master";
}

if ($_GET['action'] == 'startmaster01') {
	exec("sudo /var/www/sync/startmaster01");
	$outputtext = "start video 01 loop";
}

if ($_GET['action'] == 'startmaster02') {
	exec("sudo /var/www/sync/startmaster02");
	$outputtext = "start video 02 loop";
}

if ($_GET['action'] == 'startmaster03') {
	exec("sudo /var/www/sync/startmaster03");
	$outputtext = "start video 03 loop";
}

if ($_GET['action'] == 'startmaster04') {
	exec("sudo /var/www/sync/startmaster04");
	$outputtext = "start video 04 loop";
}

if ($_GET['action'] == 'startmaster05') {
	exec("sudo /var/www/sync/startmaster05");
	$outputtext = "start video 05 loop";
}

if ($_GET['action'] == 'startmaster06') {
	exec("sudo /var/www/sync/startmaster06");
	$outputtext = "start video 06 loop";
}

if ($_GET['action'] == 'startmaster07') {
	exec("sudo /var/www/sync/startmaster07");
	$outputtext = "start video 07 loop";
}

if ($_GET['action'] == 'startmaster08') {
	exec("sudo /var/www/sync/startmaster08");
	$outputtext = "start video 08 loop";
}


if ($_GET['action'] == 'startmasteronce') {
	exec("sudo /var/www/sync/startmasterone");
	$outputtext = "start player as master once";
}

if ($_GET['action'] == 'startmasteronce01') {
	exec("sudo /var/www/sync/startmasterone01");
	$outputtext = "start video 01 once";
}

if ($_GET['action'] == 'startmasteronce02') {
	exec("sudo /var/www/sync/startmasterone02");
	$outputtext = "start video 02 once";
}

if ($_GET['action'] == 'startmasteronce03') {
	exec("sudo /var/www/sync/startmasterone03");
	$outputtext = "start video 03 once";
}

if ($_GET['action'] == 'startmasteronce04') {
	exec("sudo /var/www/sync/startmasterone04");
	$outputtext = "start video 04 once";
}

if ($_GET['action'] == 'startmasteronce05') {
	exec("sudo /var/www/sync/startmasterone05");
	$outputtext = "start video 05 once";
}


if ($_GET['action'] == 'startslave') {
	exec("sudo /var/www/sync/startslave");
	$outputtext =  "start player as slave";
}

if ($_GET['action'] == 'startusb') {
	exec("sudo /var/www/sync/startmasterusb");
	$outputtext =  "start player in usb mode";	
}

if ($_GET['action'] == 'pause') {
	exec("sudo /var/www/sync/pause.py");
	$outputtext = "Pause, click again to resume";
}

if ($_GET['action'] == 'printscreen') {
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
	system("sudo /var/www/sync/startimage &");
}

if ($_GET['action'] == 'imageusb') {
	$outputtext =  "start image player from usb";
	system("sudo /var/www/sync/startimageusb");
}

//# PDF player

if ($_GET['action'] == 'startpdf') {
	$outputtext =  "start pdf player";
	system("sudo /var/www/sync/startpdf");
}

if ($_GET['action'] == 'startpdfusb') {
	$outputtext =  "start pdf player";
	system("sudo /var/www/sync/startpdfusb");
}


//# Testscreen

if ($_GET['action'] == 'testscreen') {
    exec("sudo /var/www/sync/omxkill.py");
	system("sudo killall fbi");
	system("sudo /var/www/sync/testscreen.py &");
    $outputtext =  "testscreen activated"; 
}

if ($_GET['action'] == 'testscreenoff') {
    system("sudo /var/www/sync/testscreenoff.py &");
	$outputtext =  "testscreen deactivated";
}

//# Audioplayer

if ($_GET['action'] == 'audio') {
	exec("sudo /var/www/sync/startaudio");
	$outputtext = "start audio player";
}

if ($_GET['action'] == 'audiousb') {
	$outputtext =  "start audio player in usb mode";
	exec("sudo /var/www/startaudiosub");
}

if ($_GET['action'] == 'stopaudio') {
	$outputtext =  "stop audio player only";
	system("sudo killall -9 mpg321");
}




//# Testtone

if ($_GET['action'] == 'testtone') {
	exec("sudo /var/www/sync/omxkill.py");
	exec("sudo omxplayer-sync -mu /var/www/sync/testtone.mp3 > /dev/null 2>&1 & echo $!");
	$outputtext = "sinus 440 testtone";
}


//# USB Stick mount


if ($_GET['action'] == 'reboot') {
	$outputtext =  "rebooting now!";
	system("sudo reboot");
}

if ($_GET['action'] == 'shutdown') {
	$outputtext =  "shuting down";
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

if ($_GET['action'] == 'slave') {
	$outputtext =  "slave set";
	system("sudo cp /var/www/sync/rc.local.slave /etc/rc.local");
}

if ($_GET['action'] == 'extension1') {
	$outputtext =  "extension1 set";
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
	system("sudo cp /var/www/sync/xsession /home/pi/.xsession");
	system("sudo cp /var/www/sync/rc.local.screenshare /etc/rc.local");
}

if ($_GET['action'] == 'setmapper') {
	$outputtext =  "set to mapping mode";
	system("sudo cp /var/www/sync/rc.local.mapper /etc/rc.local");
}

if ($_GET['action'] == 'powerpoint') {
	$outputtext =  "set to presentationmode";
	system("sudo cp /var/www/sync/xsessionppt /home/pi/.xsession");
	system("sudo cp /var/www/sync/rc.local.impress /etc/rc.local");
}

if ($_GET['action'] == 'setimagemanual') {
	$outputtext =  "set to manual imageplayer";
	system("sudo cp /var/www/sync/xsessionimage /home/pi/.xsession");
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

if ($_GET['action'] == 'setairplay') {
	$outputtext =  "set to Airplay Mirror";
	system("sudo cp /var/www/sync/rc.local.airplay /etc/rc.local");
	system("sudo rm /home/pi/.xsession");
}

if ($_GET['action'] == 'setpicast') {
	$outputtext =  "set to RaspberryCast Mirror";
	system("sudo cp /var/www/sync/rc.local.picast /etc/rc.local");
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
	$outputtext = wordwrap($preoutputtext, 51, "<br />\n");
}

if ($_GET['action'] == 'iplan') {
    $output = shell_exec("sudo /sbin/ifconfig -a eth0 | awk '/(cast)/ { print $2 }' | cut -d':' -f2 | head -1");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 51, "<br />\n");
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
	$output =  "reset resolution settings";
	system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
}

if ($_GET['action'] == 'hdmi1') {
	$output =  "forced to use hdmi VGA";
	system("sudo cp /var/www/sync/forcehdmi1 /boot/config.txt");
}

if ($_GET['action'] == 'hdmi4') {
	$outputtext =  "forced to use hdmi 720p";
	system("sudo cp /var/www/sync/forcehdmi4 /boot/config.txt");
}

if ($_GET['action'] == 'hdmi5') {
	$outputtext =  "forced to fullHD 1080";
	system("sudo cp /var/www/sync/forcehdmi5 /boot/config.txt");
}

if ($_GET['action'] == 'hdmivga') {
	$outputtext =  "hdmi to vga 800x600";
	system("sudo cp /var/www/sync/forcevga /boot/config.txt");
}

if ($_GET['action'] == 'force1200') {
	$outputtext =  "force 1920x1200 rb";
	system("sudo cp /var/www/sync/force1200 /boot/config.txt");
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
}


if ($_GET['action'] == 'screenon') {
	$outputtext = shell_exec('sudo /opt/vc/bin/tvservice -p');	
}

if ($_GET['action'] == 'screenoff') {
	$outputtext = shell_exec('sudo /opt/vc/bin/tvservice -o');
}

//# Display Info

if ($_GET['action'] == 'getresolution') {
	$output = shell_exec('sudo tvservice -s');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 51, "<br />\n");
}

if ($_GET['action'] == 'parser') {
    $output = shell_exec('sudo tvservice -d edid.dat');
    $output = shell_exec('sudo edidparser edid.dat');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 51, "<br />\n");
}

if ($_GET['action'] == 'codecinfo') {
	$output = shell_exec('mediainfo --Inform="General;%CompleteName%  Format: %Format% Codec: %CodecID%  Bitrate: %OverallBitRate%  " /media/internal/video/*');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 33, "<br />\n");
}

if ($_GET['action'] == 'movieinfo') {
	$output = shell_exec('mediainfo --Inform="Video;Videosize: %Width%x%Height% pixel  " /media/internal/video/*');
	$preoutputtext2 = "<pre>$output</pre>";
	$newtext = wordwrap($preoutputtext2, 30, "<br />\n");
	$outputtext = "$newtext\n";
}

if ($_GET['action'] == 'diskspace') {
    $output = shell_exec('df -h /media');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 51, "<br />\n");
}


//# Firmmware Stuff

if ($_GET['action'] == 'firmware') {
	$outputtext =  "upgrade player and sync";
	system("sudo cp /media/usb/omxplayer /usr/bin/omxplayer");
	system("sudo cp /media/usb/omxplayer.bin /usr/bin/omxplayer.bin");
	system("sudo cp /media/usb/omxplayer-sync /usr/bin/omxplayer-sync");
	
}

if ($_GET['action'] == 'controlpanel') {
	$outputtext =  "update ControlPanel USB";
	system("sudo cp -r /media/usb/PocketVJ-CP-v2-master.zip /media/internal/PocketVJ-CP-v2-master.zip");
	system("sudo unzip /media/internal/PocketVJ-CP-v2-master.zip -d /media/internal/");
	system("sudo cp -r /media/internal/PocketVJ-CP-v2-master/* /var/www");
	system("sudo chmod 755 -R /var/www");
	system("sudo rm -r /media/internal/PocketVJ-CP-v2-master.zip");
	system("sudo rm -r /media/internal/PocketVJ-CP-v2-master");
}

if ($_GET['action'] == 'controlpanelintern') {
	$outputtext =  "update ControlPanel internal";
	system("sudo unzip /media/internal/PocketVJ-CP-v2-master.zip -d /media/internal/");
	system("sudo cp -r /media/internal/PocketVJ-CP-v2-master /var/www/");
	system("sudo chmod 755 -R /var/www/");
	system("sudo rm -r /media/internal/PocketVJ-CP-v2-master.zip");
	system("sudo rm -r /media/internal/PocketVJ-CP-v2-master");

}

if ($_GET['action'] == 'depencies1') {
	$outputtext =  "update depencies";
	system("sudo /var/www/sync/omxkill.py");
	system("sudo /var/www/sync/testscreenoff.py &");
	system("sudo /var/www/sync/depencies1.py &");

}

if ($_GET['action'] == 'factoryreset') {
	$outputtext =  "factory reset system";
	system("sudo cp /var/www/sync/omxplayer-sync /usr/bin/omxplayer-sync");
    system("sudo cp /var/www/sync/defaulthdmi /boot/config.txt");
    system("sudo cp /var/www/sync/rc.local.master /etc/rc.local"); 
    system("sudo cp /var/www/sync/dbuscontrol.sh /usr/bin/dbuscontrol.sh"); 
    system("sudo chmod +rx /usr/bin/dbuscontrol.sh");
	system("sudo chmod 755 -R /var/www");
	system("sudo chmod 777 -R /media");

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
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /etc/rc.local");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmaster");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmasterusb");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmasterone");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startslave");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmaster01");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmaster02");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmaster03");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmaster04");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmaster05");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmaster06");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmasterone01");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmasterone02");
	system("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /var/www/sync/startmasterone03");
	$outputtext =  "Audio set to HDMI";
}

if ($_GET['action'] == 'jack_out') {
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /etc/rc.local");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmaster");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmasterusb");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmasterone");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startslave");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmaster01");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmaster02");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmaster03");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmaster04");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmaster05");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmaster06");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmasterone01");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmasterone02");
	system("sudo sed -ri 's/-o [a-z]+/-o local/' /var/www/sync/startmasterone03");
	$outputtext =  "Audio set to Jack";
}

if ($_GET['action'] == 'both_out') {
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /etc/rc.local");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmaster");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmasterusb");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmasterone");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startslave");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmaster01");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmaster02");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmaster03");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmaster04");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmaster05");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmaster06");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmasterone01");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmasterone02");
	system("sudo sed -ri 's/-o [a-z]+/-o both/' /var/www/sync/startmasterone03");
	$outputtext =  "Audio set to both";
}


if ($_GET['action'] == 'imageconform') {
	system("sudo mogrify -format jpg /media/internal/images/*.png");
	system("sudo mogrify -format jpg /media/internal/images/*.tiff");
	system("sudo mogrify -format jpg /media/internal/images/*.tif");
	system("sudo mogrify -format jpg /media/internal/images/*.jpeg");
	system("sudo mogrify -format jpg /media/internal/images/*.bmp");
	system("sudo mogrify -format jpg /media/internal/images/*.gif");

	system("sudo rm /media/internal/images/*.png");
	system("sudo rm /media/internal/images/*.tiff");
	system("sudo rm /media/internal/images/*.tif");
	system("sudo rm /media/internal/images/*.jpeg");
	system("sudo rm /media/internal/images/*.bmp");
	system("sudo rm /media/internal/images/*.gif");

	system("sudo mogrify -resize 1920x1080\> /media/internal/images/*.jpg");
	$outputtext =  "FINISHED! all images converted to jpg and resized to HD";
	
	system("sudo killall fbi");
	system("sudo /var/www/sync/omxkill.py");
	system("sudo /var/www/sync/startimage > /dev/null 2>&1 & echo $!");
	$outputtext =  "starting image player";

}

//# Slideshow Time

if ($_GET['action'] == 'slidetime5') {
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=5/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=5/' /var/www/sync/xsessionslidesusb");
	$outputtext =  "set slideshowtime to 5s";
}

if ($_GET['action'] == 'slidetime10') {
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=10/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=10/' /var/www/sync/xsessionslidesusb");
	$outputtext =  "set slideshowtime to 10s";
}

if ($_GET['action'] == 'slidetime15') {
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=15/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=15/' /var/www/sync/xsessionslidesusb");
	$outputtext =  "set slideshowtime to 15s";
}

if ($_GET['action'] == 'slidetime0') {
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=0.1/' /var/www/sync/xsessionslideshow");
	system("sudo sed -ri 's/^DELAY=.+$/DELAY=0.1/' /var/www/sync/xsessionslidesusb");
	$outputtext =  "set slideshowtime to 15s";
}


//# Extension 1

if ($_GET['action'] == 'temperature') {
    $output = shell_exec('sudo /var/www/sync/temperature.py 11 4');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 51, "<br />\n");
}

if ($_GET['action'] == 'heateron') {
	$outputtext =  "Heater ON !!!";
	system("sudo /var/www/sync/relais1_on.py &");
}

if ($_GET['action'] == 'heateroff') {
	$outputtext =  "Heater OFF !!!";
	system("sudo /var/www/sync/relais1_off.py &");
}


//# Sheduler


if ($_GET['action'] == 'setscheduler') {
	$outputtext = "autostart into scheduler mode";
	system("sudo cp /var/www/sync/rc.local.scheduler /etc/rc.local");
}

if ($_GET['action'] == 'gettime') {
    $output = shell_exec('date');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 51, "<br />\n");
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
	$outputtext = wordwrap($preoutputtext, 102, "<br />\n");
}

//# Clock Display


if ($_GET['action'] == 'clockdisplay') {
	$outputtext =  "display time onscreen";
	system ("sudo /var/www/sync/stopall");
	system("sudo /var/www/sync/clockdisplaypink");
}



//# Mapper

if ($_GET['action'] == 'relaunchmapper') {
	$outputtext =  "PiMapper relaunched";
	system("sudo /var/www/sync/relaunchmapper");
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
	$outputtext =  "mappig mode";
	system("sudo /var/www/sync/mapper3");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappermediaselect') {
	$outputtext =  "select input mesh";
	system("sudo /var/www/sync/mapper4");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mappertriangle') {
	$outputtext =  "add triangle";
	system("sudo /var/www/sync/mappert");
	system("killall -9 /opt/fsayskeyboard");
}

if ($_GET['action'] == 'mapperquad') {
	$outputtext =  "add quad";
	system("sudo /var/www/sync/mapperq");
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

if ($_GET['action'] == 'mapperimport') {
	$outputtext =  "import mappersettings.xml";
	system("sudo /var/www/sync/mapperimport");
}

if ($_GET['action'] == 'mapperexport') {
	$outputtext =  "export to /internal/mappersettings.xml";
	system("sudo /var/www/sync/mapperexport");
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

//# Impress Presentation


if ($_GET['action'] == 'impresslast') {
	$outputtext =  "not implemented yet";
	#ystem("pkill soffice.bin");
	#system("su -s /bin/bash -c startx pi&");
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
	system("sudo /var/www/sync/beamer_on_off.sh --on");
}

if ($_GET['action'] == 'beameroff') {
	$outputtext =  "Projector ON";
	system("sudo /var/www/sync/beamer_on_off.sh --off");
}

//# Change Network to DHCP/Static


if ($_GET['action'] == 'setdhcp') {
	$outputtext =  "Set dhcp (disable sync & projector control)";
	system("sudo cp /etc/network/interfaces /var/www/sync/interfaces.static");
	system("sudo cp /var/www/sync/interfaces.dhcp /etc/network/interfaces");
}

if ($_GET['action'] == 'setstatic') {
	$outputtext =  "Set static network (standard)";
	system("sudo cp /var/www/sync/interfaces.static /etc/network/interfaces");
}




echo $outputtext;
?>
