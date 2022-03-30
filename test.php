<?php

error_reporting(-1);
ini_set('display_errors', 'On');

require_once "./vendor/autoload.php";

use agostinofiscale\DynamicWidgetForFlutter\Tab;
use agostinofiscale\DynamicWidgetForFlutter\ListView;
use agostinofiscale\DynamicWidgetForFlutter\PsWidget;
use agostinofiscale\DynamicWidgetForFlutter\ListTile;
use agostinofiscale\DynamicWidgetForFlutter\Text;

$text = new Text("Ciao");
$list_tile = new ListTile(
    false,
    null,
    $text
);
$listview = new ListView();
$listview->addChildren($list_tile);
$listview->addChildren($list_tile);
$listview->addChildren($list_tile);
$listview->addChildren($list_tile);

$ps_widget = new PsWidget(
    new Text("Prodotti e vendite"),
    null,
    [
        new Tab("Ordini recenti"),
        new Tab('Migliori vendite'),
        new Tab('Piu\' visualizzati'),
        new Tab('Piu\' ricercati')
    ],
    [
        new Text("Ciao"),
        new Text("Ciao"),
        new Text("Ciao"),
        new Text("Ciao")
    ],
    null
);

print_r(json_encode($ps_widget, JSON_UNESCAPED_UNICODE));