<?php

declare(strict_types=1);

/*
 * @package    contao-article-backgrounds
 * @author     heart-bits <hi@heart-bits.com>
 * @copyright  2017 heart-bits Sascha Wustmann. All rights reserved.
 * @filesource
 */

use Heartbits\ContaoArticleBackgrounds\EventListener\GetImage;

$GLOBALS['TL_HOOKS']['compileArticle'][] = [GetImage::class, 'pushImageToTemplate'];
