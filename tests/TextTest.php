<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use agostinofiscale\DynamicWidgetForFlutter\Text;

final class TextTest extends TestCase
{

    public function testJsonOutput(): void
    {
        $text_from_flutter = '{"type":"Text","data":"Hello world!","textAlign":"start","overflow":"ellipsis","maxLines":null,"semanticsLabel":null,"softWrap":null,"textDirection":"ltr","style":null,"textScaleFactor":null}';

        $text_widget = new Text("Hello world!");

        $this->assertJsonStringEqualsJsonString($text_from_flutter, json_encode($text_widget));
    }
}