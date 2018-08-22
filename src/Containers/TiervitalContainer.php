<?php

namespace Tiervital\Containers;

use Plenty\Plugin\Templates\Twig;

class TiervitalContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Tiervital::Stylesheet');
    }
}