docker image build -t web-augendiagnose .
docker container run --rm -p 8307:80 -d --name web-augendiagnose web-augendiagnose
docker container run --rm -p 8308:80 -d --name web-miniris web-augendiagnose
