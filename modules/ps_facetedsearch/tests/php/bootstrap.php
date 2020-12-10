<?php

// FacetedSearch autoloader
require __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/FacetedSearch/MockProxy.php';
require_once __DIR__ . '/FacetedSearch/Mock/Filter.php';
require_once __DIR__ . '/FacetedSearch/Mock/Facet.php';
require_once __DIR__ . '/FacetedSearch/Interface/WidgetInterface.php';
require_once __DIR__ . '/FacetedSearch/Interface/FacetsRendererInterface.php';
require_once __DIR__ . '/FacetedSearch/Interface/ProductSearchProviderInterface.php';

define('_PS_COL_IMG_DIR_', __DIR__ . '/files/');

// Fake pSQL function
function pSQL($string, $htmlOK = false)
{
    return $string;
}
