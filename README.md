# NNN Certificate

NNN Certificate Generator


## Screenshots

![image](https://user-images.githubusercontent.com/54795428/175811183-a9745adb-f6d4-416a-950c-beddf2da7378.png)
![image](https://user-images.githubusercontent.com/54795428/175811198-1ce3ad00-1814-4427-b94c-a602876d9214.png)


## Demo

https://nnn-certificate.herokuapp.com


## Prerequisites

* XAMPP or Docker
* Node.js


## Run Locally

Clone the project

```shell
git clone https://github.com/jedymatt/nnn-certificate.git
```

Go to the project directory

```bash
cd nnn-certificate
```

Add .env file

```shell
cp .env.example .env
```

Install the dependencies

```shell
composer install
npm install
```

Recompile assets

```shell
npm run dev
```

Populate the tables to the database

```shell
php artisan migrate
```

Generate app key

```shell
php artisan key:generate
```

Start the server

```shell
php artisan serve
```


## Authors

- [@jedymatt](https://www.github.com/jedymatt)

