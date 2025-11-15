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
<header class="site-header">
    <h1>PHP OOP Exam – Product List</h1>
    <div class="student-meta">
        <p><strong>Student ID:</strong> <?php echo STUDENT_ID; ?></p>
        <p><strong>Student Name:</strong> <?php echo STUDENT_NAME; ?></p>
    </div>
</header>

<main class="site-main">
    <section class="intro">
        <p>
            This page will display products loaded from the database using
            Object-Oriented Programming in PHP (abstract class + interface).
            Before you complete the TODO sections, the list will be empty.
        </p>
    </section>

```
<section class="product-list-section">
    <h2>Products</h2>

    <?php if (empty($products)): ?>
        <p class="empty-message">
            No products yet. Complete the PHP OOP tasks to see the list here.
        </p>
    <?php else: ?>
        <div class="products">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <h3 class="product-title">
                        <!-- TODO(Task 6): echo the product title using getTitle() -->
                    </h3>
                    <p class="product-type">
                        <!-- TODO(Task 6): echo the product type label using getTypeLabel() -->
                    </p>
                    <p class="product-price">
                        <!-- TODO(Task 6): echo the base price using getPrice() -->
                    </p>
                    <p class="product-final-price">
                        <!-- TODO(Task 6): echo the final price using getFinalPrice() -->
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
```

</main>

<footer class="site-footer">
    <p>Secret phrase: <?php echo STUDENT_SECRET_PHRASE; ?></p>
</footer>
</body>
</html>
