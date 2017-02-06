<?php

require __DIR__ . '/vendor/autoload.php';

use \Pizza\{
    SmallPizza,
    MediumPizza,
    LargePizza
};
use \Toppings\{
    ToppingCapsicum,
    ToppingCheese,
    ToppingMushroom,
    ToppingOlive,
    ToppingOnion,
    ToppingTomato
};

$smallPizza  = new SmallPizza(
    new ToppingCapsicum(), new ToppingCheese(), new ToppingMushroom(), new ToppingOlive(), new ToppingOnion(), new ToppingTomato()
);
$smallPizza->describePizza() . PHP_EOL;
echo '--------------------------------------------------------------' . PHP_EOL;
$mediumPizza = new MediumPizza(
    new ToppingCapsicum(), new ToppingMushroom(), new ToppingOlive(), new ToppingOnion(), new ToppingTomato()
);
$mediumPizza->describePizza() . PHP_EOL;
echo '--------------------------------------------------------------' . PHP_EOL;
$largePizza  = new LargePizza(
    new ToppingCapsicum(), new ToppingOnion(), new ToppingTomato()
);
$largePizza->describePizza() . PHP_EOL;
