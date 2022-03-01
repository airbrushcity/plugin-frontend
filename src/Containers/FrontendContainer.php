<?php
 
namespace Frontend\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class FrontendContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Frontend::content.Frontend');
    }
}