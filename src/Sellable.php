<?php
declare(strict_types=0);

/**
 * Interface for products that can be sold.
 */
interface Sellable
{
    /**
     * Return the final price that the customer should pay, in integer Toman.
     */
    public function getFinalPrice(): int;
}
