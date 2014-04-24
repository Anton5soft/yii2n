<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace Slider\gallery;

use yii\web\AssetBundle;

/**
 * GalleryAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\gallery
 */
class GalleryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/Slider/yii2-gallery-widget/assets/';

    public $css = [
        'vendor/css/jquery.lightbox-0.5.css'
    ];

    public $js = [
        'vendor/js/jquery.lightbox-0.5.js',
        'start.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 