docker image build -t web-it-art .
docker container run --rm -p 8305:80 -d --name web-it-art web-it-art
