docker image build -t web-naturheilkunde-praxis .
docker container run --rm -p 8303:80 -d --name web-naturheilkunde-praxis web-naturheilkunde-praxis
