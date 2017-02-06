<?php

namespace Toppings;

use \Toppings\AbstractTopping;

/**
 * Description of ToppingMushroom
 *
 * @author chetan
 */
class ToppingCapsicum extends AbstractTopping {

    /**
     * Add capsicum.
     */
    public function __construct() {
        $this->price = 1.5;
        $this->name  = 'Capsicum';
    }

}
