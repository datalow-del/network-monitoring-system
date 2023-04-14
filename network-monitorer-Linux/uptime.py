import os
 # Define uptim_d variable as uptime duration using os module
uptime_d = os.popen('uptime -p').read()[:-1]
print(uptime_d)

