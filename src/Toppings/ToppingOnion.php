<?php

namespace Toppings;

use \Toppings\AbstractTopping;

/**
 * Description of ToppingOnion
 *
 * @author chetan
 */
class ToppingOnion extends AbstractTopping {

    /**
     * Add onions.
     */
    public function __construct() {
        $this->price = 1;
        $this->name  = 'Onion';
    }

}
