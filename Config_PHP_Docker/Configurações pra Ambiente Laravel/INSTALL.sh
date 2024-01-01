DIR_APP="LARAVEL-DOCKER"

mkdir $DIR_APP
mv Dockerfile $DIR_APP
mv docker-compose.yml $DIR_APP
mv Makefile $DIR_APP

make -C $DIR_APP/ first_setup

mv INSTALL.sh $DIR_APP
