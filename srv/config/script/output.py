#!/usr/bin/env python

import ConfigParser

config_output = ConfigParser.ConfigParser()

config_output.readfp(open(r'/srv/config/board.conf'))

for count in range(0,10):
    out_file = open("/srv/config/outputs/" + str(count) + ".conf","w")
    out_file.write("[relay]\n")

    if (config_output.get('output', 'en_' + str(count))):
	out_file.write("enable = 1\n")
    else:
	out_file.write("enable = 0\n")

    if (config_output.get('output', 'chn_' + str(count)).replace('"', '') == "1"):
	out_file.write("proto = local\n")
	out_file.write("pin = " + config_output.get('general', 'relay_1').replace('"', '') + "\n")
	out_file.write("ip = none\n")
	out_file.write("time = " + str(float(config_output.get('output', 'relay_' + str(count)).replace('"', ''))/1000.0) + "\n")	

    if (config_output.get('output', 'chn_' + str(count)).replace('"', '') == "2"):
	out_file.write("proto = local\n")
	out_file.write("pin = " + config_output.get('general', 'relay_2').replace('"', '') + "\n")
	out_file.write("ip = none\n")
        out_file.write("time = " + str(float(config_output.get('output', 'relay_' + str(count)).replace('"', ''))/1000.0) + "\n")	

    if (config_output.get('output', 'chn_' + str(count)).replace('"', '') == "T"):
	text = config_output.get('output', 'relay_' + str(count)).replace('"', '').split('|')
	out_file.write("proto = TCP\n")
	out_file.write("pin = " + text[1] + "\n")
	out_file.write("ip = " + text[0] + "\n")
        out_file.write("time = " + str(float(text[2])/1000.0) + "\n")

    if (config_output.get('output', 'chn_' + str(count)).replace('"', '') == "U"):
	text = config_output.get('output', 'relay_' + str(count)).replace('"', '').split('|')
	out_file.write("proto = UDP\n")
	out_file.write("pin = " + text[1] + "\n")
	out_file.write("ip = " + text[0] + "\n")
        out_file.write("time = " + str(float(text[2])/1000.0) + "\n")


    out_file.close()
