<?php

namespace Heartbits\ContaoArticleBackgrounds\EventListener;

class GetImage
{
    public function pushImageToTemplate($objTemplate, $arrData, $objModule)
    {
        if ($objTemplate->background_switch && $objTemplate->background_picture) {
            $container = \System::getContainer();
            $rootDir = $container->getParameter('kernel.project_dir');
            $objFile = \Contao\FilesModel::findByUuid($objTemplate->background_picture);
            $path = $objFile->path;
            if ($objFile !== null || is_file(System::getContainer()->getParameter('kernel.project_dir') . '/' . $path)) {
                $picture = $container
                    ->get('contao.image.picture_factory')
                    ->create($rootDir . '/' . $path, \Contao\StringUtil::deserialize($objTemplate->background_size)[2]);
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