<?php

/**
 * Lightbox2 Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\lightbox;

use yii\web\AssetBundle;

class Lightbox2Asset extends AssetBundle {

    public $sourcePath = '@bower/lightbox2';
    public $css = ['css/lightbox.css'];
    public $js = ['js/lightbox.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
