docker image build -t web-emil .
docker container run --rm -p 8301:80 -d --name web-emil web-emil
