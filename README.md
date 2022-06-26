# NNN Certificate

![image](https://user-images.githubusercontent.com/54795428/175811183-a9745adb-f6d4-416a-950c-beddf2da7378.png)
![image](https://user-images.githubusercontent.com/54795428/175811198-1ce3ad00-1814-4427-b94c-a602876d9214.png)

## Prerequisites

* XAMPP or Docker
* Node.js

## Run Locally

Clone the repository and go to nnn-certificate directory
```shell
git clone https://github.com/jedymatt/nnn-certificate.git

cd nnn-certificate
```

Generate .env file
```shell
cp .env.example .env
```

Then, configure the .env file according to your use case.

Install the dependencies and then compile the assets
```shell
composer install

npm install
npm run hot # or npm run dev
```

Populate the tables to the database
```shell
php artisan migrate
```

Generate app key
```shell
php artisan key:generate
```

Run the application
```shell
php artisan serve
```

Finally, visit http://localhost:8000 to view the site.
