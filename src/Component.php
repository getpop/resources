<?php

declare(strict_types=1);

namespace PoP\Resources;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\ConfigurationComponentModel\Component::class,
        ];
    }
}
