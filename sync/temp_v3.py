#!/usr/bin/python
 
from subprocess import Popen , PIPE
from time import sleep
 
SLAVE_ADDR = 0x48
DELAY = 3 #in seconds
 
 
def main():
	try:
		while True:
			p = Popen(['i2cget' , '-y' , '1' , str(SLAVE_ADDR) , '0x00' , 'w'] ,\
			 stdout=PIPE)
			output = p.stdout.read()
			temperature = getTemperature(int(output , 16))
			
			print "Current temperature is %s degree celsius" % (str(temperature))
			#print "Waiting " + DELAY + " seconds..."
 
			sleep(DELAY)
	except KeyboardInterrupt:
		print "Execution canceled by user."
 
 
def getTemperature(rawData):
	"""
	Note: You'll get data in reverse order from sensor:
		|low byte|high byte|
		     0x80|0E
	"""
	degrees = rawData & 0xFF 	#cut high byte off, get low byte000
	degreesAfterDecimal = rawData >> 15	#shift msb to lsb place
 
	if (degrees & 0x80) != 0x80:	  #msb in low byte is 0 -> positive temperature
		return degrees + degreesAfterDecimal * 0.5
	else:	#msb in low byte is 1 -> negative temperature
		#calc two's complement
		degrees = -((~degrees & 0xFF) + 1)
		return degrees + degreesAfterDecimal * 0.5
 
 
if __name__ == "__main__":
	main()
