<?php

namespace zhanchmini\mini\yii2;

use yii\helpers\ArrayHelper;

class Mini
{
    /**
     * @param $config
     * @param array $configMini
     * @return array
     */
    public static function config($config, $configMini = [])
    {
        foreach ($configMini as $mini) {
            $config = ArrayHelper::merge($config, $mini);
        }

        return $config;
    }
}
