<?php

declare (strict_types=1);
namespace RectorPrefix20220512;

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\PHPUnit\Set\PHPUnitSetList;
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->import(\Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_91);
    $rectorConfig->import(\Rector\PHPUnit\Set\PHPUnitLevelSetList::UP_TO_PHPUNIT_90);
};
