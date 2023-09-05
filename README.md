# Dockerfile Debian 10 for Laravel
Create a Docker Image with Debian 10, PHP 7.4, ODBC and SQLSRV

First of all, you need to build a new docker image from this Dockerfile. On your Dockerfile directory, run: <br>

```` windows
git clone https://github.com/araguaci/docker-debian10-php74-sqlsrv.git
cd ./docker-debian10-php74-sqlsrv
docker build ./docker-debian10-php74-sqlsrv -f ./Dockerfile-apache -t php74-sqlsrv
docker image build -t imgdebian10_php74 .
docker volume create voldebian10_php74
docker container run -d -p 8080:80 --mount type=volume,src=voldebian10_php74,dst=/var/www imgdebian10_php74
````

```` linux
git clone https://github.com/araguaci/docker-debian10-php74-sqlsrv.git
cd ./docker-debian10-php74-sqlsrv
sudo docker build --pull --rm -f "Dockerfile-apache" -t debiansqlsrvphp74 "."
sudo docker volume create voldebian10_php74
sudo docker container run -d -p 8080:80 --mount type=volume,src=voldebian10_php74,dst=/var/www debiansqlsrvphp74
````
