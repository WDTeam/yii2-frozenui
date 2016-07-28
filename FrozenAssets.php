<?php

namespace wdteam\frozenui;

use yii\web\AssetBundle;


class FrozenAssets  extends AssetBundle
{
	
    public $sourcePath = '@bower';

    public $basePath = '@webroot/assets';

    public $css = [
        'frozenui/dist/css/frozen.css'
    ];

    public $js = [
        'frozenui/lib/zepto.min.js',
        'frozenui/dist/js/frozen.js',
    ];
}
