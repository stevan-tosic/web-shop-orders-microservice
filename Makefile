PHONY :=
.DEFAULT_GOAL := help
SHELL := /bin/bash

OS := $(shell uname -s)

help:
	$(call colorecho, "\nProject Commands\n")
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e "s/##//"
##
##        .
##       ":"
##     ___:____     |"\/"|
##   ,'        `.    \  /
##   |  O        \___/  |
## ~^~^~^~^~^~^~^~^~^~^~^~^~
##
##
## Welcome to this Project to get you started type 'make help'

##
##Docker Commands
##---------------------------------------------------------------------------

PHONY += up
up:			## Launch project
up:
	$(call colorecho, "\nStarting project on $(OS)")
	@docker-compose up -d

PHONY += down
down: 			## Tear down project
	$(call colorecho, "\nTear down project docker\n\n- Stoping all containers...\n")
	@docker-compose down

PHONY += restart
restart:		## Restart Docker
restart: down up logs

PHONY += install
install:		## Install project
install:
	$(call colorecho, "\nInstalling project on $(OS)")
	@echo -n "You are about to install whole new project. Are you sure? " && read ans && [ $$ans == y ]
	$(call colorecho, "\nSyncing enviorment files. Copy '.env.dist'  -> '.env'")
	yes | cp -rf api/.env.dist api/.env
	yes | cp -rf api/public/.htaccess.dist api/public/.htaccess
	@docker-compose up -d
	timeout 60
	@xdg-open http://localhost:12020/api

PHONY += ps
ps:			## Docker containers process status
ps:
	$(call colorecho, "\nDocker containers process status $(OS)")
	@docker-compose ps

##
##SSH (Docker)
##---------------------------------------------------------------------------

PHONY += ssh-api
ssh-api:		## SSH to API container
ssh-api:
	$(call colorecho, "\nSSH to API container (php docker image):\n")
	@docker exec -it php /bin/sh

##
##Tests
##---------------------------------------------------------------------------

PHONY += test
test:			## Run PHP and Javascript tests
test: tf lcsss cc lcss unit-full behat phpstan phpcs

PHONY += cc
cc:			## Run Code Quality test with GrumPHP
	$(call colorecho, "\nCode Quality test with GrumPHP:\n")
	@docker exec -it php bin/console container:dump
	@docker cp php:/srv/api/var/containerDump/appDevDebugProjectContainer.xml api/var/containerDump/appDevDebugProjectContainer.xml
	@cd ./api; \
    	php -d memory_limit=-1 bin/grumphp run

PHONY += phpstan
phpstan:		## Run phpstan with custom configuration
	@api/bin/phpstan analyse -c api/rulesets/phpstan.neon -l 7 api/src

PHONY += psalm
psalm:			## Run vimeo/psalm Events
	@api/vendor/bin/psalm --config=api/rulesets/psalm.xml

PHONY += coverage
coverage:		## Run PHP Unit Tests Coverage Report
	@docker exec -it php composer coverage
	@xdg-open http://localhost:63342/docker-base-environmnet/api/tests/reports/coverage/index.html

PHONY += lc
lc:			## Open Last Coverage Report
lc:
	@xdg-open http://localhost:63342/docker-base-environmnet/api/tests/reports/coverage/index.html

PHONY += unit
unit:			## Run PHPUnit test on project, or specify path to test path=/destination_file_or_directory
unit:
	@api/vendor/brianium/paratest/bin/paratest -p12 --colors -c api/rulesets --exclude-group=stupid-container --phpunit=api/vendor/bin/phpunit $(path)

PHONY += unit-full
unit-full:		## Run full PHPUnit test on project
unit-full:
	@api/vendor/brianium/paratest/bin/paratest -p12 --colors -c api/rulesets --exclude-group=stupid-container --phpunit=api/vendor/bin/phpunit api/tests/phpunit/

PHONY += cunit
cunit:			## Run PHPUnit coverage tests on project, or specify path to test path=/destination_file_or_directory
cunit:
	@api/vendor/bin/phpunit -c api/rulesets --coverage-text $(path)

##
##Logs
##---------------------------------------------------------------------------

PHONY += logs-api
logs-api:		## View Logs from api PHP Container
logs-api:
	@docker-compose logs -f php

PHONY += logs
logs:			## View Logs from Docker
logs:
	@docker-compose logs -f

PHONY += appl
appl:			## View Application Logs from Docker
appl:
	@docker exec -it php tail -f /srv/api/var/log/dev.log

PHONY += mail
mail:			## View email on local
mail:
	@xdg-open http://localhost:1081/


##
##API Database commands
##---------------------------------------------------------------------------

PHONY += db-create-migration
db-create-migration:	## Create Migration files
db-create-migration:
	$(call colorecho, "\nCreating Database Migration:\n")
	@docker exec php bin/console doctrine:cache:clear-metadata
	@docker exec php bin/console make:migration

PHONY += db-migrate
db-migrate:		## Migrate database
db-migrate:
	$(call colorecho, "\nMigrating Project Datase\n")
	@docker exec php bin/console doctrine:migrations:migrate

##
##Cache commands
##---------------------------------------------------------------------------

PHONY += clc
clc:			## Clear API (Symfony) cache command
	$(call colorecho, "\nClearing Cache for PHP contianer\n")
	@docker exec php rm -Rf var/cache
	@docker exec php composer dump-autoload --optimize --classmap-authoritative --ansi
	@docker exec php php bin/console cache:warmup

##
##Debug
##---------------------------------------------------------------------------

PHONY += xon
xon:			## Enable XDebuger on PHP container
xon:
	@docker exec php chmod 666 /var/log/xdebug.log
	@docker exec php mv /usr/local/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
	@docker exec php kill -USR2 1
	$(call colorecho, "\nxdebuger is ON\n")

PHONY += xoff
xoff:			## Disable XDebuger on PHP container
xoff:
	@docker exec php mv /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini /usr/local/docker-php-ext-xdebug.ini
	@docker exec php kill -USR2 1
	$(call colorecho, "\nxdebuger is switched OFF\n")


define colorecho
	@tput -T xterm setaf 3
	@shopt -s xpg_echo && echo $1
	@tput -T xterm sgr0
endef
