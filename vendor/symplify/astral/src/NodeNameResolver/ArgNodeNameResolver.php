<?php

declare (strict_types=1);
namespace RectorPrefix20210822\Symplify\Astral\NodeNameResolver;

use PhpParser\Node;
use PhpParser\Node\Arg;
use RectorPrefix20210822\Symplify\Astral\Contract\NodeNameResolverInterface;
final class ArgNodeNameResolver implements \RectorPrefix20210822\Symplify\Astral\Contract\NodeNameResolverInterface
{
    /**
     * @param \RectorPrefix20210822\PhpParser\Node $node
     */
    public function match($node) : bool
    {
        return $node instanceof \PhpParser\Node\Arg;
    }
    /**
     * @param \RectorPrefix20210822\PhpParser\Node $node
     */
    public function resolve($node) : ?string
    {
        if ($node->name === null) {
            return null;
        }
        return (string) $node->name;
    }
}
