import speedtest
s = speedtest.Speedtest()

downspeed = round((round(s.download()) / 1048576), 2)
upspeed = round((round(s.upload()) / 1048576), 2)
print(f" downspeed: {downspeed} Mb/s, upspeed: {upspeed} Mb/s", "on venet0 interface.")
