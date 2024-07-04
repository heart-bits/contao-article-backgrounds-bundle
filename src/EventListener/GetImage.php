<?php

namespace Heartbits\ContaoArticleBackgrounds\EventListener;

use Contao\CoreBundle\Image\PictureFactoryInterface;
use Contao\FilesModel;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\RequestStack;

class GetImage
{
    private $projectDir;
    private $pictureFactory;
    private $requestStack;

    public function __construct(string $projectDir, PictureFactoryInterface $pictureFactory, RequestStack $requestStack)
    {
        $this->pictureFactory = $pictureFactory;
        $this->projectDir = $projectDir;
        $this->requestStack = $requestStack;
    }

    public function pushImageToTemplate($objTemplate, $arrData, $objModule)
    {
        if ($objTemplate->background_switch && $objTemplate->background_picture) {
            $rootDir = $this->projectDir;
            $objFile = FilesModel::findByUuid($objTemplate->background_picture);
            if ($objFile !== null || is_file($this->projectDir . '/' . $objFile->path)) {
                $locale = $this->requestStack->getCurrentRequest()->getLocale();
                $meta = StringUtil::deserialize($objFile->meta);

                // Add image
                $picture = $this->pictureFactory
                    ->create($rootDir . '/' . $objFile->path, StringUtil::deserialize($objTemplate->background_size));
                $data = [
                    'picture' => [
                        'img' => $picture->getImg($rootDir),
                        'sources' => $picture->getSources($rootDir),
                    ]
                ];

                // Add meta data
                if ($locale && isset($meta[$locale])) {
                    if ($meta[$locale]['caption']) {
                        $data['caption'] = $meta[$locale]['caption'];
                    }
                    if ($meta[$locale]['link']) {
                        $data['href'] = $meta[$locale]['link'];
                    }
                    if ($meta[$locale]['alt']) {
                        $data['picture']['alt'] = $meta[$locale]['alt'];
                    }
                    if ($meta[$locale]['title']) {
                        $data['picture']['title'] = $meta[$locale]['title'];
                        $data['linkTitle'] = $meta[$locale]['title'];
                    }
                }

                $objTemplate->background_picture = $data;
            }
        }
    }
}