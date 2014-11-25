doorentry
=========

Raspberry Video Entry Phone System
Based on Linphone version: 3.5.2 (patched)

Manage a 5V 2 Channel Relay Module Shield and 8 Push Button Switch

INSTALL
=======
Install patched Linphone from https://vmh.dyndns.info/my-ubuntu/dists/wheezy/main/binary-armhf/

apt-get install apt-transport-https lighttpd php5-cgi

lighty-enable-mod fastcgi
lighty-enable-mod fastcgi-php

change the document-root in 
server.document-root        = "/srv/www"

echo "deb https://vmh.dyndns.info/my-ubuntu/ wheezy main" > /etc/apt/sources.list.d/my-rasp.list

wget --no-check-certificate https://vmh.dyndns.info/my-ubuntu/pubring.gpg

apt-key add pubring.gpg

apt-get update

sudo apt-get install liblinphone4 libmediastreamer1 linphone-common linphone-nogtk  

Copy the files in /etc /srv and /usr/local/bin

chown -R www-data:www-data /srv/*

chmod 755 /usr/local/bin/*
update-rc.d doorentry defaults

reboot


