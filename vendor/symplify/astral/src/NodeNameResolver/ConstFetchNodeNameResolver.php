<?php

declare (strict_types=1);
namespace RectorPrefix20210822\Symplify\Astral\NodeNameResolver;

use PhpParser\Node;
use PhpParser\Node\Expr\ConstFetch;
use RectorPrefix20210822\Symplify\Astral\Contract\NodeNameResolverInterface;
final class ConstFetchNodeNameResolver implements \RectorPrefix20210822\Symplify\Astral\Contract\NodeNameResolverInterface
{
    /**
     * @param \RectorPrefix20210822\PhpParser\Node $node
     */
    public function match($node) : bool
    {
        return $node instanceof \PhpParser\Node\Expr\ConstFetch;
    }
    /**
     * @param \RectorPrefix20210822\PhpParser\Node $node
     */
    public function resolve($node) : ?string
    {
        return $node->name->toString();
    }
}
