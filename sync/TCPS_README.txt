=================================
 TCPSClient for Raspberry Pi
=================================

http://techlife.sg/TCPSClient/

TCPSClient.bin: for RaspberryPi B+
TCPSClient2.bin: for RaspberryPi 2 Model B
TCPSClient3.bin: for RaspberryPi 3 Model B

Dear Beta Tester,
Hello! Thank you for your downloading!

TCPSClient will try connecting a TCPSyphon server or TCPSpout server automatically.

NOTE:
	-Current version supports to receive JPEG encode only.
	 I recommend “TurboJPEG”.
	-When you use -c option, then you can choose a server.
		usage; ./TCPSClient.bin -c 192.168.0.130 -p 7778, the software will try connecting to that addredd when it is disconnected.
	-You can choose a network port, "-p port-number"
	-Trim source area. default is whole area ( the same as "-s 0,0,1,1" )
		 -s left(0),top(0),right(1),bottom(1)
	-Change show position. default is fit screen ( the same as "-d 0,0,1920,1080" )
		-d x(0),y(0),width(1920),height(1080)
	-When server closes session, then this software will quit.
	-When image resolution is changed, then this software will refuse it.
	-If you want to quit, then shoot CTRL+C

ABOUT GPU Memory:
The Raspbian Wheezy distribution allocates 64MB to the graphics processor and gives the rest to the CPU. It is too small for GPU. So we recommend it should be over 256MB. It's depend on your resolution you want to receive.
If you get some error messages; like a "JPEGOpenMax::WaitJPEGDecompressorReady exception: Waiting timed out", then probably your GPU memory is not enough.

Discussion:  
http://raspberrypi.stackexchange.com/questions/673/what-is-the-optimum-split-of-main-versus-gpu-memory
http://www.dummies.com/how-to/content/how-to-use-raspiconfig-to-set-up-your-raspberry-pi.html
http://www.midwesternmac.com/blogs/jeff-geerling/getting-gigabit-networking


Preparation:
	unzip.
	chmod u+x TCPSClient.bin
		or
	chmod u+x TCPSClient2.bin
	chmod u+x TCPSClient3.bin


Product requirements
-Raspberry Pi 3 Model B
-OS: RASPBIAN. we used NOOBS_v2.4.4( https://www.raspberrypi.org/downloads/ )
-Requires: Avahi-deamon for Bonjour solver.
	sudo apt-get install avahi-daemon
	sudo apt-get install libavahi-compat-libdnssd-dev

Special Thanks;
	Using the Raspberry Pi's GPU with OpenMAX
	http://jan.newmarch.name/LinuxSound/Diversions/RaspberryPiOpenMAX/

07/11'2017 Beta9 : Supports Rasbian-Stretch. and reconnect function when you take IP address. 
                               Provide RaspberryPi3 only. If you need for other model, please contanct us.
02/01'2017 Beta8 : reconnection and bug fix. 
16/12'2016 Beta7 : supports not only 1920x1080 but also other resolution for -d option. 
10/07'2016 Beta6 : build for Pi B+, Pi2 B and Pi3 B. 
26/01'2016 Beta5 : build for Pi B+ and Pi2 B. 
04/01'2016 Beta4 : supports multi resolutions.
15/08'2015 Beta3 : supports -s -d -c -p option, deprecated: -t option.
13/06’2015 Beta2 : supports trim option; ./TCPSClient.bin -t letterbox
12/05’2015 Public beta


Thank you for your testing.
	Martin Boetsch, Olivier Coucke.


Simplified BSD license,

     Copyright 2015-2017, z37soft (Nozomu Miura). All rights reserved.
     
     Redistribution and use in binary forms, with or without
     modification, are permitted provided that the following conditions are met:
          
     * Redistributions in binary form must reproduce the above copyright
     notice, this list of conditions and the following disclaimer in the
     documentation and/or other materials provided with the distribution.
     
     THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
     ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
     WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
     DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS BE LIABLE FOR ANY
     DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
     (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
     LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
     (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
     SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.