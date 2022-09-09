# NNN Certificate

NNN Certificate Generator


## Screenshots

![image](https://user-images.githubusercontent.com/54795428/175811183-a9745adb-f6d4-416a-950c-beddf2da7378.png)
![image](https://user-images.githubusercontent.com/54795428/175811198-1ce3ad00-1814-4427-b94c-a602876d9214.png)


## Prerequisites

* XAMPP or Docker
* Node.js


## Run Locally

Clone the project

```bash
git clone https://github.com/jedymatt/nnn-certificate.git
```

Go to the project directory

```bash
cd nnn-certificate
```

Add .env file

```bash
cp .env.example .env
```

Install the dependencies

```bash
composer install
npm install
```

Recompile assets

```bash
npm run dev
```

Populate the tables to the database

```bash
php artisan migrate
```

Generate app key

```bash
php artisan key:generate
```

Start the server

```bash
php artisan serve
```


## Authors

- [@jedymatt](https://www.github.com/jedymatt)

