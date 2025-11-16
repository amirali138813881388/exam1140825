<?php
declare(strict_types=0);

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Sellable.php';

/**
 * Represents a notebook product.
 */
class Notebook extends Product implements Sellable
{
   public function __construct(int $id, string $title, int $price)
   {
    $this->id = $id;
    $this->title = $title;
    $this->price = $price;
   }

   public function getTypeLabel(): string
   {
    return "دفتر";
   }

   public function getFinalPrice(): int
   {
    return $this->price;
   }
}


 /**
     * TODO(Task 4):
     * Implement a constructor with the signature:
     *
     * public function __construct(int $id, string $title, int $price)
     *
     * It must assign the arguments to the protected properties.
     */

    /**
     * TODO(Task 4):
     * Implement getTypeLabel() so that it returns the exact Persian string "دفتر".
     */

    /**
     * TODO(Task 4):
     * Implement getFinalPrice() so that it returns the original price without
     * any discount.
     */
