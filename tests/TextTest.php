<?php

declare(strict_types=1);

use agostinofiscale\DynamicWidgetForFlutter\Text;
use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    private $dynamic_widget_export_from_flutter = '{"type":"Text","data":"Hello world","textAlign":"start","overflow":"ellipsis","maxLines":null,"semanticsLabel":null,"softWrap":null,"textDirection":"ltr","style":null,"textScaleFactor":null}';

    public function testJsonOutput(): void
    {
        $text_widget = new Text(
            "Hello world",
        );

        $this->assertSame(json_encode($text_widget), $this->dynamic_widget_export_from_flutter);
    }
}