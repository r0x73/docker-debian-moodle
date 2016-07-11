# docker-debian-moodle
A Dockerfile that installs and runs Moodle 3.1 on Debian 8.5 with Apache, PHP 5.6, SSH and an external PostgreSQL database ([postgres](https://hub.docker.com/r/_/postgres/)).

## Installation
```
git clone https://github.com/rsnts/docker-debian-moodle
cd docker-debian-moodle
docker build -t debian-moodle .
```

## Usage
```
docker run -d -P --name moodle-psql -e POSTGRES_DB=moodle -e POSTGRES_USER=moodle -e POSTGRES_PASSWORD=moodle postgres:latest
docker run -d -p 80:80 -p 7331:7331 -v ~/local/moodledata:/var/moodledata --name moodle --link moodle-psql:db -e MOODLE_URL=http://CONTAINER_IP debian-moodle
```
