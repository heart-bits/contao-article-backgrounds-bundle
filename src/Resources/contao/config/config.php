<?php

use Heartbits\ContaoArticleBackgrounds\EventListener\GetImage;

$GLOBALS['TL_HOOKS']['compileArticle'][] = [GetImage::class, 'pushImageToTemplate'];