<?php

namespace Pizza;

use \Pizza\AbstractPizza;
use \Toppings\AbstractTopping;

/**
 * Description of SmallPizza
 *
 * @author chetan
 */
class MediumPizza extends AbstractPizza {

    /**
     * Medium Pizza!
     *
     * @param AbstractTopping List of pizza toppings
     */
    public function __construct(AbstractTopping ...$toppings) {
        $this->sizeInches = 9;
        $this->sizeString = 'medium';
        $this->basePrice  = 7.5;
        parent::__construct(...$toppings);
    }

}
