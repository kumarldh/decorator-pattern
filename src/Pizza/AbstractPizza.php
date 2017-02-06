<?php

namespace Pizza;

use Toppings\AbstractTopping;

/**
 * Abstract Pizza Class
 *
 * @author chetan
 */
abstract class AbstractPizza {

    /**
     * Base price of a pizza with cheese.
     * @var int
     */
    protected $basePrice = 0;

    /**
     * Total price of a pizza with toppings etc.
     * @var float
     */
    protected $totalPrice = 0;

    /**
     * Size, small, large or medium
     * @var string
     */
    protected $sizeString = '';

    /**
     * Size in Inches
     * @var int
     */
    protected $sizeInches = '';

    /**
     * List of toppings.
     * @var AbstractTopping list
     */
    protected $toppings = [];

    /**
     * Create the pizza!
     * @param AbstractTopping $toppings
     */
    public function __construct(AbstractTopping ...$toppings) {
        $this->toppings = !empty($toppings) ? $toppings : [];
    }

    /**
     * Get the size.
     * @return string
     */
    public function getSize() {
        return $this->sizeString . "(" . $this->sizeInches . "\")" . PHP_EOL;
    }

    /**
     * Get base price.
     * @return int
     */
    public function getBasePrice() {
        return $this->basePrice;
    }

    /**
     * Get total price.
     * @return float
     */
    public function getTotalPrice() {
        $this->totalPrice = $this->totalPrice + $this->basePrice;
        foreach ($this->toppings as $topping) {
            $this->totalPrice += $topping->getPrice();
        }
        return $this->totalPrice;
    }

    /**
     * Describe the pizza, may be for billing.
     */
    public function describePizza() {
        echo 'This Pizza is a ' . $this->sizeString . '(' . $this->sizeInches . ' inches) pizza. ';
        echo 'Base price(w/out any topping): ' . $this->getBasePrice() . ' ₹' . PHP_EOL;
        echo 'This Pizza has following items ' . PHP_EOL;
        echo ' - Cheese ' . PHP_EOL;
        foreach ($this->toppings as $topping) {
            echo ' - ' . $topping->getName() . ' (' . $topping->getPrice() . ' ₹)' . PHP_EOL;
        }
        echo 'Total price(with topping): ' . $this->getTotalPrice() . ' ₹' . PHP_EOL;
    }

}
