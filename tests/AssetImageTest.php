<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use agostinofiscale\DynamicWidgetForFlutter\Image;

final class AssetImageTest extends TestCase
{
    public function testJsonOutput(): void
    {
        // This json is exported from flutter by DynamicWidgetJsonExportor but
        // it is altered because currently It doesn't export the clickEvent.
        $asset_image_from_flutter = '{"type":"AssetImage","name":"default","semanticLabel":null,"excludeFromSemantics":false,"width":null,"height":null,"color":null,"colorBlendMode":null,"fit":null,"alignment":"center","repeat":"noRepeat","centerSlice":null,"matchTextDirection":false,"gaplessPlayback":false,"filterQuality":"low", "clickEvent":""}';

        $asset_image = Image::asset("default");

        $this->assertJsonStringEqualsJsonString($asset_image_from_flutter, json_encode($asset_image));
    }
}