<?php

use yii2lab\app\App;

$name = 'frontend';
$path = '../..';

require_once(__DIR__ . '/' . $path . '/vendor/yii2lab/yii2-app/src/App.php');

App::run($name);
