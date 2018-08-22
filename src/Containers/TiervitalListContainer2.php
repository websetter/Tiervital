<?php

namespace Tiervital\Containers;

use Plenty\Plugin\Templates\Twig;

class TiervitalItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Tiervital::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}