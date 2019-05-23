<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 17 2019 21:09:34 GMT+0000 (UTC)  -->
<html data-wf-page="5913869e09b9f23ad6b314ee" data-wf-site="5913869e09b9f23ad6b314ed">
<head>
  <meta charset="utf-8">
  <title>PocketVJ CP</title>
  <meta content="Used to control the awesome PocketVJ" name="description">
  <meta content="PocketVJ CP" property="og:title">
  <meta content="Used to control the awesome PocketVJ" property="og:description">
  <meta content="summary" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/pocketvj-cp.webflow.css" rel="stylesheet" type="text/css">
  <script src="../js/webfont.js" type="text/javascript"></script>

  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon32.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/istore256.png" rel="apple-touch-icon">
  <!--
Code  below is for button tooltips
 -->
  <link rel="stylesheet" type="text/css" href="../themes/tooltipster.bundle.min.css">
  <link rel="stylesheet" type="text/css" href="../themes/tooltipster-sideTip-borderless.css">
</head>
<body class="body">
  <div class="container w-container">
    <div>
      <div class="w-row">
        <div class="w-col w-col-6"><a href="https://pocketvj.com/#Downloads" target="_blank" class="w-inline-block"><img src="images/pocketVJlogoS2.png" alt="" class="logo"></a></div>
        <div class="w-col w-col-6">
          <div class="release">CP 2.4.4</div>
        </div>
      </div>
    </div>
    <div class="w-clearfix">
      <div class="shortcutsheader"><a href="?action=stop" id="action" tooltipster="top" title="Stop All" class="action w-inline-block"><img src="images/00_stop.png" width="30" alt="Stop All"></a></div>
      <div class="shortcutsheader"><a href="?action=startmaster" id="action" tooltipster="top" title="Play" class="action w-inline-block"><img src="images/play.png" width="30" alt="Stop All"></a></div>
      <div class="shortcutsheader"><a href="?action=pause" tooltipster="top" title="Pause/Play" class="action w-inline-block"><img src="images/00_play-pause.png" alt=""></a></div>
      <div class="shortcutsheader"><a href="?action=fastforward" tooltipster="top" title="Faststep Forward" class="action w-inline-block"><img src="images/00_fast-forward.png" alt="" class="action"></a></div>
      <div class="shortcutsheader"><a href="/eXtplorer/" target="_blank" tooltipster="top" title="Filebrowser" class="w-inline-block"><img src="images/00_files.png" width="30" alt=""></a></div>
      <div class="shortcutsheader"><a href="?action=screenshot" tooltipster="top" title="Screenshot" class="action w-inline-block"><img src="images/00_prntscrn.png" width="30" alt="Screenshot"></a></div>
      <div class="shortcutsheader"><a href="?action=testscreen" tooltipster="top" title="Testscreen" class="action w-inline-block"><img src="images/00_testscreen.png" alt=""></a></div>
      <div class="shortcutsheader"><a href="?action=getresolution" tooltipster="top" title="Show Resolution" class="action w-inline-block"><img src="images/00_resolution.png" width="30" alt=""></a></div>
      <div class="shortcutsheader"><a href="?action=reboot" tooltipster="top" title="Reboot" class="action w-inline-block"><img src="images/00_reboot.png" width="30" alt="" class="action"></a></div>
      <div class="shortcutsheader"><a href="?action=shutdown" tooltipster="top" title="Shutdown" class="action w-inline-block"><img src="images/00_shutdown.png" width="30" alt=""></a></div>
    </div>
    <div>
      <div class="html-embed w-embed">
        <div style="height:100%; overflow-y: auto; overflow-x: hidden;">
          <table width="90%" height="70" border="1" align="center">
            <tr>
              <td id="actions_output" width="360" height="88"></td>
              </tr><tr>
          </tr></table>
        </div>
      </div>
    </div>
    <div>
      <div data-duration-in="300" data-duration-out="100" data-easing="linear" class="w-tabs">
        <div class="tabs-menu w-tab-menu"><a data-w-tab="Tab 1" class="tab-link yellow1 w-inline-block w-tab-link w--current"><img src="images/01_filesdisk.png" alt="" class="image_register"></a><a data-w-tab="Tab 2" class="tab-link blue1 w-inline-block w-tab-link"><img src="images/02_video.png" alt="" class="image_register"></a><a data-w-tab="Tab 3" class="tab-link blue2 w-inline-block w-tab-link"><img src="images/12_streamer.png" alt="" class="image_register"></a><a data-w-tab="Tab 4" class="tab-link green1 w-inline-block w-tab-link"><img src="images/04_presenter.png" alt="" class="image_register"></a><a data-w-tab="Tab 5" class="tab-link grey1 w-inline-block w-tab-link"><img src="images/05_mapping.png" alt="" class="image_register"></a><a data-w-tab="Tab 6" class="tab-link brown w-inline-block w-tab-link"><img src="images/06_piwall.png" alt="" class="image_register"></a><a data-w-tab="Tab 7" class="tab-link violett1 w-inline-block w-tab-link"><img src="images/07_autostart.png" alt="" class="image_register"></a><a data-w-tab="Tab 8" class="tab-link violett2 w-inline-block w-tab-link"><img src="images/08_timer.png" alt="" class="image_register"></a><a data-w-tab="Tab 9" class="tab-link violett3 w-inline-block w-tab-link"><img src="images/09_aux.png" alt="" class="image_register"></a><a data-w-tab="Tab 10" class="tab-link red2 w-inline-block w-tab-link"><img src="images/10_resolutions.png" alt="" class="image_register"></a><a data-w-tab="Tab 11" class="tab-link red1 w-inline-block w-tab-link"><img src="images/11_system.png" alt="" class="image_register"></a></div>
        <div class="tabs-content w-tab-content">
          <div data-w-tab="Tab 1" class="yellow_pane w-tab-pane w--tab-active">
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading">  <br>File Handling:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mount" class="button_orange action w-button">Mount USB</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">To mount an usb-stick if it is not mounted automatically.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=eject" class="button_orange action w-button">Eject USB</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">To eject an usb-stick.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="/eXtplorer/" target="_blank" class="button_orange w-button">Filebrowser</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Open online Filebrowser in new tab.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=getcontent" target="_blank" class="button_orange action w-button">Get File from Web</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Downloads content for example from your Dropbox.<br>You need to edit /var/www/sync/getcontent for your needs!</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=diskspace" class="button_orange action w-button">Diskspace</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Display used/free space.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=clean" class="button_orange action w-button">Clean hidden Files</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Removes unwanted files mostly generated by osx computers.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading"> <br><br>Functions:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=namefixer" class="buttonred2 action w-button">Filename-Fixer</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Removes special characters, empty spaces and shortens filenames to 16 characters.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=imageconform" class="buttonred2 action w-button">Conform Images</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Resizes all images to max.1920 x 1080p and saves them as .jpg</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mappingconverter" class="buttonred2 action w-button">Mapping  Converter</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Converts Mapping masks exported from MadMapper or Mapio to Mappersetting1. Save it as convert.svg in /internal/converter/<br>.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="heading"> <br><br>Info about stored files:</div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=codecinfo" class="button_orange action w-button">Movie Codec Info</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Show info about the codecs of stored movies.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=movieinfo" class="button_orange action w-button">Movie Resolution</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Show info about the resolution of stored movies.</div>
              </div>
            </div>
          </div>
          <div data-w-tab="Tab 2" class="blue1_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading"> <br>Video Control:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="regular-text">Remember:<br>no blank spaces or special characters in filenames!<br><br>.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=startmaster" class="buttonblue action w-button">PLAY</a></div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=startslave" class="buttonblue action w-button">Play as Slave</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=startmasterusb" class="buttonblue action w-button">PLAY  from USB</a></div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=setseamlessscript" class="buttonblue action w-button">Seamless</a></div>
                  <div class="w-col w-col-6"><a href="?action=setgapscript" class="buttonblue action w-button">Gaplist</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=stopvideo" class="buttomredstop action w-button">Stop Video only</a></div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="regular-text">Seamless is standard, Gaplist for Play_Once function slaves</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=startmasterwifi" class="buttonblue action w-button">Play as Master Wifi</a></div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=startslavewifi" class="buttonblue action w-button">Play as Slave Wifi</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="regular-text">Make sure that you have a master with running with:<br>wifi name: vj100  passwort: pocketvj ip: 2.0.0.100<br>and a video with name: wifisync.mp4 in videos folder!</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading"> <br>Video Loop Control:</div>
              </div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <?php
			$codes = Array('01','02','03','04','05','06','07','08','09','10','11','12');
			$text = '<br> .';
			foreach ($codes as $idx => $c) {
				?>
            	<div class="w-row">
            	  <div class="w-col w-col-6"><a href="?action=startmaster<?=$c?>" class="buttonblue action w-button">Play_<?=$c?> Loop</a></div>
            	  <div class="w-col w-col-6"><a href="?action=startmasteronce<?=$c?>" class="buttonblue action w-button">Play_<?=$c?> Once</a></div>
            	  <?php if ($item === end($myArray)) { print('<div class="regular-text"><br>'.$text.'</div>'); } ?>
            	</div>
				<?php
			}
			?>
          </div>
          <div data-w-tab="Tab 4" class="green_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading"> <br>Image Player:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="regular-text">Remember:<br>no blank spaces or special characters in filenames<br><br>.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=image" class="buttongreen action w-button">Image Player Start</a></div>
              <div class="w-col w-col-6"><a href="?action=imageusb" class="buttongreen action w-button">Image Player Start USB</a>
                <div class="regular-text"> </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading">Image Player Playback Time:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=slidetime0" class="buttongreen action w-button">As fast as possible</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=slidetime10" class="buttongreen action w-button">10 Seconds</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=slidetime5" class="buttongreen action w-button">5 Seconds</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=slidetime15" class="buttongreen action w-button">15 Seconds</a>
                <div class="regular-text"> </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading">Image Overlay:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="regular-text">This function overlays an image over the videoplayer.<br>Make your .png with alpha channel and store it in /media/internal/overlay.png</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=overlay" class="buttongreen action w-button">Overlay</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=stopoverlay" class="buttongreen action w-button">Stop Overlay</a>
                <div class="regular-text"> </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading">Presenter:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=impressprev" class="buttongreen action w-button">&lt; Previous</a></div>
              <div class="w-col w-col-6"><a href="?action=impressnext" class="buttongreen action w-button">Next &gt;</a>
                <div class="regular-text"><br> .</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=startimagemanual" class="buttongreen action w-button">Image Presentation</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=startpdf" class="buttongreen action w-button">PDF Presentation</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=startpdfusb" class="buttongreen action w-button">PDF USB Presentation</a>
                <div class="regular-text"> </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading">Impress Control:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=impressplay" class="buttongreen action w-button">Fullscreen</a></div>
              <div class="w-col w-col-6"><a href="?action=impressedit" class="buttongreen action w-button">Edit</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=impressopen" class="buttongreen action w-button">Open</a></div>
              <div class="w-col w-col-6"><a href="?action=impresslast" class="buttongreen action w-button">Open Demo</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=impressclose" class="buttongreen action w-button">Save</a></div>
              <div class="w-col w-col-6"><a href="?action=impressrelaunch" class="buttongreen action w-button">Relaunch Impress</a>
                <div class="regular-text"></div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading">Audio Player:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="regular-text">You can us Audio together with Image Player</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=startaudio" class="buttongreen action w-button">Audio Player Start</a></div>
              <div class="w-col w-col-6"><a href="?action=startaudioslave" class="buttongreen action w-button">Audio Slave</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=startaudiosub" class="buttongreen action w-button">Audio Player USB</a></div>
              <div class="w-col w-col-6"><a href="?action=stopaudio" class="buttomredstop action w-button">Stop Audio Only</a>
                <div class="regular-text"><br> .</div>
              </div>
            </div>
          </div>
          <div data-w-tab="Tab 5" class="grey_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>Mapping:</div>
                <div class="regular-text">Autostart into Mapper with USB mouse connect to get remote functions working. Use videos with max. 1280x720 pixel.</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-3"><a href="?action=launchmapper" tooltipster="top" title="launch without  mouse" class="buttomredstop action w-button">Launch Mapper</a></div>
                  <div class="w-col w-col-3"><a href="?action=relaunchmapper" tooltipster="top" title="Relaunch after crash" class="buttomredstop action w-button">ReLaunch Mapper</a></div>
                  <div class="w-col w-col-3"><a href="?action=launchmappercam" tooltipster="top" title="launch without  mouse" class="buttomredstop action w-button">Mapper Cam</a></div>
                  <div class="w-col w-col-3"><a href="?action=launchmapperremote" tooltipster="top" title="launch without  mouse" class="buttomredstop action w-button">Mapper Remote</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <h1 class="heading_white_right">----------------------------------------------------------------------------</h1>
              </div>
              <div class="w-col w-col-6">
                <h1 class="heading_white_right">----------------------------------------------------------------------------</h1>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <h1 class="heading_white_right">Open  ===&gt;&gt;</h1>
              </div>
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperimport1" class="buttongray_small action w-button">1</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperimport2" class="buttongray_small action w-button">2</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperimport3" class="buttongray_small action w-button">3</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperimport4" class="buttongray_small action w-button">4</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperimport5" class="buttongray_small action w-button">5</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperimport6" class="buttongray_small action w-button">6</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <h1 class="heading_white_right">Save to   ===&gt;&gt;</h1>
              </div>
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperexport1" class="buttongray_small action w-button">1</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperexport2" class="buttongray_small action w-button">2</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperexport3" class="buttongray_small action w-button">3</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperexport4" class="buttongray_small action w-button">4</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperexport5" class="buttongray_small action w-button">5</a></div>
                  <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><a href="?action=mapperexport6" class="buttongray_small action w-button">6</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <h1 class="heading_white_right">----------------------------------------------------------------------------</h1>
              </div>
              <div class="w-col w-col-6">
                <h1 class="heading_white_right">----------------------------------------------------------------------------</h1>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-tiny-stack"><a href="?action=mappermappingmode" class="buttongray action w-button"><strong class="bold-text">MAPPING Mode</strong></a></div>
              <div class="w-col w-col-6 w-col-tiny-tiny-stack">
                <div class="w-row">
                  <div class="w-col w-col-6 w-col-tiny-6"></div>
                  <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperundo" class="buttongray_small action w-button">Undo</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperquad" class="buttongray action w-button">Add Quad  □</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperpersp" class="buttongray action w-button">Toggle Perspective</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mappertriangl" class="buttongray action w-button">Add Triangle ∆</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperdelete" class="buttongray action w-button">Delete Surface</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mappercircle" class="buttongray action w-button">Add Circle o</a>
                <div class="regular-text">--------------------------------------------------------------------------------</div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mappergrid" class="buttongray action w-button">Add Gridwarp ◊</a>
                <div class="regular-text">--------------------------------------------------------------------------------</div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-3"><a href="?action=mapperaddrow" class="buttongray_small action w-button">+ Row</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperrmrow" class="buttongray_small action w-button">- Row</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperaddcolumn" class="buttongray_small action w-button">+ Column</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperrmcolumn" class="buttongray_small action w-button">- Column</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperscaleup" class="buttongray_small action w-button">Scale Up</a></div>
                  <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperscaledown" class="buttongray_small action w-button">Scale Down</a></div>
                </div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-4"><a href="?action=mapperlayerup" class="buttongray_small action w-button">Layer Up</a></div>
                  <div class="w-col w-col-4"><a href="?action=mapperlayerdown" class="buttongray_small action w-button">Layer Down</a></div>
                  <div class="w-col w-col-4"><a href="?action=mapperpanel" class="buttongray_small action w-button">Show Panel</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=mappernext" class="buttongray_small action w-button">Select Next Surface</a>
                    <div class="regular-text">-----------------------------------------------</div>
                  </div>
                  <div class="w-col w-col-6"><a href="?action=mapperprev" class="buttongray_small action w-button">Select Prev Surface</a></div>
                </div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=mappernextvertex" class="buttongray_small action w-button">Select Next Vertex °</a></div>
                  <div class="w-col w-col-6"><a href="?action=mapperprevvertex" class="buttongray_small action w-button">Select Prev Vertex °</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=mapperleft" class="buttongray_small action w-button">Move Left</a></div>
                  <div class="w-col w-col-6"><a href="?action=mapperup" class="buttongray_small action w-button">Move Up</a></div>
                </div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=mapperdown" class="buttongray_small action w-button">Move Down</a></div>
                  <div class="w-col w-col-6"><a href="?action=mapperright" class="buttongray_small action w-button">Move Right</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=mapperleftbig" class="buttongray_small action w-button">Big Move Left</a>
                    <div class="regular-text">-----------------------------------------------</div>
                  </div>
                  <div class="w-col w-col-6"><a href="?action=mapperupbig" class="buttongray_small action w-button">Big Move Up</a></div>
                </div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=mapperdownbig" class="buttongray_small action w-button">Big Move Down</a></div>
                  <div class="w-col w-col-6"><a href="?action=mapperrightbig" class="buttongray_small action w-button">Big Move Right</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=mappermediaselectth" class="buttongray action w-button"><strong class="bold-text-2">Media Stepper</strong></a></div>
              <div class="w-col w-col-6"><a href="?action=mappermediaselect" class="buttongray action w-button">Media Selection</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=mappertexturemode" class="buttongray action w-button"><strong>TEXTURE Mode</strong></a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=mapperplaymode" class="buttongray action w-button"><strong>PLAY Mode</strong></a>
                <div class="regular-text">-----------------------------------------------</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6 w-col-small-6">
                <h1 class="heading_white_right">Slideshow Time:</h1>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6 w-col-small-6">
                <div class="w-row">
                  <div class="w-col w-col-3"><a href="?action=mapperslidetime2" class="buttongray_small action w-button">2 sec.</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperslidetime5" class="buttongray_small action w-button">5 sec.</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperslidetime10" class="buttongray_small action w-button">10 sec.</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperslidetime15" class="buttongray_small action w-button">15 sec.</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6 w-col-small-6">
                <h1 class="heading_white_right">Slideshow Resize Options:</h1>
                <div class="regular-text"><br>PiMapper by Krisjanis Rijnieks<br>https://github.com/kr15h/ofxPiMapper<br>.</div>
              </div>
              <div class="w-col w-col-6 w-col-tiny-6 w-col-small-6">
                <div class="w-row">
                  <div class="w-col w-col-3"><a href="?action=mapperresizenative" class="buttongray_small action w-button">Native</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperresizefit" class="buttongray_small action w-button">Fit</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperresizefitprop" class="buttongray_small action w-button">FitProp.</a></div>
                  <div class="w-col w-col-3"><a href="?action=mapperresizefillprop" class="buttongray_small action w-button">FillProp.</a></div>
                </div>
              </div>
            </div>
          </div>
          <div data-w-tab="Tab 3" class="blue2_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading"> <br>Video Control with Wifi Audio Streaming:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=audiostream" class="buttonblue action w-button">Play Master Stream</a></div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="?action=audiostreamslave" class="buttonblue action w-button">Play Slave Stream</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"><a href="/streamer/index.html" target="_blank" class="buttonblue w-button">Open Streampage</a></div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="regular-text">Remove any USB sound devices!<br>Works on PVJ 3.2 or newer<br><br>You can connect PVJ to a Wifi router and stream to several devices simultaneously.</div>
              </div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading"> <br>Audio Control with Wifi Stream:</div>
              </div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=startaudiostream" class="buttonblue action w-button">Audioplayer Stream</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="/streamer/index.html" target="_blank" class="buttonblue w-button">Open Streampage</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading"> <br>TCP Syphon Stream:</div>
              </div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=tcpsserver" class="buttonblue action w-button">TCPSyphon Receiver</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">© techlife.sg</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading"> <br>NDI Stream:</div>
              </div>
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=ndireceiver" class="buttonblue action w-button">NDI Find</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">No Video Display. Show if there are streams (after 60 seconds).<br>© newtwek.com</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=ndisend" class="buttonblue action w-button">NDI Sender</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Sends all videos over NDI<br><br>.</div>
              </div>
            </div>
          </div>
          <div data-w-tab="Tab 6" class="grey_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>Syphon-Wall:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"></div>
              <div class="w-col w-col-4">
                <div class="regular-textcentered">4 Screen Setup<br>as Syphon Slave:</div>
              </div>
              <div class="w-col w-col-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=tcpsserver_topleft" class="buttonbrown action w-button">1 Top Left Syphon</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=tcpsserver_topright" class="buttonbrown action w-button">2 Top Right Syphon</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=tcpsserver_downleft" class="buttonbrown action w-button">3 Buttom Left Syphon</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=tcpsserver_downright" class="buttonbrown action w-button">4 Buttom Right Syphon</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>Pi-Wall:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"></div>
              <div class="w-col w-col-4">
                <div class="regular-textcentered">4 Screen Setup<br>Start Slave:</div>
              </div>
              <div class="w-col w-col-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=piwall_topleft" class="buttonbrown action w-button">1 Top Left</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=piwall_topright" class="buttonbrown action w-button">2 Top Right</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=piwall_botleft" class="buttonbrown action w-button">3 Buttom Left</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="?action=piwall_botright" class="buttonbrown action w-button">4 Buttom Right</a></div>
              <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"></div>
              <div class="w-col w-col-4">
                <div class="regular-textcentered"> <br>3 Screen Setup<br>Start Slave:</div>
              </div>
              <div class="w-col w-col-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><a href="?action=piwall_left" class="buttonbrown action w-button">1 Left</a></div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><a href="?action=piwall_middle" class="buttonbrown action w-button">2 Center</a></div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><a href="?action=piwall_right" class="buttonbrown action w-button">3 Right</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
                <div class="regular-textcentered"> <br>The master file must be 1920 x 1080 pixel and stored as:<br><br>/media/internal/video/piwall.mp4<br><br>.</div>
              </div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><a href="?action=piwall_master" class="buttonbrown action w-button">PI-Wall Master</a>
                <div class="regular-textcentered"> <br>Start all slaves before starting the master <br><br>.</div>
              </div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"><a href="?action=piwall_masterloop" class="buttonbrown action w-button">PI-Wall Master Loop</a>
                <div class="regular-textcentered"> <br>Attention: This loops forever !<br>Needs reboot to stop.<br>.</div>
              </div>
              <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">.<br>PiWall by Alex Goodyear, Colin Hogben, Dr. Adam Stephen<br>https://www.piwall.co.uk<br>.</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
          </div>
          <div data-w-tab="Tab 7" class="violett1_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>Autostart Video:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=master" class="buttonblue action w-button">VIDEOPLAYER Master</a></div>
              <div class="w-col w-col-6"><a href="?action=streamermaster" class="buttonblue action w-button">STREAMER Master</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=usb" class="buttonblue action w-button">VIDEOPLAYER Master USB</a></div>
              <div class="w-col w-col-6"><a href="?action=streamerslave" class="buttonblue action w-button">STREAMER Slave</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=slave" class="buttonblue action w-button">VIDEOPLAYER Slave</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=autostartloop01" class="buttonblue action w-button">VIDEOPLAYER Loop 01</a>
                <div class="regular-text">  </div>
              </div>
              <div class="w-col w-col-6"><a href="?action=autostartloop02" class="buttonblue action w-button">VIDEOPLAYER Loop 02</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setmapper" class="buttongray action w-button">VIDEOMAPPER</a></div>
              <div class="w-col w-col-6"><a href="?action=setmapperremote" class="buttongray action w-button">VIDEOMAPPER for Remote App</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setmappercam" class="buttongray action w-button">VIDEOMAPPER Camera Feed</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Get the remote App https://pocketvj.com/#Downloads</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setsyphon" class="buttonblue action w-button">TCPSyphon Receiver</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white"> <br>Autostart Presenter:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=powerpoint" class="buttongreen action w-button">PRESENTER</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setimage" class="buttongreen action w-button">IMAGEPLAYER</a></div>
              <div class="w-col w-col-6"><a href="?action=setimageusb" class="buttongreen action w-button">IMAGEPLAYER USB</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setimagemanual" class="buttongreen action w-button">IMAGEPLAYER Manual</a></div>
              <div class="w-col w-col-6"><a href="?action=setpdf" class="buttongreen action w-button">PDF PLAYER</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setaudio" class="buttongreen action w-button">AUDIOPLAYER</a></div>
              <div class="w-col w-col-6"><a href="?action=setaudiousb" class="buttongreen action w-button">AUDIOPLAYER USB</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=streameraudio" class="buttongreen action w-button">AUDIOSTREAMER</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white"> <br>Autostart Other:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setscheduler" class="buttongray action w-button">SCHEDULER/OSC</a></div>
              <div class="w-col w-col-6"><a href="?action=autostartclock" class="buttongray action w-button">CLOCK on Screen</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=screenshare" class="buttongray action w-button">SCREENSHARING</a></div>
              <div class="w-col w-col-6"><a href="?action=setqlc" class="buttongray action w-button">QLC+   DMX console</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setosc" class="buttongray action w-button">OSC control</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Control the whole CP over OSC instead of TCP<br>Standard port is: 9876</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setprocessing" class="buttongray action w-button">PROCESSING</a></div>
              <div class="w-col w-col-6"><a href="?action=setpd" class="buttongray action w-button">PUREDATA</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=setsuperpikixpi" class="buttongray action w-button">SUPER PIKIX Pi</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=custom1" class="buttongray action w-button">CUSTOM 1</a></div>
                  <div class="w-col w-col-6"><a href="?action=custom2" class="buttongray action w-button">CUSTOM 2</a></div>
                </div>
                <div class="regular-text"> <br>If you need other autostarts, open a github issue.<br>.</div>
              </div>
              <div class="w-col w-col-6">
                <div class="regular-text">Visit http://pikilipita.com/superpikixpi/ for more info.<br>If you like it, make a donation!</div>
              </div>
            </div>
          </div>
          <div data-w-tab="Tab 8" class="violett2_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>Scheduler / Timer:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=clockdisplay" class="buttonviolett action w-button">Clock Display on Screen</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="w-row">
                  <div class="w-col w-col-3"><a href="?action=clockred" class="clockred action w-button">Red</a></div>
                  <div class="w-col w-col-3"><a href="?action=clockgreen" class="clockgreen action w-button">Green</a></div>
                  <div class="w-col w-col-3"><a href="?action=clockorange" class="clockorange action w-button">Orange</a></div>
                  <div class="w-col w-col-3"><a href="?action=clockpink" class="clockpink action w-button">Pink</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=gettime" class="buttonviolett action w-button">Check internal Date/Time</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">  </div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=timeron" class="buttonviolett action w-button">Scheduler ON</a></div>
              <div class="w-col w-col-6"><a href="?action=timeroff" class="buttonviolett action w-button">Scheduler OFF</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=timer" class="buttonviolett action w-button">Timetable</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">  <br>To create a scheduler task, open the filebrowser and edit the timer.txt file in /media/internal/timer.txt<br><br>Activate with Scheduler ON knob, will immediately be active without reboot.</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
          </div>
          <div data-w-tab="Tab 9" class="violett3_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>AUX:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=beameron" class="buttonviolett2 action w-button">Projector Power ON</a></div>
              <div class="w-col w-col-6"><a href="?action=beameroff" class="buttonviolett2 action w-button">Projector Power OFF</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="http://192.168.2.254" target="_blank" class="buttonviolett2 w-button">Projector Control Interface</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=oscreceiver" class="buttonviolett2 action w-button">Start OSC listener on Port: 9876</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="sync/PocketVJ_OSC.touchosc" class="buttonviolett2 w-button">Download OSC Preset for TouchOSC</a></div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Set Audio Output:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=testtone" class="buttonviolett2 action w-button">Audio Testtone</a></div>
              <div class="w-col w-col-4"><a href="?action=testtoneleft" class="buttonviolett2 action w-button">Testtone Left</a></div>
              <div class="w-col w-col-4"><a href="?action=testtoneright" class="buttonviolett2 action w-button">Testtone Right</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3"><a href="?action=hdmi_out" class="buttonviolett2 action w-button">Audio HDMI</a></div>
              <div class="w-col w-col-3"><a href="?action=jack_out" class="buttonviolett2 action w-button">Audio Jack</a></div>
              <div class="w-col w-col-3"><a href="?action=both_out" class="buttonviolett2 action w-button">Audio HDMI+Jack</a></div>
              <div class="w-col w-col-3"><a href="?action=alsa_out" class="buttonviolett2 action w-button">Audio USB Soundcard</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">If you can not hear the audio of your video, make sure its AAC compressed with a maximum bitrate of 192kps. Higher bitrates are not supported!</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>DMX / OLA:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=startola" class="buttonviolett2 action w-button">Start  OLA</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">DMX / OLA is implemented since PocketVJ 3.5<br>If you have an earlier version you need to install it manually.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="#" onclick="window.open(`//${window.location.hostname}:9090`)" target="_blank" class="buttonviolett2 action w-button">Open  OLA Panel  (webinterface)</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text"></div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=startqlcplus" target="_blank" class="buttonviolett2 action w-button">Open  QLC+</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Run QLC+ to create Light Shows. <br>When using it, please donate the project: http://www.qlcplus.org</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="#" onclick="window.open(`//${window.location.hostname}:9999`)" target="_blank" class="buttonviolett2 action w-button">Open  QLC+ Panel (webinterface)</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">To control your QLC+ from here (headless).</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Camera:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=camerafeed" class="buttonviolett2 action w-button">Show Camera Livefeed</a></div>
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=enablecamera" class="buttonviolett2 action w-button">Enable  Camera</a></div>
                  <div class="w-col w-col-6"><a href="?action=disablecamera" class="buttonviolett2 action w-button">Disable Camera</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=camerapicture" class="buttonviolett2 action w-button">Take a Picture with Camera to /images</a></div>
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=cameranone" class="buttonviolett2 action w-button">no FX</a></div>
                  <div class="w-col w-col-6"><a href="?action=cameragpen" class="buttonviolett2 action w-button">GPen FX</a></div>
                </div>
                <div class="w-row">
                  <div class="w-col w-col-6"><a href="?action=camerasketch" class="buttonviolett2 action w-button">Sketch FX</a></div>
                  <div class="w-col w-col-6"><a href="?action=cameraemboss" class="buttonviolett2 action w-button">Emboss FX</a></div>
                </div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Network info:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=ipwifi" class="buttonviolett2 action w-button">Show Wifi IP Address</a></div>
              <div class="w-col w-col-6"><a href="?action=iplan" class="buttonviolett2 action w-button">Show RJ45 IP Address</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>PVJ info:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=gettemp" class="buttonviolett2 action w-button">Show CPU Temperature</a></div>
              <div class="w-col w-col-6"><a href="?action=getgpu" class="buttonviolett2 action w-button">Show GPU Ram usage</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Custom Buttons:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=customfunction1" class="buttonviolett2 action w-button">Custom Function #1</a></div>
              <div class="w-col w-col-6"><a href="?action=customfunction2" class="buttonviolett2 action w-button">Custom Function #2</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">  <br>.</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
          </div>
          <div data-w-tab="Tab 10" class="red2_pane w-tab-pane">
            <div class="row w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>Display:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=getresolution" class="buttonred2 action w-button">Get Actual Resolution</a></div>
              <div class="w-col w-col-6"><a href="?action=parser" class="buttonred2 action w-button">Parse Possible Resolutions</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=screenoff" class="buttonred2 action w-button">Display Sleep</a></div>
              <div class="w-col w-col-6"><a href="?action=screenon" class="buttonred2 action w-button">Display Wakeup</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Softedge:</div>
              </div>
              <div class="w-col w-col-6">
                <div class="regular-text"><br><br>Softedge works on videoplayer.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=softedge100h" class="buttonred2 action w-button">Softedge 100px Horizontal</a></div>
              <div class="w-col w-col-6"><a href="?action=softedge100v" class="buttonred2 action w-button">Softedge 100px Vertical</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=softedge200h" class="buttonred2 action w-button">Softedge 200px Horizontal</a></div>
              <div class="w-col w-col-6"><a href="?action=softedge200v" class="buttonred2 action w-button">Softedge 200px Vertical</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>HDMI<br>Force Resolution (needs reboot):</div>
              </div>
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>HDMI<br>Rotate &amp; Flip screen (needs reboot):</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=hdmireset" class="buttonred2 action w-button">Reset to Default</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=rotate0" class="buttonred2 action w-button">Normal</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=hdmi5" class="buttonred2 action w-button">1920 x 1080</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=rotate1" class="buttonred2 action w-button">90°</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=force1200" class="buttonred2 action w-button">1680 x 1050</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=rotate2" class="buttonred2 action w-button">180°</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=hdmi4" class="buttonred2 action w-button">1280 x 720</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=rotate3" class="buttonred2 action w-button">270°</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=hdmi6" class="buttonred2 action w-button">1280 x 800</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=flip1" class="buttonred2 action w-button">Flip Horizontal</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=hdmi1" class="buttonred2 action w-button">1024 x 768</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=flip2" class="buttonred2 action w-button">Flip Vertical</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=forcevga" class="buttonred2 action w-button">800 x 600</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Analog RCA Jack<br>Force Resolution (needs reboot):</div>
              </div>
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Load custom configuration (see manual):</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=analog1" class="buttonred2 action w-button">RCA PAL</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=bootconf" class="buttonred2 action w-button">Load Custom conf.txt</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=analog2" class="buttonred2 action w-button">RCA NTSC</a></div>
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=bootconfusb" class="buttonred2 action w-button">Load Custom conf.txt from USB</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">  <br>.</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
          </div>
          <div data-w-tab="Tab 11" class="red1_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
                <div class="heading_white"> <br>System:</div>
              </div>
              <div class="column w-col w-col-6 w-col-small-6 w-col-tiny-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=factoryreset" class="buttonred2 action w-button">Factory Reset</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Resets everything to the factory state.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=updateall" class="buttonred2 action w-button">UPDATE Everything</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Updates the CP, omxplayer and Mapper to newest version.<br>PocketVJ-CP-v3-master.zip must be placed in /internal/</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Firmware:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperupdate" class="buttonred2 action w-button">UPDATE Mapper</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Updates Mapper to the newest version with slideshow and circular.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperaudioupdate" class="buttonred2 action w-button">UPDATE Mapper Audio</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Newest version with slideshow, circles and  Audio Support.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperaudioupdateold" class="buttonred2 action w-button">UPDATE Mapper Performance  Audio</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Updates Mapper to performance version and Audio Support.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=mapperupdateold" class="buttonred2 action w-button">UPDATE Mapper Performance</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Updates Mapper to  version which has most performace.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=firmwareupdate" class="buttonred2 action w-button">UPDATE Videoplayer &amp; Sync</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Updates omxplayer and omxplayer-sync.<br>Only use when mentioned or needed.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Network RJ45:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=setdhcp" class="buttonred2 action w-button">DHCP</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">WIth DHCP enabled, Sync and Projectorcontrol will not work.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=setstatic100" class="buttonred2 action w-button">Static to 192.168.2.100</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Set IP adress to 192.168.2.100</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=setstatic101" class="buttonred2 action w-button">Static to 192.168.2.101</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Set IP adress to 192.168.2.101</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=setstatic102" class="buttonred2 action w-button">Static to 192.168.2.102</a></div>
              <div class="w-col w-col-6 w-col-tiny-6">
                <div class="regular-text">Set IP adress to 192.168.2.102</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Wifi:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=wifiup" class="buttonred2 action w-button">ON</a></div>
                  <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=wifidown" class="buttonred2 action w-button">OFF</a></div>
                </div>
              </div>
              <div class="w-col w-col-6">
                <div class="regular-text">Enable or disable Wifi until next reboot.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=wifienable" class="buttonred2 action w-button">ON permanent</a></div>
                  <div class="w-col w-col-6 w-col-tiny-6"><a href="?action=wifidisable" class="buttonred2 action w-button">OFF permanent</a></div>
                </div>
              </div>
              <div class="w-col w-col-6">
                <div class="regular-text">Enable or disable Wifi &amp; bluetooth permanent.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-3 w-col-tiny-3"><a href="?action=setwifi1" class="buttonred2 action w-button">CH1</a></div>
                  <div class="w-col w-col-3 w-col-tiny-3"><a href="?action=setwifi3" class="buttonred2 action w-button">CH3</a></div>
                  <div class="w-col w-col-3 w-col-tiny-3"><a href="?action=setwifi6" class="buttonred2 action w-button">CH6</a></div>
                  <div class="w-col w-col-3 w-col-tiny-3"><a href="?action=setwifi9" class="buttonred2 action w-button">CH9</a></div>
                </div>
              </div>
              <div class="w-col w-col-6">
                <div class="regular-text">Change the Wifi channel when using multiple devices.<br>Standard is CH6</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Temporary Stop Webserver:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=stopwebserver" class="buttonred2 action w-button">Stop Webserver</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Stops Webserver where CP is runing, frees some performance for OSC use. Restarts on reboot.</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Access the Heart:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="#" onclick="window.open(`//${window.location.hostname}:4200`)" target="_blank" class="buttonred2 action w-button">Terminal</a></div>
              <div class="w-col w-col-6">
                <div class="regular-text">Login: pi<br>Pass: pocketusr</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">  <br>.</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="footer">© 2019 <a target="_blank" href="https://www.magdesign.ch" class="link">magdesign.ch</a></div>
    </div>
  </div>
  <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="../js/placeholders.min.js"></script><![endif] -->
  <!--
Code below this line checks if user is online
 -->
  <script src="../offline.min.js"></script>
  <link rel="stylesheet" href="../themes/offline-theme-chrome.css">
  <link rel="stylesheet" href="../themes/offline-language-english.css">
  <script>
  var run = function(){
  var req = new XMLHttpRequest();
  req.timeout = 5000;
  req.open('GET', 'http://localhost:8888/walter/0', true);
  req.send();
}
setInterval(run, 3000);
</script>
  <!--
Code below disabling resend of functions after lost connection
  -->
  <script>
        Offline.options = {
        requests: false
        }
</script>
  <!--
Code below is for button actions
 -->
  <script type="text/javascript">
   $("a.action").on("click", function(event) {
       event.preventDefault();
       $.get( "backend.php" + $(this).attr('href'), function(data) {
          $("#actions_output").html(data);
       });
   });
   </script>
  <!--
Code  below is for button tooltips
 -->
  <script src="../themes/tooltipster.bundle.min.js"></script>
  <script src="../themes/tooltipster-for-webflow.js"></script>
</body>
</html>
