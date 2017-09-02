import urllib
for i in range(1,600):
	url="https://qqdie.com/usr/themes/yodu/img/sj/"+str(i)+".jpg"
	name=str(i)+".jpg"
	urllib.urlretrieve(url,name)
	

print "OK"