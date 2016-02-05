#!/bin/bash

sudo cp /media/internal/feh_2.3-2_armhf.deb /var/cache/apt/archives/feh_2.3-2_armhf.deb
sudo rm /media/internal/feh_2.3-2_armhf.deb
sudo dpkg -i *.deb /var/cache/apt/archives/feh_2.3-2_armhf.deb



#sudo rm -R /media/internal/depencies_01/
sudo apt-get clean
#sudo rm -R /media/internal/.[DTf_]*
#sudo rm -R /media/internal/__MACOSX

