<?php
namespace Atomicplan\PlateVhs\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractConditionViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Package\PackageManager;

class IfExtInstalledViewHelper extends AbstractConditionViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('extensionKey', 'string', 'The key of the extension to check', true);
    }
    static function evaluateCondition($arguments = null)
    {
        $extensionKey = $arguments['extensionKey'];
        $packageManager = GeneralUtility::makeInstance(PackageManager::class);
        return $packageManager->isPackageActive($extensionKey);
    }
}
