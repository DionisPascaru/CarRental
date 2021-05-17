sudo docker run -p 3308:3306 --name car-rental-db -d \
 --restart unless-stopped \
 -v /home/dionis/_bootcamp/CarRental/docker-containers/db:/var/lib/mysql \
 -e MYSQL_ROOT_PASSWORD=root \
--network car_rental-network \
  mariadb:latest \
