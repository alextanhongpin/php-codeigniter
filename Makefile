ENV ?= development
include .env.$(ENV)
export


start:
	@php spark serve


up:
	@docker-compose up -d


down:
	@docker-compose down


cli:
	@docker exec -it $(shell docker ps --filter='ancestor=mysql:8.0.32' -q) mysql


#https://github.com/PHP-CS-Fixer/PHP-CS-Fixer
fix:
	@tools/php-cs-fixer/vendor/bin/php-cs-fixer fix .
