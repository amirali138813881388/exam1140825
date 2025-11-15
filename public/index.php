<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/student.php';
require_once __DIR__ . '/../db/db.php';
require_once __DIR__ . '/../src/Product.php';
require_once __DIR__ . '/../src/Sellable.php';
require_once __DIR__ . '/../src/Book.php';
require_once __DIR__ . '/../src/Notebook.php';

/**
 * NOTE TO STUDENTS:
 * - Do NOT change the general HTML structure.
 * - Complete only the TODO sections in PHP code.
 */

$products = [];

// TODO(Task 5):
// Loop over $rows (fetched from the database) and create the correct
// object type for each row:
// - if $row['type'] === 'book'     → new Book(...)
// - if $row['type'] === 'notebook' → new Notebook(...)
// Then push each created object into the $products array.

?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Exam – Product List</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="app-background" aria-hidden="true"></div>

<header class="site-header">
    <div class="site-header__content">
        <div>
            <p class="eyebrow">Practical PHP Exam</p>
            <h1>PHP OOP Exam – Product List</h1>
            <p class="subtitle">
                Build abstract classes + interfaces, then render store data in a polished UI.
            </p>
        </div>
        <div class="student-meta glass-panel">
            <p><strong>Student ID:</strong> <?php echo STUDENT_ID; ?></p>
            <p><strong>Student Name:</strong> <?php echo STUDENT_NAME; ?></p>
        </div>
    </div>
</header>

<main class="site-main">
    <section class="hero">
        <div class="hero__content">
            <h2>Design the OOP Core, Let the UI Shine</h2>
            <p>
                داده‌ها از دیتابیس خوانده می‌شوند و بعد از تکمیل TODOها، کارت‌های محصولات به شکل
                یک فروشگاه مدرن نمایش داده می‌شوند. روی منطق PHP تمرکز کنید؛ ظاهر از قبل آماده است.
            </p>
            <ul class="hero__highlights">
                <li>Abstract base class + interface</li>
                <li>Book &amp; Notebook inheritance</li>
                <li>PDO-powered data grid</li>
            </ul>
        </div>
        <div class="hero__visual">
            <div class="glow-card">
                <p class="glow-card__label">Live Preview</p>
                <p class="glow-card__value">Responsive UI</p>
                <span class="spark"></span>
            </div>
            <div class="gradient-ring"></div>
        </div>
    </section>

    <section class="product-list-section">
        <div class="section-heading">
            <div>
                <p class="eyebrow">Task Output</p>
                <h2>Products</h2>
            </div>
            <p class="section-subtitle">
                پس از ساخت اشیاء و فراخوانی متدها، این لیست به صورت خودکار به‌روز می‌شود.
            </p>
        </div>

        <?php if (empty($products)): ?>
            <div class="empty-state glass-panel">
                <h3>Nothing to show… yet!</h3>
                <p>
                    No products yet. Complete the PHP OOP tasks to see the list here.
                </p>
            </div>
        <?php else: ?>
            <div class="products" data-products-grid>
                <?php foreach ($products as $product): ?>
                    <article class="product-card" data-product-card>
                        <header>
                            <p class="badge">Coming from database</p>
                            <h3 class="product-title">
                                <!-- TODO(Task 6): echo the product title using getTitle() -->
                            </h3>
                            <p class="product-type">
                                <!-- TODO(Task 6): echo the product type label using getTypeLabel() -->
                            </p>
                        </header>
                        <dl class="product-prices">
                            <div>
                                <dt>Base price</dt>
                                <dd class="product-price">
                                    <!-- TODO(Task 6): echo the base price using getPrice() -->
                                </dd>
                            </div>
                            <div>
                                <dt>Final price</dt>
                                <dd class="product-final-price">
                                    <!-- TODO(Task 6): echo the final price using getFinalPrice() -->
                                </dd>
                            </div>
                        </dl>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</main>

<footer class="site-footer">
    <p>Secret phrase: <?php echo STUDENT_SECRET_PHRASE; ?></p>
</footer>
<script src="assets/app.js"></script>
</body>
</html>
