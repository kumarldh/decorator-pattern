<?php

namespace Toppings;

use \Toppings\AbstractTopping;

/**
 * Description of ToppingMushroom
 *
 * @author chetan
 */
class ToppingMushroom extends AbstractTopping {

    /**
     * Add mushrooms
     */
    public function __construct() {
        $this->price = 2;
        $this->name  = 'Mushroom';
    }

}
