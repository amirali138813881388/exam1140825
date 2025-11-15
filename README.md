# PHP OOP Exam – Product List

این امتحان عملی ۳۰–۴۰ دقیقه‌ای است و روی مفاهیم زیر تمرکز دارد: `class`, `object`, `constructor`, access modifiers, `abstract class`, `interface`, inheritance، و خواندن داده با PDO. پروژه از قبل آماده است و شما فقط باید TODOها را کامل کنید.

---

## قوانین ضروری
- فقط بخش‌های نشانه‌گذاری‌شده با `TODO` را ویرایش کنید.
- از یادداشت‌های شخصی یا مستندات رسمی می‌توانید استفاده کنید؛ استفاده از ابزارهای هوش مصنوعی یا اشتراک‌گذاری کد ممنوع است.
- ساختار پوشه و نام فایل‌ها را دست‌نخورده نگه دارید.
- پس از اتمام کار باید بتوانید شفاهی از کد خود دفاع کنید.

---

## فایل‌هایی که باید ویرایش کنید
| فایل | کار |
| --- | --- |
| `config/student.php` | مقداردهی `STUDENT_ID`, `STUDENT_NAME`, `STUDENT_SECRET_PHRASE` با اطلاعات واقعی خودتان. |
| `src/Product.php` | پیاده‌سازی کلاس انتزاعی با سه پراپرتی محافظت‌شده، سازنده، متدهای `getTitle()`, `getPrice()` و متد انتزاعی `getTypeLabel()`. |
| `src/Sellable.php` | تعریف interface با متد `getFinalPrice(): int`. |
| `src/Book.php` | پیاده‌سازی کلاس فرزند که `Product` را extends و `Sellable` را implements می‌کند؛ سازنده، `getTypeLabel()` (برگرداندن `"Book"`)، و `getFinalPrice()` با ۱۰٪ تخفیف. |
| `src/Notebook.php` | مشابه Book اما `getTypeLabel()` → `"Notebook"` و `getFinalPrice()` بدون تخفیف. |
| `public/index.php` | ساخت اشیای `Book`/`Notebook` برای هر رکورد دیتابیس، پر کردن آرایه `$products` و استفاده از متدهای کلاس‌ها در خروجی HTML. |

---

## راه‌اندازی سریع
1. ریپو را fork و clone کنید.
2. دیتابیس MySQL به نام دلخواه (مثلاً `oop_exam`) بسازید.
3. فایل `db/init.sql` را اجرا کنید تا جدول `products` و داده اولیه ایجاد شود.
4. مشخصات اتصال در `db/db.php` (`$dsn`, `$user`, `$pass`) را با سیستم خود تنظیم کنید.
5. سرور PHP را روی `public/index.php` اجرا کنید (مثلاً `http://localhost/<project-folder>/public/index.php` و اگر سرور داخلی PHP را مستقیم اجرا می‌کنید، از دستور `php -S localhost:8000 -t public` استفاده کنید).

صفحه ابتدا فقط پیام خالی نشان می‌دهد؛ پس از تکمیل TODOها کارت محصولات نمایش داده می‌شود.

---

## سناریوی پروژه
- دو نوع محصول داریم: `book` و `notebook`.
- `db/db.php` داده‌ها را در `$rows` قرار می‌دهد.
- شما باید با استفاده از کلاس‌های OOP این داده‌ها را به اشیاء تبدیل کرده و در صفحه نمایش دهید.

گام‌های اصلی:
1. کلاس پایه (`Product`) و interface (`Sellable`) را کامل کنید.
2. دو کلاس فرزند (`Book`, `Notebook`) را با منطق قیمت نهایی پیاده‌سازی کنید.
3. در `public/index.php`، براساس ستون `type` شیء مناسب بسازید، در `$products` ذخیره کنید،‌ و در HTML از متدهای کلاس استفاده کنید.

---

## تحویل
1. پس از چند Task یک commit بزنید و پیام واضح بنویسید (مثلاً `Finish Product abstract class`).

موفق باشید! اگر ابهامی بود حتماً از مدرس سؤال کنید. 
