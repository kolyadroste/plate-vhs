<?php
namespace Atomicplan\PlateVhs\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractConditionViewHelper;
class FileExistViewHelper extends AbstractConditionViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('file', 'string', 'The filepath', true);
    }

    static function evaluateCondition($arguments = null)
    {
        $file = GeneralUtility::getFileAbsFileName($arguments['file']);
        return file_exists($file);
    }
}
