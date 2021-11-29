<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use agostinofiscale\DynamicWidgetForFlutter\Text;
use agostinofiscale\DynamicWidgetForFlutter\ListTile;

final class ListTileTest extends TestCase
{
    public function testJsonOutput(): void
    {
        $empty_list_tile_from_flutter = '{"type":"ListTile","isThreeLine":false,"leading":null,"title":null,"subtitle":null,"trailing":null,"dense":null,"contentPadding":null,"enabled":true,"selected":false}';
        $list_tile_with_text_as_title_from_flutter = '{"type":"ListTile","isThreeLine":false,"leading":null,"title":{"type":"Text","data":"Hello world!","textAlign":"start","overflow":"ellipsis","maxLines":null,"semanticsLabel":null,"softWrap":null,"textDirection":"ltr","style":null,"textScaleFactor":null},"subtitle":null,"trailing":null,"dense":null,"contentPadding":null,"enabled":true,"selected":false}';

        $list_tile_widget = new ListTile();

        $this->assertSame($empty_list_tile_from_flutter, json_encode($list_tile_widget));

        $text_widget = new Text("Hello world!");
        $list_tile_widget->setTitle($text_widget);

        $this->assertSame($list_tile_with_text_as_title_from_flutter, json_encode($list_tile_widget));
    }
}