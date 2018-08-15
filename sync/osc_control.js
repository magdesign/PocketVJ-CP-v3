var util = require('util')
var exec = require('child_process').exec;
var OscReceiver = require('osc-receiver')
  , receiver = new OscReceiver();

// here you can define the OSC port number

receiver.bind(9337);

// here are all the commands listed which can be executed via OSC

receiver.on('/testscreen', function () {
console.log('activate testscreen');
exec("/var/www/sync/testscreen");

});





// this here i do not really know what for its stands..


receiver.on('message', function() {
  // handle all messages
  var address = arguments[0];
  var args = Array.prototype.slice.call(arguments, 1);
});
