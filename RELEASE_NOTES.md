# PocketVJ 3.x Control Panel


## CP 2.4.0f 31.October 2018<br />
fixed autostart to processing <br />
added startmaster and startmasteronce to OSC, up to 99 movies, Thanks to François Malnovic for contributing!  <br />



## CP 2.4.0e 05.October 2018<br />
fixed mapper: add/remove row and add/remove clumn


## CP 2.4.0d 24.September 2018<br />

added /screenon and /screenoff to OSC <br />

## CP 2.4.0c 12.September 2018<br />
added more startmaster_0x scripts to OSC, now up to 69 movies <br />
added startmasteronce to OSC, up to 69 movies  <br />
Thanks to François Malnovic for contributing!  <br />

## CP 2.4.0b 30.August 2018<br />
added autostart to OSC when hitting autostart to scheduler <br />

## CP 2.4.0a 19.August 2018<br />
merged pull request from ProjectileObjects <br />
More OSC commands added <br />
better documentation on how to update older PVJ versions <br />

## CP 2.4.0 15.August 2018<br />
added full OSC support (only working on PVJ's 3.6 (and newer) released from today on)<br />
if you bought your PVJ 3.6 before August 15th, you need to: npm install osc-receiver<br />

## CP 2.3.9b 07.August 2018<br />
added pre alpha of magmapper to autostart custom1 buttom (only working on image 3.6 and newer)

## Image 3.6 07.August 2018<br />
installed Chromium browser<br />
installed node.js (for OSC support)<br />
installed npm socket.io node-omxplayer<br />
integrated webcam driver<br />
integrated neopixel driver<br />
integrated HUB75 library<br />
added htop for monitoring<br />
gif-for-cli (untested)<br />
resized root partition<br />
added cava equalizer<br />
added unclutter <br />
added file which tells pvj image build version<br />
wget installed<br />
purged glediator and xlights to free some space<br />
added new testvideo by paavo<br />

### Update 15.08.2018<br />
added osc-receiver<br />
customer how bought a PVJ3.6 before August 15, need to perform a npm install osc-receiver for OSC functionality.<br />


## CP 2.3.9a 12.July 2018<br />
fixed openOLA panel link to be a realtive url now <br />

## CP 2.3.9 11.July 2018<br />
fixed mapperupdate which removed the remote mapper <br />
added launch remote mapper button <br />
fixed autostart to superpikixpi <br />
autoforce resolution for superpikixpi to 1280x720 <br />
added kill superpikixpi to global stop command <br />
added webgui for qlcplus on port :9999 <br />

## CP 2.3.8b 25.May 2018<br />
reverted the factory preset functions which clean /tmp/ folders since it messes something up with the webserver <br />

## CP 2.3.8b 22.May 2018<br />
added delete all log files to factory preset button <br />

## CP 2.3.8a 03.May 2018<br />
Fixed google font issue... sorry guys for the trouble <br />

## CP 2.3.8 27.April 2018<br />
Fixed mapper presets to also work with mapper remote <br />
Added Mapper Cam to use picam or hdmi input board <br />
Added launch mappercam button (make sure to enable cam in aux settings) <br />
Make "Update All" 2 x to get everything installed! <br />

## CP 2.3.7 23.April 2018<br />
Added FX to Camera Livefeed <br />
Added 2 custom function buttons with custom functions <br />
Added remote mapper beta (make "Update All" 2 x to get it installed!) <br />
Get the Mapperremote beta App here: pocketvj.com/downloads/MapperRemote.zip  (OSX/Linux, win in pipeline)<br />

## Image 3.5a 18.April 2018<br />
Updated image to run on RPi3 B+ (2018) <br />

## CP 2.3.6 19.March 2018<br />
added camera live feed to work together with raspicam (thanks cornelius henke for testing) <br />

## CP 2.3.5a 16.March 2018<br />
changed memory settings in config.txt to auto allocate gpu ram <br />

## CP 2.3.5 07.March 2018<br />
added a filename fixer script/function to rename incompatible files <br />

## CP 2.3.4a 27.Februar 2018<br />
Play as Slave button was not linked, is working now<br />
Fix issue where files with high bandwidth where not playing<br />
Removed sending audio flag on slave, so sync is working perfect again<br />

## CP 2.3.4 20.Februar 2018<br />
Added Audio Testtone Left & Right<br />
Removed Update CP, since it makes sense to use only Update Everything<br />
Fixed mapping converter<br />
Added mappingconverter to Update Everything<br />
Added SuperPikixPi to Autostart (PVJ3.5 2018 version)<br />
Added SuperPikixPi to stop command<br />
Added GPU ram usage info<br />
Updated set Audio output to change all Play_0x files<br />
Added startmaster13-16 scripts to sync folder<br />
Added startmaster01-02 from usb script<br />

## CP 2.3.3a 05.Februar 2018<br />
Added clean hidden files also on usb sticks to backend.php<br />

## CP 2.3.3 04.Januar 2018<br />
Added new mapper with circular shapes and slideshow function<br />
Fallback to select older version of mapper with more performance<br />
TCPSyphon gets updated when hitting UPDATE Everything<br />
Mapping converter knob added, no function set yet, betatesting<br />
Fixed playonce06<br />
Updated omxplayer-sync script with the fixed loop option<br />

## CP 2.3.0 19.Dezember 2017<br />
Play NDI stream now streams all movies over NDI<br />
added start OLA for usb-dmx devices<br />
added QLC+ for dmx control<br />
stopall command updated to stop NDI functions <br />
Note: OLA and QLC+ must be installed by hand, is integrated in PVJ 3.5 and newer<br />
Never make an apt-get upgrade, this will mess your system!<br />

## CP 2.2.0 16.Dezember 2017<br />
Added function to sync over Wifi<br />
Click UPDATE Everything after CP update<br />
There must be a master with wifi name vj100 up and running to use this function<br />
Network adress will be 192.168.2.101 hardcoded<br />

### Known Bugs: <br />
  mapper launch without mouse still does not work as expected <br />
  autostart to processing is not coded yet<br />
  

## CP 2.1.0 10.Dezember 2017<br />
Added new Mapper with SlideShow function. Update mapper after CP update!<br />

## CP 2.0.2 04.Dezember 2017<br />
Implemented the webfont, removed google font link, offline issue is now fixed.

### Known Bugs: <br />
  Play_Once0x functions only work when setting to old script and updating audio to jack or hdmi (no also support) <br />
  mapper remote is slow, when hitting commands very fast and often, there is quit a delay <br />
  mapper launch without mouse still does not work as expected <br />
  autostart clock takes 30seconds until it displays<br />
  autostart to processing is not coded yet<br />

## CP 2.0.1 29.November 2017<br />
Some .js scrips where linked with http. If the device connection to CP was offline, CP did not work proper<br />
Fixed some button links <br />

## PVJ 3.4 release 27.November 2017<br />
  Updated image to version 3.4<br />
  Installed processing<br />
  Updated several libs, gstreamer, new kernel and wifi firmware<br />

## CP 2.0.0 26.November 2017<br />
  This is a massive release with a completely new look and feel :-)<br />
  
  To Update: <br />
  0. Stop all tasks<br />
  1. Download PocketVJ-CP-v3-master.zip and place it in /internal/ on your PocketVJ 3.x
  2. Update CP (wait!! until you get message, approx. 5 minutes) <br />
  3. Refresh browser, then select UPDATE Mapper (wait 5minutes)<br />
  4. If CP is not working ore behaves strange, the device you are connection to the CP has also internet access, then imidiately update to CP 2.0.1<br />
  
  
### Whats new: <br />
  Completely redesigned CP from scratch, now fully responsive :-) <br />
  CP output is now scrollable, better line breaks <br />
  CP alerts when connection to PVJ is lost <br />
  Softedge function <br />
  Moved Syphon to streamer section <br />
  Scratch of NDI implementation <br />
  Set to dhcp and set to static IP fixed  <br />
  Added more play once buttons <br />
  Added Mapping scale mask up and down<br />
  Added Autostart to loop_01 and loop02 <br />
  Added Autostart to Clock <br />
  Added Autostart to Custom2 <br />
  Cleaned up the System settings panel <br />
  Function to download files from your personal server or dropbox, ideal for scheduler tasks <br />
  Get CPU temperature <br />
  Updated License file <br />  
  Overall bugfixes <br />
  
<br />

### CP 1.14e 20.November 2017<br />
  fixed an issue when 2x clicked to set DHCP <br />

### CP 1.14d 04.October 2017<br />
  added new build of omxplayer when hitting Update Firmware in System Tab (only recommended if you encounter any issues) <br />

### CP 1.14c 18.September 2017<br />
  fixed force hdmi mode to get audio over hdmi, even if EDID of screen does not report compatibility <br />
  
### CP 1.14b 15.August 2017<br />
  fixed wrong link for piwall_topright, thanks to francoestrubia <br />
  updated readme (pull request from Aaron Israel, thanks!)
  
### CP 1.14a 19.Juni 2017<br />
  fixed the issue when you set network to dhcp you where not able to connect via wifi anymore<br />
  
### CP 1.14 30.April 2017<br />
  function to change between seamless and gap-list sync<br />
  added more numbered startmaser09-12<br />
  moved OSCplayer under startmaster button<br />
  
### CP 1.13b 25.April 2017<br />
  fixed the cursor blinking when nothing was running<br />
  fixed streaming page button was not linked<br />

### CP 1.13a 12.April 2017<br />
  turingmachine updated the sync script, now it automatically makes a seamless loop when only one video is in the folder and its now syncable!<br />
  Make sure that you hit "factory preset" after the update.

### CP 1.13 24.March 2017<br />
  upgraded CP for PocketVJ 3.3, now with OSC support for videoplayer<br />

### CP 1.12a 20.March 2017<br />
  fixed issue when hitting more than once to ALSA output

### CP 1.12 18.March 2017<br />
  added function to overlay transparent .png file over videos<br />
  will only work on PocketVJs bought after march 18th<br />

### CP 1.11 23.Januar 2017<br />
  updated with new functions of PVJ 3.2<br />
  if you have an older (3.0/3.1) version, audio streaming will not work<br />
  
### CP 1.10 12.Januar 2017<br />
  merged presenter and imageviewer together<br />
  added launch/relaunch mapper knobs<br />
  added an Update All function for single click update<br />
  added audio slave<br />
  changed audioplayer to omxplayer, so its possible to use usb soundcards and sync<br />
  added stopall function to mappersettings, so it does not need stop command in scheduler<br />
  

### CP 1.09a 04.Januar 2017<br />
  fixed mapper relaunch function, remote did not work after clicking relauch<br />

### CP 1.09 03.Januar 2017<br />
  added more seamless loop functions<br />

### CP 1.08 22.December 2016<br />
  New mapper version, you must do update:  system->update mapper<br />
  Redesign of Mapper section<br />
  Undo of mapper is now working<br />
  Hide/show layer panel added<br />
  Pause in shortcuts now also works for mapper<br />
  Removed Terminal link and wrote which port you can access Terminal<br />
  Fixed Status Monitor size
    
### CP 1.07b 16.December 2016<br />
  Stability improvements for loading and saving mapper presets<br />
  
### CP 1.07a 13.December 2016<br />
  Fixed Screenshot function<br />

### CP 1.07 12.December 2016<br />
  Testscreen bigger, for 1920 x 1200 resolution<br />
  Mapper presets 1-5<br />
  ALSA option for USB soundcard output (make sure to update firmware)<br />
  Updated manual for scheduler/mappersetting commands<br />
  Updated timer.txt<br />
### CP 1.06a 29.November 2016
   Mapper Update did remove path to videos and images, thanks to martani for bugreport, fixed now!<br />

### CP 1.06 24.November 2016<br />
   Added rotate screen options<br />
   removed 1920 x 1200 resolution since it caused glitches, added 1680x1050 instead<br />

### CP 1.05a 20.November 2016<br />
   Fixed: Mapper "Add Triangle" was not working<br />

### CP 1.05 18.November 2016<br />
   Added setting to use RCA (analog) video output, could not test because I dont own analog hardware, can someone please test and report back, thanks!<br />
   Improved the response time when loading CP in browser<br />

### CP 1.04 15.November 2016<br />
   Added a permanent wifi and bluetooth disable<br />
   Fixed audioplayer, did not workd because dtoverlay in config.txt was missing<br />
   Updated the timer.txt example file (make a factory preset to get it)<br />
   Added projector power on/off script which works with scheduler<br />
   
### CP 1.03b 03.November 2016<br />
   Fixed PJLink Projector remote On/Off, was missing direct file path<br />
   Fixed startmasterusb

### CP 1.03a 02.November 2016<br />
   Fixed the issue that testscreen and imageplayer did not display fullscreen<br />
   After upgrading, go to "display" and selecet "default" to update the settings

### CP 1.03 16.Oktober 2016<br />
   Updated to newest omxplayer build<br />
   Added: Autostart custom file

### CP 1.02 03.Oktober 2016<br />
   Fixed Mapper: Pause, Media Stepper, BigMoves, Relaunch<br />
   Fixed: Terminal link<br />
   Added: PiWall setting for 3screens, PiWall master loop<br />
   Added: tag description to shortcuts and link to logo<br />
   (Still trying to remote mapper without mouse)<br />

### CP 1.01 30.September 2016<br />
   Added symbols to the colored register menu for better usability<br />
   Fixed an issue with omxplayer-sync, play once played the file twice... thanks to mdmcclel for fix and pull request

### CP 1.00 12.September 2016<br />

   make sure that after updating the CP, you go to system and hit Update Firmware and Update Mapper to use all the new functions.<br />
   Be patient, updating takes several minutes!
    
    - Added seamless loop
    - Sections are now color coded
    - New Sync script and new Player
    - many new feuatures and little bugfixes
    

### CP 0.97a 15.March 2016<br />
   Added missing up down left right commands for mapper


### CP 0.97 10.March 2016<br />
   Fixed update function
   
   Updated Mapper Controls
   
   added function to change wifi channel

   Notes for users with version 0.96:
   If you want upgrade from version 0.96, you must rename the PocketVJ-CP-v3-master.zip file to PocketVJ-CP-v2-master.zip.



### CP 0.96 26.Feb. 2016<br />
   Official Release of PocketVJ 3.0 RTC Version
   
   incl. many new features
