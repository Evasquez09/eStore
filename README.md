# eStore

Web system for Online Stores

## Installation

```shell script
git clone https://github.com/jdavidzapatab/eStore.git
cd eStore
cp .env.example .env
docker-compose build app
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
```

## Usage

### For Development

```shell script
git checkout dev
docker-compose up -d
docker-compose exec app vendor/bin/phpunit
```

To shut down:

```shell script
docker-compose down
```

## License
[GNU GPLv3](https://choosealicense.com/licenses/gpl-3.0/)
