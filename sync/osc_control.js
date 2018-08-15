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

//# Global commands

receiver.on('/stopall', function () {
console.log('stopp every task');
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



//# Video Control Section

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

receiver.on('/pause', function () {
console.log('pause videoplayer');
exec("/var/www/sync/dbuscontrol.sh pause > /dev/null 2>&1");
});

receiver.on('/fastforward', function () {
console.log('seek 10s forward videoplayer');
exec("/var/www/sync/dbuscontrol.sh seek 10000000");
});



//# Imageplayer

receiver.on('/image', function () {
console.log('start imageplayer');
exec("/var/www/sync/startimage > /dev/null &");
});



//# Overlay (Imageplayer)

receiver.on('/overlay', function () {
console.log('start png overlay');
exec("/var/www/sync/overlay");
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

// this here i do not really know what for its stands..
receiver.on('message', function() {
  // handle all messages
  var address = arguments[0];
  var args = Array.prototype.slice.call(arguments, 1);
});
