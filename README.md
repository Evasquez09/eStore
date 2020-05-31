# eStore

Web system for Online Stores

## Installation

```shell script
git clone https://github.com/jdavidzapatab/eStore.git
cd eStore
docker-compose up -d
cp .env.example .env
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

## License
[GNU GPLv3](https://choosealicense.com/licenses/gpl-3.0/)
