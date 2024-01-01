CONTAINER_NAME = laravel-docker

first_setup:
	@make build
	@make up 
	@make create_app
	@make composer-update
	@make change_owner

setup:
	@make build
	@make up 
	@make composer-update
	@make change_owner

change_owner:
	sudo chown -R $(USER):$(USER) laravel-app
	ls -l

build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec $(CONTAINER_NAME) bash -c "composer update"
# Executar com o arquivo .env configurado
data:
	docker exec $(CONTAINER_NAME) bash -c "php artisan migrate"
	docker exec $(CONTAINER_NAME) bash -c "php artisan db:seed"

create_app:
	docker exec $(CONTAINER_NAME) bash -c "composer create-project laravel/laravel ."

