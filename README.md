## Requirement
- PHP 8.3
- Web Server (Laragon/XAMPP)
- Ngrok
- Code Editor (Optional)



## Instalation
Clone Repository
```sh
git clone https://github.com/CODER-Telkom-University-Surabaya.git
```
Tulis perintah dibawah in untuk menginstal depedensi yang di perlukan 
```sh
composer install

npm install
```

Lalu copy file .env 
```sh
cp .env.example .env
```

Setelah itu lakukan generate key
```sh
php artisan key:generate
```

Jalankan migration dan seeder
```sh
php artisan migrate

php artisan migrate:fresh --seed
```

## Running Project
```sh
php artisan serve    

npm run dev
```