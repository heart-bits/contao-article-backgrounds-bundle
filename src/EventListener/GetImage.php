<?php

declare(strict_types=1);

/*
 * @package    contao-article-backgrounds
 * @author     heart-bits <hi@heart-bits.com>
 * @copyright  2017 heart-bits Sascha Wustmann. All rights reserved.
 * @filesource
 */

namespace Heartbits\ContaoArticleBackgrounds\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\CoreBundle\Image\PictureFactoryInterface;
use Contao\FilesModel;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\RequestStack;

class GetImage
{
    public function __construct(
        private readonly string $projectDir,
        private readonly PictureFactoryInterface $pictureFactory,
        private readonly RequestStack $requestStack,
    ) {
    }

    #[AsHook('compileArticle')]
    public function pushImageToTemplate($objTemplate, $arrData, $objModule): void
    {
        if ($objTemplate->background_switch && $objTemplate->background_picture) {
            $rootDir = $this->projectDir;
            $objFile = FilesModel::findByUuid($objTemplate->background_picture);
            if (null !== $objFile || is_file($this->projectDir.'/'.$objFile->path)) {
                $locale = $this->requestStack->getCurrentRequest()->getLocale();
                $meta = StringUtil::deserialize($objFile->meta);

                // Add image
                $picture = $this->pictureFactory
                    ->create($rootDir.'/'.$objFile->path, StringUtil::deserialize($objTemplate->background_size))
                ;
                $data = [
                    'picture' => [
                        'img' => $picture->getImg($rootDir),
                        'sources' => $picture->getSources($rootDir),
                    ],
                ];

                // Add meta data
                if ($locale && isset($meta[$locale])) {
                    if (isset($meta[$locale]['caption']) && $meta[$locale]['caption']) {
                        $data['caption'] = $meta[$locale]['caption'];
                    }
                    if (isset($meta[$locale]['link']) && $meta[$locale]['link']) {
                        $data['href'] = $meta[$locale]['link'];
                    }
                    if (isset($meta[$locale]['alt']) && $meta[$locale]['alt']) {
                        $data['picture']['alt'] = $meta[$locale]['alt'];
                    }
                    if (isset($meta[$locale]['title']) && $meta[$locale]['title']) {
                        $data['picture']['title'] = $meta[$locale]['title'];
                        $data['linkTitle'] = $meta[$locale]['title'];
                    }
                }

                $objTemplate->background_picture = $data;
            }
        }
    }
}
