<?php namespace Ednews;

date_default_timezone_set('Etc/GMT-3');
mb_internal_encoding("UTF-8");

define('SP', DIRECTORY_SEPARATOR);
define('APP', realpath('..' . SP) . SP);
define('DATA', APP . 'data' . SP);
define('SRC', APP . 'src' . SP);

require_once(SRC . 'loader.php');

$app = new App();

$html = '
    <p>Последнее обновление: ' . $app->updated . '</p>
    <p>Последняя проверка: ' . $app->checked . '</p>
';

header('Content-Type: text/html; charset=utf-8');
echo $html;