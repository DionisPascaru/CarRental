sudo docker run -p 81:80 -p 8822:22 --name car-rental-project -d \
	--restart unless-stopped \
	-v /home/dionis/_bootcamp/CarRental:/var/www/html \
	--network car_rental-network \
	amoraresco/it-academy-project:latest \
