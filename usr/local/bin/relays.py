#!/usr/bin/env python

import RPi.GPIO as GPIO
import time
import ConfigParser
import sys
import os 

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
if len(sys.argv) == 2:
    if os.path.exists('/etc/linphone/outputs/' + sys.argv[1] + '.conf'):

	config_relay = ConfigParser.ConfigParser()
	config_relay.readfp(open(r'/etc/linphone/outputs/' + sys.argv[1] + '.conf'))
	
	enable = config_relay.get('relay', 'enable')
	if enable == '1':
	    pin = int(config_relay.get('relay', 'pin'))
	    to = float(config_relay.get('relay', 'time'))
	    
	    GPIO.setup(pin, GPIO.OUT)
	    
	    GPIO.output(pin,GPIO.HIGH)
	    time.sleep(to)
	    GPIO.output(pin,GPIO.LOW)
	    GPIO.cleanup()

