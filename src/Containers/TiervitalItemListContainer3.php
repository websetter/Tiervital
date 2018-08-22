<?php

namespace Tiervital\Containers;

use Plenty\Plugin\Templates\Twig;

class TiervitalItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Tiervital::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}