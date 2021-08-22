<?php

declare (strict_types=1);
namespace PhpParser\ErrorHandler;

use PhpParser\Error;
use PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \PhpParser\ErrorHandler
{
    /**
     * @param \RectorPrefix20210822\PhpParser\Error $error
     */
    public function handleError($error)
    {
        throw $error;
    }
}
