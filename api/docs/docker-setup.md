#### Docker guide
  * Setup docker and docker-compose on your environment
    * https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-18-04 (or https://docs.docker.com/install/linux/docker-ce/ubuntu/#install-docker-ce)
    * https://docs.docker.com/compose/install/
  * You will need the following ports open:
    * 81 (ReactJS client)
    * 8082 (nginx)
    * 5433 (pgAdmin)
    * 5434 (postgresql)
    * 6382 (redis)
    * 9201 (elasticsearch)
    * 1081 (mailcatcher)
    * 9001 (xdebug)
  * Add to your `/etc/hosts` file:
```
127.0.0.1 redis-client
127.0.0.1 db
127.0.0.1 elasticsearch
127.0.0.1 api.local
127.0.0.1 platform.local
```
  * Add commonly used scripts from [bash-scrips](api/docs/scripts/bash-scripts.sh) to your ~/.bashrc file (set PROJECT_PATH to your project path), and after saving file run
    * `source ~/.bashrc` - to load them into the current user session
  * Delete client/node_modules and client/package-lock.json if they exist:
    * `rm -rf client/node_modules client/package-lock`  
  * Create docker network `docker network create test-network`
  * Run 
    * `docker-compose up -d` - if docker settings have not changed from the last build
    * `docker-compose up -d --build --force-recreate` - if docker settings have changed from the last build
  * Run 
    * `docker-compose logs -f` / (`dc-l`) - to check for errors
  * Wait approx 60s for the containers to finish building
  * Verify that all containers are up and running:
    * `docker ps -a` / (`d-ps`)
  * If you are running the project for the first time, run:
    * `d-create-user` - To create the admin user. The command will output the login credentials for the platform. 
    * Enter in API container (`de-api`) and run `composer import-taxonomies` 
  * Run 
    * `d-develop` - to update DB schema, run migrations, setup cache etc.
  * Setup xdebug (Linux):
    * Edit the last lines of your php.ini file for Linux environment
    * Rebuild your PHP container: `docker-compose up -d --build --force-recreate php`
    * Configure your PHPStorm xdebug settings: 
      * https://ibb.co/nv4GPK
      * https://ibb.co/e0KcWz
      * https://ibb.co/juHWrz
    * Start listening for PHP xdebug connections
    * Setup breakpoints and trigger requests to verify that the xdebug is working 
    
###### The following services should be available:
  * client:
    * [http://localhost:12010/](http://localhost:12010/)
  * api/nginx:
    * [http://localhost:12020/](http://localhost:12020/)
  * redis:
    * `redis-cli -p 6381`
    * `redis-cli -p 6382`
  * elasticsearch:
    * [http://localhost:9201](http://localhost:9201)
  * mailcatcher:
    * [http://localhost:1081/](http://localhost:1081)
  * postgresql (default settings from docker-compose.yml db container):
    * name: api
    * user: api-platform
    * pass: !ChangeMe!
    * port: 5434
  * xdebug
    * listening on port 9001

###### Commands you will need:
  * `d-lint`
    * Code check - client
  * `d-code-check`
    * Code check - api
  * `d-develop`
    * Build - api
  * `d-npm-install`
    * Build - client
  * `d-client-build`
    * Build - client (for production)
  * `d-coverage`
    * Publishes coverage report to url: [http://localhost:63342/mars/reports/coverage/index.html](http://localhost:63342/mars/reports/coverage/index.html) 
      
###### Things to know
  * When you change .env settings, run:
    * `docker-compose up -d`
  * When you change docker-compose.yml settings, run: 
    * `docker-compose up -d`
  * When you change php.ini settings, run:
    * `docker-compose up -d --build --force-recreate php` 
  * Always run `npm install` from within the client container with `d-npm-install`. Running it from your local environment (if you have npm installed) will probably mess up your node_modules ecosystem. If you do that by mistake, remove `node_modules` and `package-lock.json` files and rebuild the client container.
  * Always run `composer code-check` from your local environment, as git and .git files are not available in the container. 
  * Always run `composer coverage` from your local environment, as it needs to publish the coverage report.
  * Aways run `composer develop` from within the php container with `d-develop`.
  * You should always have client container log running in order to check for webpack errors.

###### Troubleshooting
  * In case of issues with elasticsearch), run:
    * `sudo sysctl -w vm.max_map_count=262144`
    * If that does not work, run: `echo "vm.max_map_count=262144" | sudo tee -a /etc/sysctl.conf` - one time only
    * To clear all data from elastic, run `curl -X DELETE 'http://elasticsearch:9201/_all'`
  * In case of issues with permissions, run commands on the appropriate folders:
```
sudo chown $USER:$USER . -R
sudo chmod 777 api/public -R
sudo chmod 777 api/var -R
sudo chmod 777 api/vendor -R
```
  * If you already have node and npm installed on your local machine, in case of issues with client
    * Update node to `> 10.6.0` and npm to `> 6.1.0` 
    * `rm -rf client/node_modules package-lock.json`
    * `docker-compose up -d --build --force-recreate client` - to rebuild client container
  * If docker build settings change or your containers get corrupted, run 
    * `docker-compose up -d --build --force-recreate` - in order to recreate your containers. 
  * In case previous failed builds have corrupted the cache, you might need to delete all docker data from your machine:
```
docker ps -qa | xargs docker rm -f
docker system prune -af
docker network prune -f
docker volume ls -q | xargs docker volume rm -f
```
