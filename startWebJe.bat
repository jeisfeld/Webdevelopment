docker image build -t web-je .

docker container run -p 8100:80 ^
	-v d:/Git/Webdevelopment/it-art/web:/var/www/html/it-art ^
	-v d:/Git/Webdevelopment/angelikabartels/web:/var/www/html/spirituelle-seelenreise ^
	-v d:/Git/Webdevelopment/augendiagnose/web:/var/www/html/augendiagnose ^
	-v d:/Git/Webdevelopment/augendiagnose/web:/var/www/html/miniris ^
	-v d:/Git/Webdevelopment/randomimage/web:/var/www/html/randomimage ^
	-v d:/Git/Webdevelopment/naturheilkunde-praxis/web:/var/www/html/naturheilkunde-praxis ^
	-v d:/Git/Webdevelopment/therapiezentrum-dante/web:/var/www/html/therapiezentrum-dante ^
	-v d:/Git/Webdevelopment/emil/web:/var/www/html/emil ^
	-v d:/Git/Webdevelopment/index.html:/var/www/html/index.html ^
	--rm -d --name web-je web-je
