# flex.symfony.com bridge

* Launch this project with the command below:
```
    php -S localhost:80 index.php
```

* Under the Symfony project, use the commands below to update dependencies:
```
    composer config secure-http false
    NO_PROXY=localhost SYMFONY_ENDPOINT=http://localhost composer update
    composer config --unset secure-http
```
