contao-article-backgrounds
===================

This contao extension allows the backend user to set an individual background-image on every article and even add a colored article separator.

The separator/polygon can be added via a file under templates/polygons/polygon-`[polygon_style]`.php.
`[polygon_style]` is referring to the translation array, which at the moment includes "top", "right", "bottom", "left" and "cross".
The selected color can also be picked up in the polygon templates via `<?= \Input::get('color') ?>`.
This way e.g. an svg can easily be colored through the backend.