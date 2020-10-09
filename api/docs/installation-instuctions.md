# Installation instructions (stage & prod)
In order to successfully deploy the project, following actions are needed:
  * [Deploy code](#code-deployment)
  * [Setup Websockets](#websockets-setup)
  * [Setup database](#database-setup)
  * [Run database migrations](#database-migrations)
  * [Setup OAuth clients](#oauth-clients-setup)

## Code deployment
### Dev environment
On **dev** environment, build code for production in the following way
  * `cd ${PROJECT_ROOT} && git pull`
  * [Setup project environment config files](#project-environment-config-file-setup)
  * `cd ${PROJECT_ROOT}/client && npm run client:build`
  * `cd ${PROJECT_ROOT}/api && composer deploy`

Replace `${PROJECT_ROOT}` with the path to the project

### @devops Stage and Prod environments
On **stage** and **prod** environments, code is deployed in the following way
  * Deploy code on dev environment and build for production
  * Verify the build completed successfully
  * Verify that all tests pass successfully
  * rsync the code from dev environment to the target environment
    * Pay attention to not overwrite configuration files (`client/.env`, `api/.env`) on the target environment
    * Stage and Prod environments must have identical configuration, especially php versions, installed modules and system packages that affect php 

## Websockets setup

* We use supervisor to run webosockets. 
Copy `api/websocket/websocket.ini` to server `/etc/supervisord.d/websocket.ini` .
Configure file `/etc/supervisord.d/websocket.ini` with your environment settings. 

### Project environment config file setup
This project has two environment config files

## OAuth clients setup
  * `composer create-oauth-clients -d ${PROJECT_PATH}/api`

Replace `${PROJECT_PATH}` with path to the project. Example: `/var/www/oneplatform`


#### Installing SAML keys for SSO with Coursera

Copy following keys from `api/docs` to `api/secrets` folder:

        [project_dir]/api/docs/sso_keys/saml/private.pem -> [eop_project_dir]/api/secrets/saml/private.pem
        [project_dir]/api/secrets/saml/X.509.cert -> [eop_project_dir]/api/secrets/saml/X.509.cert


Replace `${PROJECT_PATH}` with path to the project. Example: `/var/www/project_name`

Replace `${PROJECT_PATH}` with path to the project. Example: `/var/www/project_name`
