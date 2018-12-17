import sys
from gpiozero import LED
from time import sleep

vcc = LED(4)
time = str(sys.argv[1])
time1 = int(time[0])
print ("A nice person has set the LED timer to ",time)
while True:
	vcc.on()
	sleep(time1)
	vcc.off()
	sleep(time1)
	

