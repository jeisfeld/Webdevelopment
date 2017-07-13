docker image build -t web-spirituelle-seelenreise .
docker container run --rm -p 8302:80 -d --name web-spirituelle-seelenreise web-spirituelle-seelenreise
