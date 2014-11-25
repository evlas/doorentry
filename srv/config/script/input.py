#!/usr/bin/env python

import ConfigParser

config_output = ConfigParser.ConfigParser()
config_output.readfp(open(r'/srv/config/board.conf'))

if (config_output.get('input', 'keyboard').replace('"', '') == "buttons"):
    for count in range(1,9):
	pin = config_output.get('general', 'input_' + str(count)).replace('"', '')
	
	print count

	out_file = open("/srv/config/inputs/buttons/" + pin + ".conf","w")
	out_file.write("[button]\n")

	if (config_output.get('input', 'en_' + str(count))):
	    out_file.write("enable = 1\n")
	else:
	    out_file.write("enable = 0\n")

	out_file.write("called = " + config_output.get('input', 'button_' + str(count)).replace('"', '') + "\n")

        out_file.close()
