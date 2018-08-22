<?php

namespace Tiervital\Containers;

use Plenty\Plugin\Templates\Twig;

class TiervitalItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Tiervital::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}