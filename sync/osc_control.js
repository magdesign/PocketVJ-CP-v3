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
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterusb");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster12");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster13");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster14");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster15");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmaster16");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startmasterone12");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startseamless");
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudio");
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudioslave");
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o hdmi/' /var/www/sync/startaudiousb");
});

receiver.on('/audiojack', function () {
console.log('3.5mm Audio Jack Output');
//#exec("sudo sed -ri 's/-o [a-z]+/-o local/' /etc/rc.local");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterusb");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterusb02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster12");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster13");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster14");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster15");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmaster16");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startmasterone12");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startseamless");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startaudio");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startaudioslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o local/' /var/www/sync/startaudiousb");
});

receiver.on('/audioboth', function () {
console.log('Audio Out Both 3.5mm Jack & HDMI');
//#exec("sudo sed -ri 's/-o [a-z]+/-o both/' /etc/rc.local");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterusb");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterusb02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster12");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster13");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster14");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster15");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmaster16");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startmasterone12");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startseamless");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startaudio");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startaudioslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o both/' /var/www/sync/startaudiousb");
});

receiver.on('/audiousb', function () {
console.log('Audio Out USB device alsa:hw:1,0');
//#exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/g' /etc/rc.local");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterusb");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterusb01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterusb02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone");
//exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startslave");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster12");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster13");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster14");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster15");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmaster16");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone01");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone02");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone03");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone04");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone05");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone06");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone07");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone08");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone09");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone10");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone11");
exec("sudo sed -ri 's/-o [[:graph:]]+/-o alsa:hw:1,0/' /var/www/sync/startmasterone12");
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

receiver.on('/startmaster13', function () {
console.log('start seamless video_13 loop');
exec("/var/www/sync/startmaster13");
});

receiver.on('/startmaster14', function () {
console.log('start seamless video_14 loop');
exec("/var/www/sync/startmaster14");
});

receiver.on('/startmaster15', function () {
console.log('start seamless video_15 loop');
exec("/var/www/sync/startmaster15");
});

receiver.on('/startmaster16', function () {
console.log('start seamless video_16 loop');
exec("/var/www/sync/startmaster16");
});

receiver.on('/startmaster17', function () {
console.log('start seamless video_17 loop');
exec("/var/www/sync/startmaster17");
});

receiver.on('/startmaster18', function () {
console.log('start seamless video_18 loop');
exec("/var/www/sync/startmaster18");
});

receiver.on('/startmaster19', function () {
console.log('start seamless video_19 loop');
exec("/var/www/sync/startmaster19");
});

receiver.on('/startmaster20', function () {
console.log('start seamless video_20 loop');
exec("/var/www/sync/startmaster20");
});

receiver.on('/startmaster21', function () {
console.log('start seamless video_21 loop');
exec("/var/www/sync/startmaster21");
});

receiver.on('/startmaster22', function () {
console.log('start seamless video_22 loop');
exec("/var/www/sync/startmaster22");
});

receiver.on('/startmaster23', function () {
console.log('start seamless video_23 loop');
exec("/var/www/sync/startmaster23");
});

receiver.on('/startmaster24', function () {
console.log('start seamless video_24 loop');
exec("/var/www/sync/startmaster24");
});

receiver.on('/startmaster25', function () {
console.log('start seamless video_25 loop');
exec("/var/www/sync/startmaster25");
});

receiver.on('/startmaster26', function () {
console.log('start seamless video_26 loop');
exec("/var/www/sync/startmaster26");
});

receiver.on('/startmaster27', function () {
console.log('start seamless video_27 loop');
exec("/var/www/sync/startmaster27");
});

receiver.on('/startmaster28', function () {
console.log('start seamless video_28 loop');
exec("/var/www/sync/startmaster28");
});

receiver.on('/startmaster29', function () {
console.log('start seamless video_29 loop');
exec("/var/www/sync/startmaster29");
});

receiver.on('/startmaster30', function () {
console.log('start seamless video_30 loop');
exec("/var/www/sync/startmaster30");
});


receiver.on('/startmaster31', function () {
console.log('start seamless video_31 loop');
exec("/var/www/sync/startmaster31");
});

receiver.on('/startmaster32', function () {
console.log('start seamless video_32 loop');
exec("/var/www/sync/startmaster32");
});

receiver.on('/startmaster33', function () {
console.log('start seamless video_33 loop');
exec("/var/www/sync/startmaster33");
});

receiver.on('/startmaster34', function () {
console.log('start seamless video_34 loop');
exec("/var/www/sync/startmaster34");
});

receiver.on('/startmaster35', function () {
console.log('start seamless video_35 loop');
exec("/var/www/sync/startmaster35");
});

receiver.on('/startmaster36', function () {
console.log('start seamless video_36 loop');
exec("/var/www/sync/startmaster36");
});

receiver.on('/startmaster37', function () {
console.log('start seamless video_37 loop');
exec("/var/www/sync/startmaster37");
});

receiver.on('/startmaster38', function () {
console.log('start seamless video_38 loop');
exec("/var/www/sync/startmaster38");
});

receiver.on('/startmaster39', function () {
console.log('start seamless video_39 loop');
exec("/var/www/sync/startmaster39");
});

receiver.on('/startmaster40', function () {
console.log('start seamless video_40 loop');
exec("/var/www/sync/startmaster40");
});

receiver.on('/startmaster41', function () {
console.log('start seamless video_41 loop');
exec("/var/www/sync/startmaster41");
});

receiver.on('/startmaster42', function () {
console.log('start seamless video_42 loop');
exec("/var/www/sync/startmaster42");
});

receiver.on('/startmaster43', function () {
console.log('start seamless video_43 loop');
exec("/var/www/sync/startmaster43");
});

receiver.on('/startmaster44', function () {
console.log('start seamless video_44 loop');
exec("/var/www/sync/startmaster44");
});

receiver.on('/startmaster45', function () {
console.log('start seamless video_45 loop');
exec("/var/www/sync/startmaster45");
});

receiver.on('/startmaster46', function () {
console.log('start seamless video_46 loop');
exec("/var/www/sync/startmaster46");
});

receiver.on('/startmaster47', function () {
console.log('start seamless video_47 loop');
exec("/var/www/sync/startmaster47");
});

receiver.on('/startmaster48', function () {
console.log('start seamless video_48 loop');
exec("/var/www/sync/startmaster48");
});

receiver.on('/startmaster49', function () {
console.log('start seamless video_49 loop');
exec("/var/www/sync/startmaster49");
});

receiver.on('/startmaster50', function () {
console.log('start seamless video_50 loop');
exec("/var/www/sync/startmaster50");
});

receiver.on('/startmaster51', function () {
console.log('start seamless video_51 loop');
exec("/var/www/sync/startmaster51");
});

receiver.on('/startmaster52', function () {
console.log('start seamless video_52 loop');
exec("/var/www/sync/startmaster52");
});

receiver.on('/startmaster53', function () {
console.log('start seamless video_53 loop');
exec("/var/www/sync/startmaster53");
});

receiver.on('/startmaster54', function () {
console.log('start seamless video_54 loop');
exec("/var/www/sync/startmaster54");
});

receiver.on('/startmaster55', function () {
console.log('start seamless video_55 loop');
exec("/var/www/sync/startmaster55");
});

receiver.on('/startmaster56', function () {
console.log('start seamless video_56 loop');
exec("/var/www/sync/startmaster56");
});

receiver.on('/startmaster57', function () {
console.log('start seamless video_57 loop');
exec("/var/www/sync/startmaster57");
});

receiver.on('/startmaster58', function () {
console.log('start seamless video_58 loop');
exec("/var/www/sync/startmaster58");
});

receiver.on('/startmaster59', function () {
console.log('start seamless video_59 loop');
exec("/var/www/sync/startmaster59");
});

receiver.on('/startmaster60', function () {
console.log('start seamless video_60 loop');
exec("/var/www/sync/startmaster60");
});

receiver.on('/startmaster61', function () {
console.log('start seamless video_61 loop');
exec("/var/www/sync/startmaster61");
});

receiver.on('/startmaster62', function () {
console.log('start seamless video_62 loop');
exec("/var/www/sync/startmaster62");
});

receiver.on('/startmaster63', function () {
console.log('start seamless video_63 loop');
exec("/var/www/sync/startmaster63");
});

receiver.on('/startmaster64', function () {
console.log('start seamless video_64 loop');
exec("/var/www/sync/startmaster64");
});

receiver.on('/startmaster65', function () {
console.log('start seamless video_65 loop');
exec("/var/www/sync/startmaster65");
});

receiver.on('/startmaster66', function () {
console.log('start seamless video_66 loop');
exec("/var/www/sync/startmaster66");
});

receiver.on('/startmaster67', function () {
console.log('start seamless video_67 loop');
exec("/var/www/sync/startmaster67");
});

receiver.on('/startmaster68', function () {
console.log('start seamless video_68 loop');
exec("/var/www/sync/startmaster68");
});

receiver.on('/startmaster69', function () {
console.log('start seamless video_69 loop');
exec("/var/www/sync/startmaster69");
});

receiver.on('/startmaster70', function () {
console.log('start seamless video_70 loop');
exec("/var/www/sync/startmaster70");
});

receiver.on('/startmaster71', function () {
console.log('start seamless video_71 loop');
exec("/var/www/sync/startmaster71");
});

receiver.on('/startmaster72', function () {
console.log('start seamless video_72 loop');
exec("/var/www/sync/startmaster72");
});

receiver.on('/startmaster73', function () {
console.log('start seamless video_73 loop');
exec("/var/www/sync/startmaster73");
});

receiver.on('/startmaster74', function () {
console.log('start seamless video_74 loop');
exec("/var/www/sync/startmaster74");
});

receiver.on('/startmaster75', function () {
console.log('start seamless video_75 loop');
exec("/var/www/sync/startmaster75");
});

receiver.on('/startmaster76', function () {
console.log('start seamless video_76 loop');
exec("/var/www/sync/startmaster76");
});

receiver.on('/startmaster77', function () {
console.log('start seamless video_77 loop');
exec("/var/www/sync/startmaster77");
});

receiver.on('/startmaster78', function () {
console.log('start seamless video_78 loop');
exec("/var/www/sync/startmaster78");
});

receiver.on('/startmaster79', function () {
console.log('start seamless video_79 loop');
exec("/var/www/sync/startmaster79");
});

receiver.on('/startmaster80', function () {
console.log('start seamless video_80 loop');
exec("/var/www/sync/startmaster80");
});

receiver.on('/startmaster81', function () {
console.log('start seamless video_81 loop');
exec("/var/www/sync/startmaster81");
});

receiver.on('/startmaster82', function () {
console.log('start seamless video_82 loop');
exec("/var/www/sync/startmaster82");
});

receiver.on('/startmaster83', function () {
console.log('start seamless video_83 loop');
exec("/var/www/sync/startmaster83");
});

receiver.on('/startmaster84', function () {
console.log('start seamless video_84 loop');
exec("/var/www/sync/startmaster84");
});

receiver.on('/startmaster85', function () {
console.log('start seamless video_85 loop');
exec("/var/www/sync/startmaster85");
});

receiver.on('/startmaster86', function () {
console.log('start seamless video_86 loop');
exec("/var/www/sync/startmaster86");
});

receiver.on('/startmaster87', function () {
console.log('start seamless video_87 loop');
exec("/var/www/sync/startmaster87");
});

receiver.on('/startmaster88', function () {
console.log('start seamless video_88 loop');
exec("/var/www/sync/startmaster88");
});

receiver.on('/startmaster89', function () {
console.log('start seamless video_89 loop');
exec("/var/www/sync/startmaster89");
});

receiver.on('/startmaster90', function () {
console.log('start seamless video_90 loop');
exec("/var/www/sync/startmaster90");
});

receiver.on('/startmaster91', function () {
console.log('start seamless video_91 loop');
exec("/var/www/sync/startmaster91");
});

receiver.on('/startmaster92', function () {
console.log('start seamless video_92 loop');
exec("/var/www/sync/startmaster92");
});

receiver.on('/startmaster93', function () {
console.log('start seamless video_93 loop');
exec("/var/www/sync/startmaster93");
});

receiver.on('/startmaster94', function () {
console.log('start seamless video_94 loop');
exec("/var/www/sync/startmaster94");
});

receiver.on('/startmaster95', function () {
console.log('start seamless video_95 loop');
exec("/var/www/sync/startmaster95");
});

receiver.on('/startmaster96', function () {
console.log('start seamless video_96 loop');
exec("/var/www/sync/startmaster96");
});

receiver.on('/startmaster97', function () {
console.log('start seamless video_97 loop');
exec("/var/www/sync/startmaster97");
});

receiver.on('/startmaster98', function () {
console.log('start seamless video_98 loop');
exec("/var/www/sync/startmaster98");
});

receiver.on('/startmaster99', function () {
console.log('start seamless video_99 loop');
exec("/var/www/sync/startmaster99");
});

receiver.on('/startslave', function () {
console.log('start player as slave');
exec("/var/www/sync/startslave");
});



//# Video Control Section play only once

receiver.on('/startmasteronce01', function () {
console.log('start video_01 once');
exec("/var/www/sync/startmasterone01");
});

receiver.on('/startmasteronce02', function () {
console.log('start video_02 once');
exec("/var/www/sync/startmasterone02");
});

receiver.on('/startmasteronce03', function () {
console.log('start video_03 once');
exec("/var/www/sync/startmasterone03");
});

receiver.on('/startmasteronce04', function () {
console.log('start video_04 once');
exec("/var/www/sync/startmasterone04");
});

receiver.on('/startmasteronce05', function () {
console.log('start video_05 once');
exec("/var/www/sync/startmasterone05");
});

receiver.on('/startmasteronce06', function () {
console.log('start video_06 once');
exec("/var/www/sync/startmasterone06");
});

receiver.on('/startmasteronce07', function () {
console.log('start video_07 once');
exec("/var/www/sync/startmasterone07");
});

receiver.on('/startmasteronce08', function () {
console.log('start video_08 once');
exec("/var/www/sync/startmasterone08");
});

receiver.on('/startmasteronce09', function () {
console.log('start video_09 once');
exec("/var/www/sync/startmasterone09");
});

receiver.on('/startmasteronce10', function () {
console.log('start video_10 once');
exec("/var/www/sync/startmasterone10");
});

receiver.on('/startmasteronce11', function () {
console.log('start video_11 once');
exec("/var/www/sync/startmasterone11");
});

receiver.on('/startmasteronce12', function () {
console.log('start video_12 once');
exec("/var/www/sync/startmasterone12");
});

receiver.on('/startmasteronce13', function () {
console.log('start video_13 once');
exec("/var/www/sync/startmasterone13");
});

receiver.on('/startmasteronce14', function () {
console.log('start video_14 once');
exec("/var/www/sync/startmasterone14");
});

receiver.on('/startmasteronce15', function () {
console.log('start video_15 once');
exec("/var/www/sync/startmasterone15");
});

receiver.on('/startmasteronce16', function () {
console.log('start video_16 once');
exec("/var/www/sync/startmasterone16");
});

receiver.on('/startmasteronce17', function () {
console.log('start video_17 once');
exec("/var/www/sync/startmasterone17");
});

receiver.on('/startmasteronce18', function () {
console.log('start video_18 once');
exec("/var/www/sync/startmasterone18");
});

receiver.on('/startmasteronce19', function () {
console.log('start video_19 once');
exec("/var/www/sync/startmasterone19");
});

receiver.on('/startmasteronce20', function () {
console.log('start video_20 once');
exec("/var/www/sync/startmasterone20");
});

receiver.on('/startmasteronce21', function () {
console.log('start video_21 once');
exec("/var/www/sync/startmasterone21");
});

receiver.on('/startmasteronce22', function () {
console.log('start video_22 once');
exec("/var/www/sync/startmasterone22");
});

receiver.on('/startmasteronce23', function () {
console.log('start video_23 once');
exec("/var/www/sync/startmasterone23");
});

receiver.on('/startmasteronce24', function () {
console.log('start video_24 once');
exec("/var/www/sync/startmasterone24");
});

receiver.on('/startmasteronce25', function () {
console.log('start video_25 once');
exec("/var/www/sync/startmasterone25");
});

receiver.on('/startmasteronce26', function () {
console.log('start video_26 once');
exec("/var/www/sync/startmasterone26");
});

receiver.on('/startmasteronce27', function () {
console.log('start video_27 once');
exec("/var/www/sync/startmasterone27");
});

receiver.on('/startmasteronce28', function () {
console.log('start video_28 once');
exec("/var/www/sync/startmasterone28");
});

receiver.on('/startmasteronce29', function () {
console.log('start video_29 once');
exec("/var/www/sync/startmasterone29");
});

receiver.on('/startmasteronce30', function () {
console.log('start video_30 once');
exec("/var/www/sync/startmasterone30");
});

receiver.on('/startmasteronce31', function () {
console.log('start video_31 once');
exec("/var/www/sync/startmasterone31");
});

receiver.on('/startmasteronce32', function () {
console.log('start video_32 once');
exec("/var/www/sync/startmasterone32");
});

receiver.on('/startmasteronce33', function () {
console.log('start video_33 once');
exec("/var/www/sync/startmasterone33");
});

receiver.on('/startmasteronce34', function () {
console.log('start video_34 once');
exec("/var/www/sync/startmasterone34");
});

receiver.on('/startmasteronce35', function () {
console.log('start video_35 once');
exec("/var/www/sync/startmasterone35");
});

receiver.on('/startmasteronce36', function () {
console.log('start video_36 once');
exec("/var/www/sync/startmasterone36");
});

receiver.on('/startmasteronce37', function () {
console.log('start video_37 once');
exec("/var/www/sync/startmasterone37");
});

receiver.on('/startmasteronce38', function () {
console.log('start video_38 once');
exec("/var/www/sync/startmasterone38");
});

receiver.on('/startmasteronce39', function () {
console.log('start video_39 once');
exec("/var/www/sync/startmasterone39");
});

receiver.on('/startmasteronce40', function () {
console.log('start video_40 once');
exec("/var/www/sync/startmasterone40");
});

receiver.on('/startmasteronce41', function () {
console.log('start video_41 once');
exec("/var/www/sync/startmasterone41");
});

receiver.on('/startmasteronce42', function () {
console.log('start video_42 once');
exec("/var/www/sync/startmasterone42");
});

receiver.on('/startmasteronce43', function () {
console.log('start video_43 once');
exec("/var/www/sync/startmasterone43");
});

receiver.on('/startmasteronce44', function () {
console.log('start video_44 once');
exec("/var/www/sync/startmasterone44");
});

receiver.on('/startmasteronce45', function () {
console.log('start video_45 once');
exec("/var/www/sync/startmasterone45");
});

receiver.on('/startmasteronce46', function () {
console.log('start video_46 once');
exec("/var/www/sync/startmasterone46");
});

receiver.on('/startmasteronce47', function () {
console.log('start video_47 once');
exec("/var/www/sync/startmasterone47");
});

receiver.on('/startmasteronce48', function () {
console.log('start video_48 once');
exec("/var/www/sync/startmasterone48");
});

receiver.on('/startmasteronce49', function () {
console.log('start video_49 once');
exec("/var/www/sync/startmasterone49");
});

receiver.on('/startmasteronce50', function () {
console.log('start video_50 once');
exec("/var/www/sync/startmasterone50");
});

receiver.on('/startmasteronce51', function () {
console.log('start video_51 once');
exec("/var/www/sync/startmasterone51");
});

receiver.on('/startmasteronce52', function () {
console.log('start video_52 once');
exec("/var/www/sync/startmasterone52");
});

receiver.on('/startmasteronce53', function () {
console.log('start video_53 once');
exec("/var/www/sync/startmasterone53");
});

receiver.on('/startmasteronce54', function () {
console.log('start video_54 once');
exec("/var/www/sync/startmasterone54");
});

receiver.on('/startmasteronce55', function () {
console.log('start video_55 once');
exec("/var/www/sync/startmasterone55");
});

receiver.on('/startmasteronce56', function () {
console.log('start video_56 once');
exec("/var/www/sync/startmasterone56");
});

receiver.on('/startmasteronce57', function () {
console.log('start video_57 once');
exec("/var/www/sync/startmasterone57");
});

receiver.on('/startmasteronce58', function () {
console.log('start video_58 once');
exec("/var/www/sync/startmasterone58");
});

receiver.on('/startmasteronce59', function () {
console.log('start video_59 once');
exec("/var/www/sync/startmasterone59");
});

receiver.on('/startmasteronce60', function () {
console.log('start video_60 once');
exec("/var/www/sync/startmasterone60");
});

receiver.on('/startmasteronce61', function () {
console.log('start video_61 once');
exec("/var/www/sync/startmasterone61");
});

receiver.on('/startmasteronce62', function () {
console.log('start video_62 once');
exec("/var/www/sync/startmasterone62");
});

receiver.on('/startmasteronce63', function () {
console.log('start video_63 once');
exec("/var/www/sync/startmasterone63");
});

receiver.on('/startmasteronce64', function () {
console.log('start video_64 once');
exec("/var/www/sync/startmasterone64");
});

receiver.on('/startmasteronce65', function () {
console.log('start video_65 once');
exec("/var/www/sync/startmasterone65");
});

receiver.on('/startmasteronce66', function () {
console.log('start video_66 once');
exec("/var/www/sync/startmasterone66");
});

receiver.on('/startmasteronce67', function () {
console.log('start video_67 once');
exec("/var/www/sync/startmasterone67");
});

receiver.on('/startmasteronce68', function () {
console.log('start video_68 once');
exec("/var/www/sync/startmasterone68");
});

receiver.on('/startmasteronce69', function () {
console.log('start video_69 once');
exec("/var/www/sync/startmasterone69");
});

receiver.on('/startmasteronce70', function () {
console.log('start video_70 once');
exec("/var/www/sync/startmasterone70");
});

receiver.on('/startmasteronce71', function () {
console.log('start video_71 once');
exec("/var/www/sync/startmasterone71");
});

receiver.on('/startmasteronce72', function () {
console.log('start video_72 once');
exec("/var/www/sync/startmasterone72");
});

receiver.on('/startmasteronce73', function () {
console.log('start video_73 once');
exec("/var/www/sync/startmasterone73");
});

receiver.on('/startmasteronce74', function () {
console.log('start video_74 once');
exec("/var/www/sync/startmasterone74");
});

receiver.on('/startmasteronce75', function () {
console.log('start video_75 once');
exec("/var/www/sync/startmasterone75");
});

receiver.on('/startmasteronce76', function () {
console.log('start video_76 once');
exec("/var/www/sync/startmasterone76");
});

receiver.on('/startmasteronce77', function () {
console.log('start video_77 once');
exec("/var/www/sync/startmasterone77");
});

receiver.on('/startmasteronce78', function () {
console.log('start video_78 once');
exec("/var/www/sync/startmasterone78");
});

receiver.on('/startmasteronce79', function () {
console.log('start video_79 once');
exec("/var/www/sync/startmasterone79");
});

receiver.on('/startmasteronce80', function () {
console.log('start video_80 once');
exec("/var/www/sync/startmasterone80");
});

receiver.on('/startmasteronce81', function () {
console.log('start video_81 once');
exec("/var/www/sync/startmasterone81");
});

receiver.on('/startmasteronce82', function () {
console.log('start video_82 once');
exec("/var/www/sync/startmasterone82");
});

receiver.on('/startmasteronce83', function () {
console.log('start video_83 once');
exec("/var/www/sync/startmasterone83");
});

receiver.on('/startmasteronce84', function () {
console.log('start video_84 once');
exec("/var/www/sync/startmasterone84");
});

receiver.on('/startmasteronce85', function () {
console.log('start video_85 once');
exec("/var/www/sync/startmasterone85");
});

receiver.on('/startmasteronce86', function () {
console.log('start video_86 once');
exec("/var/www/sync/startmasterone86");
});

receiver.on('/startmasteronce87', function () {
console.log('start video_87 once');
exec("/var/www/sync/startmasterone87");
});

receiver.on('/startmasteronce88', function () {
console.log('start video_88 once');
exec("/var/www/sync/startmasterone88");
});

receiver.on('/startmasteronce89', function () {
console.log('start video_89 once');
exec("/var/www/sync/startmasterone89");
});

receiver.on('/startmasteronce90', function () {
console.log('start video_90 once');
exec("/var/www/sync/startmasterone90");
});

receiver.on('/startmasteronce91', function () {
console.log('start video_91 once');
exec("/var/www/sync/startmasterone91");
});

receiver.on('/startmasteronce92', function () {
console.log('start video_92 once');
exec("/var/www/sync/startmasterone92");
});

receiver.on('/startmasteronce93', function () {
console.log('start video_93 once');
exec("/var/www/sync/startmasterone93");
});

receiver.on('/startmasteronce94', function () {
console.log('start video_94 once');
exec("/var/www/sync/startmasterone94");
});

receiver.on('/startmasteronce95', function () {
console.log('start video_95 once');
exec("/var/www/sync/startmasterone95");
});

receiver.on('/startmasteronce96', function () {
console.log('start video_96 once');
exec("/var/www/sync/startmasterone96");
});

receiver.on('/startmasteronce97', function () {
console.log('start video_97 once');
exec("/var/www/sync/startmasterone97");
});

receiver.on('/startmasteronce98', function () {
console.log('start video_98 once');
exec("/var/www/sync/startmasterone98");
});

receiver.on('/startmasteronce99', function () {
console.log('start video_99 once');
exec("/var/www/sync/startmasterone99");
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
