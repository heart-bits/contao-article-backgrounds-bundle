<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->ruleWithConfiguration(HeaderCommentFixer::class, [
        'header' => "@package    contao-article-backgrounds\n@author     heart-bits <hi@heart-bits.com>\n@copyright  2017 heart-bits Sascha Wustmann. All rights reserved.\n@filesource",
    ]);
};
