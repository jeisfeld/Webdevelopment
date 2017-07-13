docker image build -t web-randomimage .
docker container run --rm -p 8306:80 -d --name web-randomimage web-randomimage
