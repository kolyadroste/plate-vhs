<?php
defined('TYPO3') || die ('Access denied.');
call_user_func(function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        "plate_ces",
        "setup",
        "
            page.10 {
                dataProcessing.1686414696 = TYPO3\CMS\Frontend\DataProcessing\SiteProcessor
                dataProcessing.1686414696 {
                    as = siteConfig
                }
            }
         "
    );

});
