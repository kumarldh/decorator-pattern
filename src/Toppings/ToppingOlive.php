<?php

namespace Toppings;

use \Toppings\AbstractTopping;

/**
 * Description of ToppingOlive
 *
 * @author chetan
 */
class ToppingOlive extends AbstractTopping {

    /**
     * Add olives.
     */
    public function __construct() {
        $this->price = 3.5;
        $this->name  = 'Olive';
    }

}
