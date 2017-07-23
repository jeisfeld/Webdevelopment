docker image build -t web-je .

docker container run -p 8100:80 ^
	-v D:/Git/Webdevelopment/it-art/web:/var/www/html/it-art ^
	-v D:/Git/Webdevelopment/angelikabartels/web:/var/www/html/spirituelle-seelenreise ^
	-v D:/Git/Webdevelopment/augendiagnose/web:/var/www/html/augendiagnose ^
	-v D:/Git/Webdevelopment/augendiagnose/web:/var/www/html/miniris ^
	-v D:/Git/Webdevelopment/randomimage/web:/var/www/html/randomimage ^
	-v D:/Git/Webdevelopment/naturheilkunde-praxis/web:/var/www/html/naturheilkunde-praxis ^
	-v D:/Git/Webdevelopment/therapiezentrum-dante/web:/var/www/html/therapiezentrum-dante ^
	-v D:/Git/Webdevelopment/emil/web:/var/www/html/emil ^
	-v D:/Git/Webdevelopment/index.html:/var/www/html/index.html ^
	--rm -d --name web-je web-je
