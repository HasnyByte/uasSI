# 1. Clone repository
git clone https://github.com/HasnyByte/Web-JelajahAceh.git
cd Web-JelajahAceh

# 2. Pasang dependensi via Composer dan NPM
composer install
npm install
npm run dev

# 3. Buat file env dan generate key
cp .env.example .env
php artisan key:generate

# 4. Konfigurasi database di .env, lalu migrasi
php artisan migrate

# Opsional: seed data demo
php artisan db:seed

# 5. Jalankan local server
php artisan serve
