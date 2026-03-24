## Requirement
- PHP 8.3
- Web Server (Laragon/XAMPP)
- Composer
- Ngrok (optional)
- Code Editor (optional)



## Instalation
Clone Repository atau Download ZIP project ini
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


## Akun Dummy untuk Login
### Nakes
```json
'name' => 'John Doe',
'email' => 'nakes@gmail.com',
'password' => bcrypt('password'),
```


### Pasien
```json
'name' => 'Pasien',
'email' => 'patient@gmail.com',
'password' => bcrypt('password'),
```

