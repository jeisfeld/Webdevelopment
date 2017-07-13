docker image build -t web-therapiezentrum-dante .
docker container run --rm -p 8304:80 -d --name web-therapiezentrum-dante web-therapiezentrum-dante
