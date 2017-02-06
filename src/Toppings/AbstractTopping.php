<?php

namespace Toppings;

/**
 * Description of AbstractTopping
 *
 * @author chetan
 */
class AbstractTopping {

    /**
     * Price for topping.
     *
     * @var int
     */
    protected $price = 0;

    /**
     * Name for the topping.
     *
     * @var type
     */
    protected $name = '';

    /**
     * Returns price for the topping
     *
     * @return int
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Returns name of the topping
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

}
