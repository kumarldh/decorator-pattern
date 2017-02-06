<?php

namespace Pizza;

use \Pizza\AbstractPizza;
use \Toppings\AbstractTopping;

/**
 * Description of SmallPizza
 *
 * @author chetan
 */
class SmallPizza extends AbstractPizza {

    /**
     * Small Pizza!
     *
     * @param AbstractTopping List of pizza toppings
     */
    public function __construct(AbstractTopping ...$toppings) {
        $this->sizeInches = 6;
        $this->sizeString = 'small';
        $this->basePrice  = 5;
        parent::__construct(...$toppings);
    }

}
