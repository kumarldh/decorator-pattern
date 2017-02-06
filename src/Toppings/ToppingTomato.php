<?php

namespace Toppings;

use \Toppings\AbstractTopping;

/**
 * Description of ToppingTomato
 *
 * @author chetan
 */
class ToppingTomato extends AbstractTopping {

    /**
     * Add tomato slices. I like tomato slices.
     */
    public function __construct() {
        $this->price = 1;
        $this->name  = 'Tomato';
    }

}
