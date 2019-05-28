// This should be placed in /home/pi/osc/osc_control.js to work with webCP
// or execute through via terminal 'node osc_control.js'

var util = require('util')
var exec = require('child_process').exec;
var ip = require("ip");
var OscReceiver = require('osc-receiver')
  , receiver = new OscReceiver();

// here you can define the OSC port number

receiver.bind(9876);
console.log("Running OSC");
console.log("Config TouchOSC Host to " + ip.address() + " and Port(outgoing) to 9876");

// here are all the commands listed which can be executed via OSC
// if there are missing commands, which for sure are, you will find them in /var/www/backend.php
// if you added commands to this script and they are working, please contribute via github or email
// thanks for your help

// ----- Sections to Add Roadmap -----
// * add Mapping controls
// ✓ add Syphon Receiver On/OFF
// ✓ add NDI Send / Receive
// * add Image player and controls (requires new TouchOSC tab)
// ✓ add Pi Wall (*requires new TouchOSC tab)
// ✓ add set Audio Output and Testtone section (* need to add to TouchOSC)
// ✓ (add Display adjustment section (requires, new TouchOSC tab)
// ----- ======================= -----

//# Global commands

receiver.on('/stopall', function () {
console.log('stop every task');
exec("/var/www/sync/stopall");
});

receiver.on('/testscreen', function () {
console.log('activate testscreen');
exec("/var/www/sync/testscreen");
});

receiver.on('/testscreenoff', function () {
console.log('deactivate testscreen');
exec("/var/www/sync/testscreenoff");
});

receiver.on('/shutdown', function () {
console.log('Shutting down');
exec("sudo poweroff");
});

receiver.on('/reboot', function () {
console.log('Rebooting...');
exec("sudo reboot");
});

receiver.on('/rebootall', function () {
console.log('Rebooting All');
exec("/var/www/sync/rebootall");
});

receiver.on('/shutdownall', function () {
console.log('Shutting down All');
exec("/var/www/sync/shutdownall");
});


//#  Audio Output and Testtone section

receiver.on('/testtone', function () {
console.log('Sinus 440 test tone playing');
exec("sudo /var/www/sync/omxkill");
exec("sudo omxplayer-sync -mu /var/www/sync/testtone.mp3 > /dev/null 2>&1 & echo $!");
});

receiver.on('/testtoneright', function () {
console.log('Sinus test tone right');
exec("sudo /var/www/sync/omxkill");
exec("sudo omxplayer-sync -mu /var/www/sync/testtone_right.mp3 > /dev/null 2>&1 & echo $!");
});

receiver.on('/testtoneleft', function () {
console.log('Sinus test tone left');
exec("sudo /var/www/sync/omxkill");
exec("sudo omxplayer-sync -mu /var/www/sync/testtone_left.mp3 > /dev/null 2>&1 & echo $!");
});

receiver.on('/volumeup', function () {
console.log('Volume Up');
exec("sudo su - pi -c 'amixer set Master 10%+'");
});

receiver.on('/volumedown', function () {
console.log('Volume Down');
exec("sudo su - pi -c 'amixer set Master 10%-'");
});

receiver.on('/audiohdmiout', function () {
console.log('Audio HDMI Output');
//exec("sudo sed -ri 's/-o [a-z]+/-o hdmi/' /etc/rc.local");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasteroneALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasteroneCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startseamless");
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudio");
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudioslave");
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudiousb");
});

receiver.on('/audiojack', function () {
console.log('3.5mm Audio Jack Output');
//#exec("sudo sed -ri 's/-o [a-z]+/-o local/' /etc/rc.local");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasteroneALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasteroneCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterusb");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterusb02");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startseamless");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startaudio");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startaudioslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startaudiousb");
});

receiver.on('/audioboth', function () {
console.log('Audio Out Both 3.5mm Jack & HDMI');
//#exec("sudo sed -ri 's/-o [a-z]+/-o both/' /etc/rc.local");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasteroneALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasteroneCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterusb");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterusb02");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startseamless");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startaudio");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startaudioslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startaudiousb");
});

receiver.on('/audiousb', function () {
console.log('Audio Out USB device alsa:hw:1,0');
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/g' /etc/rc.local");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasteroneALL");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasteroneCODE");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterusb");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterusb02");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startseamless");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startaudio");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startaudioslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startaudiousb");
});


//# Display adjustments section (*requires, new TouchOSC tab)


receiver.on('/screenon', function () {
console.log('Wakup Screen');
exec("sudo /opt/vc/bin/tvservice -p");
});

receiver.on('/screenoff', function () {
console.log('Sleep Screen');
exec("sudo /opt/vc/bin/tvservice -o");
});

receiver.on('/rotate0', function () {
console.log('Display Rotation = Normal, Reboot');
exec("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0/' /boot/config.txt");
});

receiver.on('/rotate90', function () {
console.log('Display Rotation = 90°, Reboot');
exec("sudo sed -ri 's/^display_rotate=.+$/display_rotate=1/' /boot/config.txt");
});

receiver.on('/rotate180', function () {
console.log('Display Rotation = 180°, Reboot');
exec("sudo sed -ri 's/^display_rotate=.+$/display_rotate=2/' /boot/config.txt");
});

receiver.on('/rotate270', function () {
console.log('Display Rotation = 270°, Reboot');
exec("sudo sed -ri 's/^display_rotate=.+$/display_rotate=3/' /boot/config.txt");
});

receiver.on('/fliph', function () {
console.log('Display Flip Horizontally, Reboot');
exec("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0x10000/' /boot/config.txt");
});

receiver.on('/flipv', function () {
console.log('Display Flip Vertically, Reboot');
exec("sudo sed -ri 's/^display_rotate=.+$/display_rotate=0x20000/' /boot/config.txt");
});


//# Clock Display and color Changes

receiver.on('/clockdisplay', function () {
console.log('Display Clock');
exec("/var/www/sync/clockdisplay");
});

receiver.on('/clockred', function () {
console.log('Red Clock');
exec("sudo /var/www/sync/stopall");
exec("sudo sed -ri 's/^COLOR=.+$/COLOR=1/' /var/www/sync/clockdisplay");
exec("sudo /var/www/sync/clockdisplay")
});

receiver.on('/clockgreen', function () {
console.log('Green Clock');
exec("sudo /var/www/sync/stopall");
exec("sudo sed -ri 's/^COLOR=.+$/COLOR=2/' /var/www/sync/clockdisplay");
exec("sudo /var/www/sync/clockdisplay")
});

receiver.on('/clockorange', function () {
console.log('Orange Clock');
exec("sudo /var/www/sync/stopall");
exec("sudo sed -ri 's/^COLOR=.+$/COLOR=3/' /var/www/sync/clockdisplay");
exec("sudo /var/www/sync/clockdisplay")
});

receiver.on('/clockpink', function () {
console.log('Pink Clock');
exec("sudo /var/www/sync/stopall");
exec("sudo sed -ri 's/^COLOR=.+$/COLOR=5/' /var/www/sync/clockdisplay");
exec("sudo /var/www/sync/clockdisplay")
});


//# Video Control Section

receiver.on('/pause', function () {
console.log('pause videoplayer');
exec("/var/www/sync/dbuscontrol.sh pause > /dev/null 2>&1");
});

receiver.on('/fastforward', function () {
console.log('seek 10s forward videoplayer');
exec("/var/www/sync/dbuscontrol.sh seek 10000000");
});

receiver.on('/stopvideo', function () {
console.log('Stopping Video');
exec("/var/www/sync/stopvideo");
});

receiver.on('/startmaster', function () {
console.log('start videoplayer as master');
exec("/var/www/sync/startmasterALL");
});

var i;
for (i = 1; i < 99; i++) {
	var use = i;
	if (i<=9) use = '0'+i;
	receiver.on('/startmaster'+use, function () {
		console.log('start seamless video_'+use+' loop');
		exec("/var/www/sync/startmasterCODE "+use);
	});
}

receiver.on('/startmasteronce', function () {
	console.log('start videoplayer once as master');
	exec("/var/www/sync/startmasteroneALL");
});

var i;
for (i = 1; i < 99; i++) {
	var use = i;
	if (i<=9) use = '0'+i;
	receiver.on('/startmasteronce'+use, function () {
		console.log('start video_'+use+' once');
		exec("/var/www/sync/startmasteroneCODE "+use);
	});
}

receiver.on('/startslave', function () {
console.log('start player as slave');
exec("/var/www/sync/startslave");
});



//# Imageplayer

receiver.on('/image', function () {
console.log('start imageplayer');
exec("/var/www/sync/startimage > /dev/null &");
});

receiver.on('/stopimage', function () {
console.log('Stop ImagePlayer');
exec("sudo killall fbi");
});

receiver.on('/imageusb', function () {
console.log('Imageplayer from USB');
exec("sudo /var/www/sync/startimageusb");
});

receiver.on('/imagemanual', function () {
console.log('Start Manual Imageplayer');
exec("sudo /var/www/sync/startimagemanual");
});

receiver.on('/overlay', function () {
console.log('Start .png Overlay');
exec("sudo /var/www/sync/overlay");
});

receiver.on('/stopoverlay', function () {
console.log('Stop .png Overlay');
//exec("sudo killall -9 /home/pi/raspidmx/pngview/./pngview");
exec("sudo /var/www/sync/overlaystop");
});

//# PDF Player

receiver.on('/startpdf', function () {
console.log('Start PDF Player');
exec("sudo /var/www/sync/startpdf > /dev/null &");
});

receiver.on('/startpdfusb', function () {
console.log('Start PDF USB Player');
exec("sudo /var/www/sync/startpdfusb > /dev/null &");
});

//# Audio Player(s)

receiver.on('/startaudio', function () {
console.log('Start Audio Player');
exec("sudo /var/www/sync/startaudio");
});

receiver.on('/startaudioslave', function () {
console.log('Start Audio Player Slave');
exec("sudo /var/www/sync/startaudioslave");
});

receiver.on('/startaudiousb', function () {
console.log('Start audio player in USB mode');
exec("sudo /var/www/sync/startaudiousb");
});

receiver.on('/stopaudio', function () {
console.log('Stop audio player only');
exec("sudo killall -9 mpg321");
});

//# Projector Control

receiver.on('/beameron', function () {
console.log('turn Projector on');
exec("/var/www/sync/beameron");
});

receiver.on('/beameroff', function () {
console.log('turn Projector off');
exec("/var/www/sync/beameroff");
});

//# Custom Script Control

receiver.on('/customfunction1', function () {
console.log('Start All Cameras');
exec("/var/www/sync/customfunction1");
});

receiver.on('/customfunction2', function () {
console.log('Ready All Video Players');
exec("/var/www/sync/customfunction2");
});

//# Pi Camera settings

receiver.on('/disablecamera', function () {
console.log('Disable Pi Camera, please Reboot');
exec("sudo sed -ri 's/^start_x=.+$/start_x=0/' /boot/config.txt");
});
//# enables camera in boot.config
receiver.on('/enablecamera', function () {
console.log('Enable Pi Camera, please Reboot');
exec("sudo sed -ri 's/^start_x=.+$/start_x=1/' /boot/config.txt");
});

receiver.on('/camera', function () {
console.log('Running Camerafeed');
exec("/var/www/sync/camerafeed");
});

//# Must Enable Pi camera and reboot before trying CamFX
//# CamFX

receiver.on('/cameranone', function () {
console.log('NoFX Camera feed');
exec("sudo sed -ri 's/^EFX=.+$/EFX=none/' /var/www/sync/camerafeed");
});

receiver.on('/cameragpen', function () {
console.log('gPen CamFX');
exec("sudo sed -ri 's/^EFX=.+$/EFX=gpen/' /var/www/sync/camerafeed");
});

receiver.on('/camerasketch', function () {
console.log('Sketch CamFX');
exec("sudo sed -ri 's/^EFX=.+$/EFX=sketch/' /var/www/sync/camerafeed");
});

receiver.on('/cameraemboss', function () {
console.log('Emboss CamFX');
exec("sudo sed -ri 's/^EFX=.+$/EFX=emboss/' /var/www/sync/camerafeed");
});

receiver.on('/camerahatch', function () {
console.log('Hatch CamFX');
exec("sudo sed -ri 's/^EFX=.+$/EFX=hatch/' /var/www/sync/camerafeed");
});

// * add Mapping controls

//# Softedge settings

receiver.on('/softedge100h', function () {
console.log('Softedge 100px Horizonal');
exec("sudo /var/www/sync/softedge100h");
});

receiver.on('/softedge200h', function () {
console.log('Softedge 200px Horizonal');
exec("sudo /var/www/sync/softedge200h");
});

receiver.on('/softedge100v', function () {
console.log('Softedge 100px Vertical');
exec("sudo /var/www/sync/softedge100v");
});

receiver.on('/softedge200v', function () {
console.log('Softedge 200px Vertical');
exec("sudo /var/www/sync/softedge200v");
});

// Syphon Receiver On/OFF

receiver.on('/tcpsserver', function () {
console.log('re/start TCPSyphon Receiver');
exec("/var/www/sync/tcpsserver");
});

// NDI Send / Receive

receiver.on('/ndireceiver', function () {
console.log('NDI Receiver');
exec('sudo /home/pi/NDI_SDK/examples/C++/NDIlib_Find/./NDIlib_Find');
});

receiver.on('/ndisend', function () {
console.log('NDI Sender');
exec('sudo /home/pi/NDI_SDK/examples/C++/NDIlib_Send_Video/./NDIlib_Send_Video /media/internal/video/* &');
});

//# Pi Wall

receiver.on('/piwallmaster', function () {
console.log('PiWall Master');
exec("sudo /var/www/sync/piwall_masteronly > /dev/null &");
});

receiver.on('/piwallloop', function () {
console.log('PiWall Master Loop');
exec("sudo /var/www/sync/piwall_master > /dev/null &");
});

//# (maybe) Pi Wall Advanced Functions

// this here i do not really know what for its stands..
receiver.on('message', function() {
  // handle all messages
  var address = arguments[0];
  var args = Array.prototype.slice.call(arguments, 1);
});
