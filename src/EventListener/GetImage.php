<?php

namespace Heartbits\ContaoArticleBackgrounds\EventListener;

use Contao\CoreBundle\Image\PictureFactoryInterface;
use Contao\FilesModel;
use Contao\StringUtil;

class GetImage
{
    private $projectDir;
    private $pictureFactory;

    public function __construct(string $projectDir, PictureFactoryInterface $pictureFactory)
    {
        $this->pictureFactory = $pictureFactory;
        $this->projectDir = $projectDir;
    }

    public function pushImageToTemplate($objTemplate, $arrData, $objModule)
    {
        if ($objTemplate->background_switch && $objTemplate->background_picture) {
            $rootDir = $this->projectDir;
            $objFile = FilesModel::findByUuid($objTemplate->background_picture);
            if ($objFile !== null || is_file($this->projectDir . '/' . $objFile->path)) {
                $picture = $this->pictureFactory
                    ->create($rootDir . '/' . $objFile->path, StringUtil::deserialize($objTemplate->background_size));
                $data = [
                    'picture' => [
                        'img' => $picture->getImg($rootDir),
                        'sources' => $picture->getSources($rootDir),
                    ]
                ];
                $objTemplate->background_picture = $data;
            }
        }
    }
}