// This should be placed in /home/pi/osc/osc_control.js to work with webCP
// or execute through via terminal 'node osc_control.js'

var util = require('util')
var exec = require('child_process').exec;
var OscReceiver = require('osc-receiver')
  , receiver = new OscReceiver();

// here you can define the OSC port number

receiver.bind(9876);

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
// * add set Audio Output and Testtone section
// * (maybe) add Display adjustment section (requires, new TouchOSC tab)
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

//# Display adjustments section (*requires, new TouchOSC tab)

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
exec("/var/www/sync/startmaster");
});

receiver.on('/startmaster01', function () {
console.log('start seamless video_01 loop');
exec("/var/www/sync/startmaster01");
});

receiver.on('/startmaster02', function () {
console.log('start seamless video_02 loop');
exec("/var/www/sync/startmaster02");
});

receiver.on('/startmaster03', function () {
console.log('start seamless video_03 loop');
exec("/var/www/sync/startmaster03");
});

receiver.on('/startmaster04', function () {
console.log('start seamless video_04 loop');
exec("/var/www/sync/startmaster04");
});

receiver.on('/startmaster05', function () {
console.log('start seamless video_05 loop');
exec("/var/www/sync/startmaster05");
});

receiver.on('/startmaster06', function () {
console.log('start seamless video_06 loop');
exec("/var/www/sync/startmaster06");
});

receiver.on('/startmaster07', function () {
console.log('start seamless video_07 loop');
exec("/var/www/sync/startmaster07");
});

receiver.on('/startmaster08', function () {
console.log('start seamless video_08 loop');
exec("/var/www/sync/startmaster08");
});

receiver.on('/startmaster09', function () {
console.log('start seamless video_09 loop');
exec("/var/www/sync/startmaster09");
});

receiver.on('/startmaster10', function () {
console.log('start seamless video_10 loop');
exec("/var/www/sync/startmaster10");
});

receiver.on('/startmaster11', function () {
console.log('start seamless video_11 loop');
exec("/var/www/sync/startmaster11");
});

receiver.on('/startmaster12', function () {
console.log('start seamless video_12 loop');
exec("/var/www/sync/startmaster12");
});

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

// Syphon Receiver On/OFF

receiver.on('/tcpsserver', function () {
console.log('re/start TCPSyphon Reciver');
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
