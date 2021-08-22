<?php

declare (strict_types=1);
namespace RectorPrefix20210822\Symplify\SymplifyKernel\Bundle;

use RectorPrefix20210822\Symfony\Component\DependencyInjection\ContainerBuilder;
use RectorPrefix20210822\Symfony\Component\HttpKernel\Bundle\Bundle;
use RectorPrefix20210822\Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use RectorPrefix20210822\Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension;
final class SymplifyKernelBundle extends \RectorPrefix20210822\Symfony\Component\HttpKernel\Bundle\Bundle
{
    /**
     * @param \RectorPrefix20210822\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder
     */
    public function build($containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \RectorPrefix20210822\Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\RectorPrefix20210822\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \RectorPrefix20210822\Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension();
    }
}
