#!/usr/bin/env python

import ConfigParser

config_network = ConfigParser.ConfigParser()

config_network.readfp(open(r'/srv/config/board.conf'))

interfaces_file = open("/srv/config/etc/interfaces","w")
interfaces_file.write("auto lo\niface lo inet loopback\n\nallow-hotplug eth0\n")

if (config_network.get('network', 'dhcp')):
    interfaces_file.write("iface eth0 inet dhcp\n")
else:
    resolvconf_file = open("/srv/config/etc/resolv.conf","w")
    
    ip_address = config_network.get('network', 'ip_address')
    netmask = config_network.get('network', 'netmask')
    gateway = config_network.get('network', 'gateway')
    dns1 = config_network.get('network', 'dns1')
    dns2 = config_network.get('network', 'dns2')

    interfaces_file.write("iface eth0 inet static\n   address " + ip_address.replace('"', '') + "\n   netmask " + netmask.replace('"', '') + "\n   gateway " + gateway.replace('"', '') + "\n")
    
    if (dns1):
	resolvconf_file.write("nameserver " + dns1.replace('"', '') + "\n")
    if (dns2):
	resolvconf_file.write("nameserver " + dns2.replace('"', '') + "\n")

    resolvconf_file.close()

interfaces_file.close()
