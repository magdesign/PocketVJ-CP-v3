# OSC Commands for PocketVJ

You can change these values and commands in **/sync/osc_control.js**

<u>Osc Receiving port: **9876**</u>

-----

**//# Global commands**

`/stopall`

- Stop every task

`/testscreen`

- Activate test screen

`/testscreenoff`

- Test screen off

`/shutdown`

- Shutdown PocketVJ

`/reboot`

- Reboots PocketVJ

`/rebootall`

- Reboots all PocketVJ's identified in sync/rebootall/ with default IP address, 192.168.1.101, 102, 103, ...., 107.  Will Reboot current PVJ despite correct IP address.

`/shutdownall`

- Similar to reboot all, but will shutdown all PocketVJ's with default IP addresses. (192.168.1.101, 102, 103, ...., 107)



**//#  Audio Output and Testtone section**

`/testtone`

- Plays audio test tone

`/testtoneright`

- Plays test tone in right only

`/testtoneleft`

- Plays test tone in left only

`/volumeup`

- Adjusts volume up

`/volumedown`

- Adjusts volume down

`/audiohdmiout`

- Sets audio to use HDMI port

`/audiojack`

- Sets audio to use 3.5mm Jack port

`/audioboth`

- Sets audio to use both HDMI and 3.5mm ports

`/audiousb`

- Sets audio to use USB / or PiHat device. Sets also values to alsa:hw:1,0 



**//# Display adjustments**

`/rotate0`

- Sets screen rotation to normal

`/rotate90`

- Rotates screen 90 degrees

`/rotate180`

- Rotates screen 180 degrees

`/rotate270`

- Rotates screen 270 degrees

`/fliph`

- Flips screen Horizontally

`/flipv`

- Flips screen Vertically



**//# Clock Display and color Changes**

`/clockdisplay`

- Displays clock on screen

`/clockred`

- Changes clock color to Red

`/clockgreen`

- Changes clock color to Green

`/clockorange`

- Changes clock color to Orange

`/clockpink`

- Changes clock color to Pink



**//# Video Control Section**

`/pause`

- Pauses current video

`/fastforward`

- Skips forward 10 frames of current video

`/stopvideo`

- Stops current video only

`/startmaster`

- Starts master video player loop

`/startmaster01`

- Plays Video 1 from Master (Slaves will follow)

`/startmaster02`

- Plays Video 2

`/startmaster03`

- Plays Video 3

`/startmaster04`

- Plays Video 4

`/startmaster05`

- Plays Video 5

`/startmaster06`

- Plays Video 6

`/startmaster07`

- Plays Video 7

`/startmaster08`

- Plays Video 8

`/startmaster09`

- Plays Video 9

`/startmaster10`

- Plays Video 10

`/startmaster11`

- Plays Video 11

`/startmaster12`

- Plays Video 12

`/startslave`

- Sets 'this' device to slave (will wait for Master video to begin)



**//# Imageplayer**

`/image`

- Starts image player

`/stopimage`

- Stops Image player

`/imageusb`

- Image player from USB

`/imagemanual`

- Starts manual image player

`/overlay`

- Start .png Overlay

`/stopoverlay`

- Stops .png Overlay



**//# PDF Player**

`/startpdf`

- Starts PDF Player

`/startpdfusb`

- Starts PDF from USB player



**//# Audio Player(s)**

`/startaudio`

- Starts audio player

`/startaudioslave`

- Sets 'this' device as audio slave

`/startaudiousb`

- Starts the audio player in USB mode

`/stopaudio`

- Stops the audio player



**//# Projector Control**

`/beameron`

- Turns the projector on (see PVJ manual for how to control over RJ45)

`/beameroff`

- Turns the projector off



**//# Custom Script Control**

	**Note: This section is for custom scripts.  These commands below are for their default functions. Scripts can be changed here* `/sync/customfunction1 & /sync/customfunction2`



`/custom1`

- Starts all Pi Cameras on default IP address, 192.168.1.101, 102, 103, ...., 107.  

`/custom2`

- Ready's all video players on default IP's 101, 102, 103, ...., 107.  for Master video to begin. Kills all other running processes



**//# Pi Camera settings**

`/disablecamera`

- Disables the Pi Camera, must reboot to see changes.

`/enablecamera`

- Enables the Pi Camera, must reboot to see changes

`/camera`

- Starts the live Pi Camera feed, ^ The camera must be enabled first.

`/cameranone`

- Sets the Camera FX to none / default

`/cameragpen`

- Sets gPen Camera FX

`/camerasketch`

- Sets Sketch Camera FX

`/cameraemboss`

- Sets Emboss Camera FX

`/camerahatch`

- Sets Hatch Camera FX



**//# Softedge settings**

`/softedge100h`

- Horizontal Softedge 100px

`/softedge200h`

- Horizontal Softedge 200px

`/softedge100v`

- Vertical Softedge 100px

`/softedge200v`

- Vertical Softedge 200px



**// Syphon Receiver On/OFF**

`/tcpsserver`

- (Re)start TCP Syphon Receiver 



**// NDI Send / Receive**

`/ndireceiver`

- Starts NDI Receiver 

`/ndisend`

- Starts NDI sender



**//# Pi Wall**

`/piwallmaster`

- Starts pi wall Master

`/piwallloop`

- Starts pi wall Master loop



written by Cornelius Henke III a.k.a. ProjectileObjects
