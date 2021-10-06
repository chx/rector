<?php

declare (strict_types=1);
namespace RectorPrefix20211006\Symplify\SimplePhpDocParser\Bundle;

use RectorPrefix20211006\Symfony\Component\HttpKernel\Bundle\Bundle;
use RectorPrefix20211006\Symplify\SimplePhpDocParser\Bundle\DependencyInjection\Extension\SimplePhpDocParserExtension;
final class SimplePhpDocParserBundle extends \RectorPrefix20211006\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function getContainerExtension() : ?\RectorPrefix20211006\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \RectorPrefix20211006\Symplify\SimplePhpDocParser\Bundle\DependencyInjection\Extension\SimplePhpDocParserExtension();
    }
}
