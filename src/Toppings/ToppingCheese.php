<?php

namespace Toppings;

use \Toppings\AbstractTopping;

/**
 * Description of ToppingCheese
 *
 * @author chetan
 */
class ToppingCheese extends AbstractTopping {

    /**
     * Add extra cheese.
     */
    public function __construct() {
        $this->price = 1.5;
        $this->name  = 'Extra Cheese';
    }

}
