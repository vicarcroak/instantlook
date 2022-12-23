# Instantlook

### First Step
- Copy .env.example to .env

### Git Checkout To Develop

```bash
git checkout develop
```

### Composer Setup & Artisan Setup

```bash
composer install
php artisan migrate:fresh --seed
php artisan storage:link
php artisan key:generate
php artisan optimize:clear
php artisan serve --port=8888
```

### npm Setup

```bash
npm install
npm run build
npm run dev
```

### Git Checkout To Develop

```bash
git checkout -b "<categories>/<name_features_or_fixes>"
```

### Git Update After Code

```bash
git stash
git pull --all
git pull origin develop
git stash pop
git push origin "<categories>/<name_features_or_fixes>"
```

### Ready And GO!
