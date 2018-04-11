![Travis-CI](https://travis-ci.org/emielvangoor/project-test.svg?branch=master)

To run the app:

- docker-compose up
- docker-compose exec app composer update

App is running on http://localhost:8080/

To test:
- docker-compose exec app vendor/bin/phpunit
