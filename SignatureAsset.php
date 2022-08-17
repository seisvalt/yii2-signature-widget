<?php

namespace seisvalt\widgets;

use yii\web\AssetBundle;

class SignatureAsset extends AssetBundle
{
    public $sourcePath = '@vendor/seisvalt/yii2-signature/assets/';
    public $css = ['style.css'];
    public $js = ['signature_pad.js','app.js'];
    public $depends = ['yii\web\JqueryAsset'];
}