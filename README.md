## Folders structure
  * `api/` - Symfony4 application - API
    
## Project prerequisites
  To be able to run project in docker container you will need to have following libraries installed:
  - [docker](https://docs.docker.com/engine/install/)     
  - [docker-compose](https://docs.docker.com/compose/install/)     
  - makefile - If you do not have makefile installed on your system you will need to install it or to run setup manually by following [Installation instuctions (dev)](api/docs/installation-instuctions-development.md)

## Project setup
  Run ```make install``` command   
  or follow [Installation instuctions (dev)](api/docs/installation-instuctions-development.md)
 
#### Code architecture
  * Class naming concise and intuitive. Duplicate names are ok. Differentiation is done by namespaces. 
  * Slim Classes - One public method per class. Private methods are ok.
  * For the new API endpoints, use actions instead of controllers. Examples of [AbstractAction](api/src/Utils/AbstractAction.php).
  * Code is structured in folders that mimic GUI sections that uses them.
  * Use Repository Interface instead of injecting Doctrine implementations.
  * Repositories should contain only basic methods (findById, findBy, save). For more complex queries use QueryObjects.
  * More about used [code architecture](api/docs/architecture.md).

#### Standards
  * [Symfony coding standards](http://symfony.com/doc/master/contributing/code/standards.html)

#### PHP static analysis tools used for reporting and pre-commit checks
  * [phpstan (level 7)](https://github.com/phpstan/phpstan)
  * [psalm](https://github.com/vimeo/psalm)
  * [phpmd (LSEG CC)](https://github.com/nikic/PHP-Parser)
  * [phpcs (Symfony standards)](https://github.com/squizlabs/PHP_CodeSniffer)
  * [phpcpd](https://github.com/sebastianbergmann/phpcpd)
  * [phpparser](https://github.com/nikic/PHP-Parser)
  * [phpqa](http://symfony.com/doc/master/contributing/code/standards.html)
  * [phplock](https://github.com/sebastianbergmann/phploc)
  * [pdepend](https://github.com/pdepend/pdepend)
  * [PhpMetrics](https://github.com/phpmetrics/PhpMetrics)
  * [phplock](https://github.com/sebastianbergmann/phploc)

## Server configuration
  * [php.ini](api/docs/configuration/php.ini)
