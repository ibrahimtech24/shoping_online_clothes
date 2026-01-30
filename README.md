# 🛍️ کورد مارکەت - فرۆشگای ئۆنلاین

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-3.x-003B57?style=for-the-badge&logo=sqlite&logoColor=white)

**فرۆشگایەکی ئۆنلاینی پڕیمیەم بە زمانی کوردی**

[سەیرکردنی دیمۆ](#) • [تایبەتمەندییەکان](#-تایبەتمەندییەکان) • [دامەزراندن](#-دامەزراندن)

</div>

---

## 📸 سکرینشۆت

<div align="center">
  <img src="public/images/screenshot-home.png" alt="پەڕەی سەرەکی" width="80%">
</div>

---

## ✨ تایبەتمەندییەکان

### 🎨 دیزاین
- **تیمی تاریک گلاسی** - دیزاینی پڕیمیەم بە ئیفێکتی شووشەیی
- **ڕیسپۆنسیڤ تەواو** - کاردەکات لە هەموو ئامێرەکان (مۆبایل، تابلێت، دێسکتۆپ)
- **ئەنیمەیشنی نەرم** - گواستنەوەی خۆش و پڕۆفیشناڵ
- **RTL پشتگیری** - بۆ زمانە ڕاست-بۆ-چەپەکان (کوردی، عەرەبی)

### 🛒 فرۆشگا
- **بەرهەمەکان** - نیشاندانی بەرهەم بە وێنە، نرخ، داشکاندن
- **کەتەگۆری** - پۆلێنکردنی بەرهەمەکان (جلی ئافرەتان، پیاوان، مندالان، پێلاو)
- **سەبەتەی کڕین** - زیادکردن، سڕینەوە، گۆڕینی ژمارە
- **داواکاری** - تەواوکردنی کڕین و شوێندانی داواکاری
- **گەڕان** - گەڕان بەدوای ناو، کەتەگۆری، نرخ

### 👤 بەکارهێنەر
- **چوونەژوورەوە/تۆمارکردن** - سیستەمی ئۆسێنتیکەیشن
- **پڕۆفایل** - بەڕێوەبردنی زانیاری کەسی
- **ئاگادارکردنەوە** - نۆتیفیکەیشنی داواکاری و بەرهەمی نوێ

### 🌐 زمان
- **کوردی (سۆرانی)** - زمانی سەرەکی
- **عەرەبی** - پشتگیری تەواو
- **ئینگلیزی** - پشتگیری تەواو

---

## 🛠️ تەکنەلۆژیاکان

| تەکنەلۆژی | وەسف |
|-----------|------|
| **Laravel 10** | فریمۆرکی PHP بۆ باکێند |
| **Tailwind CSS 3** | فریمۆرکی CSS بۆ ستایل |
| **Alpine.js 3** | فریمۆرکی JavaScript بۆ ڕیئاکتیڤتی |
| **SQLite** | داتابەیسی سوک و خێرا |
| **Vite** | بیلدەری مۆدێرن بۆ فرۆنتێند |
| **Font Awesome 6** | ئایکۆنەکان |
| **Noto Sans Arabic** | فۆنتی کوردی/عەرەبی |

---

## 📦 دامەزراندن

### پێداویستییەکان

- PHP 8.1+
- Composer
- Node.js 18+
- npm یان yarn

### هەنگاوەکان

```bash
# 1. کلۆنکردنی پڕۆژە
git clone https://github.com/ibrahimtech24/shoping_online_clothes.git
cd shoping_online_clothes

# 2. دامەزراندنی دیپێندێنسییەکانی PHP
composer install

# 3. دامەزراندنی دیپێندێنسییەکانی Node
npm install

# 4. کۆپیکردنی فایلی .env
cp .env.example .env

# 5. دروستکردنی کلیلی ئەپلیکەیشن
php artisan key:generate

# 6. دروستکردنی داتابەیس
touch database/database.sqlite

# 7. ڕانکردنی مایگرەیشنەکان
php artisan migrate

# 8. پڕکردنەوەی داتابەیس بە داتای نموونە
php artisan db:seed

# 9. لینککردنی storage
php artisan storage:link

# 10. بیلدکردنی ئەسێتەکان
npm run build

# 11. ڕانکردنی سێرڤەر
php artisan serve
```

ئێستا بچۆ بۆ `http://localhost:8000` 🎉

---

## 📁 ستراکچەری پڕۆژە

```
├── app/
│   ├── Http/
│   │   ├── Controllers/      # کۆنترۆڵەرەکان
│   │   └── Middleware/       # میدڵوێرەکان
│   ├── Models/               # مۆدێلەکان
│   └── Providers/            # پرۆڤایدەرەکان
├── database/
│   ├── factories/            # فاکتۆریەکان
│   ├── migrations/           # مایگرەیشنەکان
│   └── seeders/              # سیدەرەکان
├── resources/
│   ├── css/                  # فایلەکانی CSS
│   ├── js/                   # فایلەکانی JavaScript
│   └── views/                # بلەیدەکان
│       ├── components/       # کۆمپۆنێنتەکان
│       ├── products/         # پەڕەکانی بەرهەم
│       ├── cart/             # پەڕەی سەبەتە
│       ├── orders/           # پەڕەکانی داواکاری
│       └── website/          # پەڕەی سەرەکی
├── routes/
│   └── web.php               # ڕووتەکانی وێب
└── public/
    └── images/               # وێنەکان
```

---

## 🗄️ مۆدێلەکان

| مۆدێل | وەسف |
|-------|------|
| `User` | بەکارهێنەرەکان |
| `Product` | بەرهەمەکان |
| `Category` | کەتەگۆری سەرەکییەکان |
| `SubCategory` | ژێر-کەتەگۆرییەکان |
| `Size` | قەبارەکان |
| `ProductSize` | قەبارە و کۆگای بەرهەم |
| `Cart` | سەبەتەی کڕین |
| `CartItem` | بڕگەکانی سەبەتە |
| `Order` | داواکارییەکان |
| `OrderItem` | بڕگەکانی داواکاری |

---

## 🔐 ڕووتەکان

### بەکارهێنەر
| ڕووت | وەسف |
|------|------|
| `/login` | چوونەژوورەوە |
| `/register` | تۆمارکردن |
| `/profile` | پڕۆفایل |
| `/settings` | ڕێکخستنەکان |

### بەرهەمەکان
| ڕووت | وەسف |
|------|------|
| `/products` | لیستی بەرهەمەکان |
| `/products/{id}` | وردەکاری بەرهەم |
| `/categories` | کەتەگۆرییەکان |

### سەبەتە و داواکاری
| ڕووت | وەسف |
|------|------|
| `/cart` | سەبەتەی کڕین |
| `/checkout` | تەواوکردنی کڕین |
| `/orders` | داواکارییەکانم |

---

## 🎨 ڕەنگەکان

| ڕەنگ | کۆد | بەکارهێنان |
|------|-----|----------|
| سایان | `#06B6D4` | ڕەنگی سەرەکی |
| مۆر | `#A855F7` | ڕەنگی دووەم |
| سلەیت | `#0F172A` | پاشبنەما |
| سپی | `#FFFFFF` | نوسین |

---

## 📱 ڕیسپۆنسیڤ

- **مۆبایل**: `< 640px`
- **تابلێت**: `640px - 1024px`
- **دێسکتۆپ**: `> 1024px`

---

## 🚀 دیپلۆی

### بۆ پرۆداکشن

```bash
# بیلدکردنی ئەسێتەکان
npm run build

# کاشکردن
php artisan config:cache
php artisan route:cache
php artisan view:cache

# ئۆپتیمایزکردنی Composer
composer install --optimize-autoloader --no-dev
```

---

## 🤝 بەشداریکردن

بەشداریکردن پێشوازی لێدەکرێت! تکایە:

1. فۆرک بکە
2. براوچی نوێ دروست بکە (`git checkout -b feature/amazing-feature`)
3. کۆمیت بکە (`git commit -m 'Add amazing feature'`)
4. پوش بکە (`git push origin feature/amazing-feature`)
5. Pull Request بکەرەوە

---

## 📄 مۆڵەت

ئەم پڕۆژەیە لەژێر مۆڵەتی [MIT](LICENSE) بڵاوکراوەتەوە.

---

## 👨‍💻 پەرەپێدەر

**ئیبراهیم**

- GitHub: [@ibrahimtech24](https://github.com/ibrahimtech24)

---

<div align="center">

**دروستکراوە بە ❤️ لە کوردستان**

</div>
