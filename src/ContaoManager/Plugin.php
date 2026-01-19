<?php

declare(strict_types=1);

/*
 * @package    contao-article-backgrounds
 * @author     heart-bits <hi@heart-bits.com>
 * @copyright  2017 heart-bits Sascha Wustmann. All rights reserved.
 * @filesource
 */

namespace Heartbits\ContaoArticleBackgrounds\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Heartbits\ContaoArticleBackgrounds\HeartbitsContaoArticleBackgroundsBundle;

/**
 * Class Plugin.
 */
class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(HeartbitsContaoArticleBackgroundsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
