# Project setup (development)
In order to successfully deploy the project, following actions are needed:
  * [Install additional packages (development)](#package-install-development)
  * [Deploy code (development)](#code-deployment-development)
  * [Additional project setup (development)](#additional-project-setup-development)

## Package install (development)
  * Install php, relevant php modules and redis-cli, you will need them to run composer scripts on your machine:
    * `sudo apt-get install -y php php-intl php-soap php-xdebug php-xml php-curl php-zip php-mbstring php-pgsql php-gmp redis-tools php-bcmath php-intl postgresql-client-common postgresql-client`
    * Note: Version of PHP must be `7.3`
    
## Code deployment (development)
  * `cd ${PROJECT_ROOT} && git pull`
  * [Setup project environment config files](#project-environment-config-file-setup)
  * From PROJECT ROOT FOLDER, run:
    * `sudo chmod 777 api/public/ -R`
    * `sudo chown $USER:$USER api/public/ -R`

Replace `${PROJECT_ROOT}` with the path to the project
  
## Project environment config file setup
   * This project has two environment config files
   * Setup `client/.env` from `client/.env.dist` and `api/.env` from `api/.env.dist`.` 
   * Make the following changes in `client/.env` file:
       * MESSAGING_WEBSOCKET_URL=https://socket.elite.local

## Additional project setup (development) 
  * Overwrite contents of `.git/hooks/commit-msg` with contents from `api/docs/git/commit-msg`

### Docker setup
  * [Setup Docker](docker-setup.md)

### WebSockets

* Modify web-pack-dev-server settings in client/node_modules directory:
  * (with *sudo* on linux if doesnt work) `sed -i  's/port: urlParts.port/port: 443/g'  client/node_modules/webpack-dev-server/client/index.js` (execute this command in project root directory)
  * On MacOS change this file manually :
      * File: 'client/node_modules/webpack-dev-server/client/index.js`
      * Replace String *port: urlParts.port* with *port: 443* (Should be line *248*)
* Enter the client container with `de-client` and run:
  * `node faye.js 8000`
  
### Setup HAProxy
  * [HAProxy](haproxy/HAPROXY_SETUP.md)
