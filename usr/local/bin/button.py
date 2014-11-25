#!/usr/bin/env python2.7
# script by Alex Eames http://RasPi.tv

import RPi.GPIO as GPIO
import time
import ConfigParser
import sys
import os

GPIO.setwarnings(False)

GPIO.setmode(GPIO.BCM)

# GPIO 23 .. 26 set up as inputs. Pulled up.
GPIO.setup(19, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(20, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(21, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(22, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(23, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(24, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(25, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(26, GPIO.IN, pull_up_down=GPIO.PUD_UP)

# now we'll define the threaded callback function
# this will run in another thread when our event is detected
def my_callback(channel):
    print channel
    if os.path.exists('/etc/linphone/inputs/buttons/' + str(channel) + '.conf'):
        config_relay = ConfigParser.ConfigParser()
	config_relay.readfp(open(r'/etc/linphone/buttons/' + str(channel) + '.conf'))
	print '/etc/linphone/inputs/buttons/' + str(channel) + '.conf'
	enable = config_relay.get('button', 'enable')
	if enable == '1':
	    called = config_relay.get('button', 'called')
	    os.system("su www-data -c 'linphonecsh generic terminate'")
	    os.system("su www-data -c 'linphonecsh dial " + called + "'")

# The GPIO.add_event_detect() line below set things up so that
# when a rising edge is detected on port 24, regardless of whatever 
# else is happening in the program, the function "my_callback" will be run
# It will happen even while the program is waiting for
# a falling edge on the other button.

GPIO.add_event_detect(19, GPIO.RISING, callback=my_callback, bouncetime=300)
GPIO.add_event_detect(20, GPIO.RISING, callback=my_callback, bouncetime=300)
GPIO.add_event_detect(21, GPIO.RISING, callback=my_callback, bouncetime=300)
GPIO.add_event_detect(22, GPIO.RISING, callback=my_callback, bouncetime=300)
GPIO.add_event_detect(23, GPIO.RISING, callback=my_callback, bouncetime=300)
GPIO.add_event_detect(24, GPIO.RISING, callback=my_callback, bouncetime=300)
GPIO.add_event_detect(25, GPIO.RISING, callback=my_callback, bouncetime=300)
GPIO.add_event_detect(26, GPIO.RISING, callback=my_callback, bouncetime=300)

try:
    while 1:
        time.sleep(60)

except KeyboardInterrupt:
    GPIO.cleanup()       # clean up GPIO on CTRL+C exit
GPIO.cleanup()           # clean up GPIO on normal exit


