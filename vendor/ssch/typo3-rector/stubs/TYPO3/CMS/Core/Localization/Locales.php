<?php

namespace RectorPrefix20210822\TYPO3\CMS\Core\Localization;

use RectorPrefix20210822\TYPO3\CMS\Core\Site\Entity\SiteLanguage;
if (\class_exists('TYPO3\\CMS\\Core\\Localization\\Locales')) {
    return;
}
class Locales
{
    /**
     * @return void
     * @param \RectorPrefix20210822\TYPO3\CMS\Core\Site\Entity\SiteLanguage $siteLanguage
     */
    public static function setSystemLocaleFromSiteLanguage($siteLanguage)
    {
    }
    /**
     * @return string
     */
    public function getPreferredClientLanguage($languageCodesList)
    {
        return 'foo';
    }
}
