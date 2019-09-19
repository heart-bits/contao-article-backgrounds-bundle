<?php

$GLOBALS['TL_HOOKS']['compileArticle'][] = array(Heartbits\ContaoArticleBackgrounds\EventListener\GetImage::class, 'pushImageToTemplate');