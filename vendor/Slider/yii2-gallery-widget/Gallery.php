<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace Slider\gallery;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

class Gallery extends Widget
{

    public $options = [];

    public $items = array();

    public function run()
    {
        if (empty($this->items)) {
            return null;
        }
        echo $this->renderItems();
        $this->registerClientScript();
    }

    public function renderItems()
    {
        $items = [];
        foreach ($this->items as $item) {
            $items[] = $this->renderItem($item);
        }
        return Html::tag('div class="gallery"', implode("\n", array_filter($items)), $this->options);
    }


    public function renderItem($item)
    {
        if (is_string($item)) {
            return Html::a(Html::img($item), $item, ['class' => 'gallery-item']);
        }
        $src = ArrayHelper::getValue($item, 'src');
        if ($src === null) {
            return null;
        }
        $url = ArrayHelper::getValue($item, 'url', $src);
        $options = ArrayHelper::getValue($item, 'options', []);
        Html::addCssClass($options, 'gallery-item');

        return Html::a(Html::img($src), $url, $options);
    }

    public function registerClientScript()
    {
        $view = $this->getView();
        GalleryAsset::register($view);
    }
} 