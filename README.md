contao-article-backgrounds
===================

This contao extension allows the backend user to set an individual background-image on every article and even add a colored article separator.

The separator/polygon can be added via a file under templates/polygons/polygon-`[polygon_style]`.php.
`[polygon_style]` is referring to the translation array, which at the moment includes "top", "right", "bottom", "left" and "cross".
The selected color can also be picked up in the polygon templates via `<?= \Input::get('color') ?>`.
This way e.g. an svg can easily be colored through the backend.

The extension does not deliver any CSS! So the positioning has to be done manually (See example below). 
```
.mod_article {
    position: relative;
}

.mod_article > .article-image {
   position: absolute;
   z-index: 1;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   overflow: hidden
}

.mod_article > .inside {
   position: relative;
   z-index: 3;
}

.mod_article > .article-image.float-right {
   left: auto;
   right: 0;
   width: 50%
}

.mod_article > .article-image.float-left {
   left: 0;
   width: 50%
}

.mod_article > .article-image .image_container,
.mod_article > .article-image picture {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%
}

.mod_article > .article-image .image_container img,
.mod_article > .article-image picture img {
   position: absolute;
   top: 50%;
   left: 50%;
   max-width: none;
   min-width: 100%;
   min-height: 100%;
   width: auto;
   height: auto;
   -webkit-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%)
}
```