#PocketVJ 3.0/3.1 Control Panel

###CP 1.10 12.Januar 2017
  merged presenter and imageviewer together<br />
  added launch/relaunch mapper knobs<br />
  added an Update All function for single click update<br />
  added audio slave<br />
  changed audioplayer to omxplayer, so its possible to use usb soundcards and sync<br />
  added stopall function to mappersettings, so it does not need stop command in scheduler<br />
  

###CP 1.09a 04.Januar 2017
  fixed mapper relaunch function, remote did not work after clicking relauch<br />

###CP 1.09 03.Januar 2017
  added more seamless loop functions<br />

###CP 1.08 22.December 2016
  New mapper version, you must do update:  system->update mapper<br />
  Redesign of Mapper section<br />
  Undo of mapper is now working<br />
  Hide/show layer panel added<br />
  Pause in shortcuts now also works for mapper<br />
  Removed Terminal link and wrote which port you can access Terminal<br />
  Fixed Status Monitor size
    
###CP 1.07b 16.December 2016
  Stability improvements for loading and saving mapper presets<br />
  
###CP 1.07a 13.December 2016
  Fixed Screenshot function<br />

###CP 1.07 12.December 2016
  Testscreen bigger, for 1920 x 1200 resolution<br />
  Mapper presets 1-5<br />
  ALSA option for USB soundcard output (make sure to update firmware)<br />
  Updated manual for scheduler/mappersetting commands<br />
  Updated timer.txt<br />
###CP 1.06a 29.November 2016
   Mapper Update did remove path to videos and images, thanks to martani for bugreport, fixed now!<br />

###CP 1.06 24.November 2016
   Added rotate screen options<br />
   removed 1920 x 1200 resolution since it caused glitches, added 1680x1050 instead<br />

###CP 1.05a 20.November 2016
   Fixed: Mapper "Add Triangle" was not working<br />

###CP 1.05 18.November 2016
   Added setting to use RCA (analog) video output, could not test because I dont own analog hardware, can someone please test and report back, thanks!<br />
   Improved the response time when loading CP in browser<br />

###CP 1.04 15.November 2016
   Added a permanent wifi and bluetooth disable<br />
   Fixed audioplayer, did not workd because dtoverlay in config.txt was missing<br />
   Updated the timer.txt example file (make a factory preset to get it)<br />
   Added projector power on/off script which works with scheduler<br />
   
###CP 1.03b 03.November 2016
   Fixed PJLink Projector remote On/Off, was missing direct file path<br />
   Fixed startmasterusb

###CP 1.03a 02.November 2016
   Fixed the issue that testscreen and imageplayer did not display fullscreen<br />
   After upgrading, go to "display" and selecet "default" to update the settings

###CP 1.03 16.Oktober 2016
   Updated to newest omxplayer build<br />
   Added: Autostart custom file

###CP 1.02 03.Oktober 2016
   Fixed Mapper: Pause, Media Stepper, BigMoves, Relaunch<br />
   Fixed: Terminal link<br />
   Added: PiWall setting for 3screens, PiWall master loop<br />
   Added: tag description to shortcuts and link to logo<br />
   (Still trying to remote mapper without mouse)<br />

###CP 1.01 30.September 2016
   Added symbols to the colored register menu for better usability<br />
   Fixed an issue with omxplayer-sync, play once played the file twice... thanks to mdmcclel for fix and pull request

###CP 1.00 12.September 2016

   make sure that after updating the CP, you go to system and hit Update Firmware and Update Mapper to use all the new functions.<br />
   Be patient, updating takes several minutes!
    
    - Added seamless loop
    - Sections are now color coded
    - New Sync script and new Player
    - many new feuatures and little bugfixes
    

###CP 0.97a 15.March 2016
   Added missing up down left right commands for mapper


###CP 0.97 10.March 2016
   Fixed update function
   
   Updated Mapper Controls
   
   added function to change wifi channel

   Notes for users with version 0.96:
   If you want upgrade from version 0.96, you must rename the PocketVJ-CP-v3-master.zip file to PocketVJ-CP-v2-master.zip.



###CP 0.96 26.Feb. 2016
   Official Release of PocketVJ 3.0 RTC Version
   
   incl. many new features
