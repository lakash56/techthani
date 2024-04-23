<?php

declare (strict_types=1);
namespace ShopMagicVendor\DI\Definition\Source;

use ShopMagicVendor\DI\Definition\Definition;
/**
 * Describes a definition source to which we can add new definitions.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
interface MutableDefinitionSource extends DefinitionSource
{
    public function addDefinition(Definition $definition);
}
