<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use agostinofiscale\DynamicWidgetForFlutter\Image;

final class NetworkImageTest extends TestCase
{
    public function testJsonOutput(): void
    {
        // This json is exported from flutter by DynamicWidgetJsonExportor but
        // it is altered because currently It doesn't export the clickEvent.
        $network_image_from_flutter = '{"type":"NetworkImage","src":"https://via.placeholder.com/300","semanticLabel":null,"excludeFromSemantics":false,"width":null,"height":null,"color":null,"colorBlendMode":null,"fit":null,"alignment":"center","repeat":"noRepeat","centerSlice":null,"matchTextDirection":false,"gaplessPlayback":false,"filterQuality":"low", "clickEvent":""}';

        $network_image = Image::network("https://via.placeholder.com/300");

        $this->assertJsonStringEqualsJsonString($network_image_from_flutter, json_encode($network_image));
    }
}