<?php

namespace Frontend\Containers;

use Ceres\Config\CeresConfig;
use Plenty\Modules\Webshop\ItemSearch\SearchPresets\TagItems;
use Plenty\Modules\Webshop\ItemSearch\Services\ItemSearchService;
use Plenty\Plugin\Templates\Twig;

/**
 * Class FrontendItemListContainer2
 *
 * This class is a DataProvider. It is used to display a configurable list of items in your online store.
 * @package Frontend\Containers
 */
class FrontendItemListContainer2
{
    /**
     * Renders the template.
     * @param Twig $twig The twig instance
     * @param array $arg A list of items
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Frontend::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}