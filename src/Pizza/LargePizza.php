<?php

namespace Pizza;

use \Pizza\AbstractPizza;
use \Toppings\AbstractTopping;

/**
 * Description of SmallPizza
 *
 * @author chetan
 */
class LargePizza extends AbstractPizza {

    /**
     * Medium Pizza!
     *
     * @param AbstractTopping List of pizza toppings
     */
    public function __construct(AbstractTopping ...$toppings) {
        $this->sizeInches = 12;
        $this->sizeString = 'large';
        $this->basePrice  = 10;
        parent::__construct(...$toppings);
    }

}
