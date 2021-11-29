<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use agostinofiscale\DynamicWidgetForFlutter\EdgeInsets;

final class EdgeInsetsTest extends TestCase
{
    public function testAll(): void
    {
        $edge_insets_all_from_flutter = "1.0, 1.0, 1.0, 1.0";

        $edge_insets = EdgeInsets::all(1.0);

        $this->assertSame($edge_insets_all_from_flutter, $edge_insets);
    }

    public function testFromLTRB(): void
    {
        $edge_insets_fromltrb_from_flutter = "1.0, 2.0, 3.0, 4.0";

        $edge_insets = EdgeInsets::fromLTRB(1.0, 2.0, 3.0, 4.0);

        $this->assertSame($edge_insets_fromltrb_from_flutter, $edge_insets);
    }

    public function testOnly(): void
    {
        $edge_insets_only_from_flutter = "1.0, 0.0, 1.0, 0.0";

        $edge_insets = EdgeInsets::only(["left" => 1.0, "right" => 1.0]);

        $this->assertSame($edge_insets_only_from_flutter, $edge_insets);
    }

    public function testSymmetric(): void
    {
        $edge_insets_symmetric_from_flutter = "5.0, 2.0, 5.0, 2.0";

        $edge_insets = EdgeInsets::symmetric(2.0, 5.0);

        $this->assertSame($edge_insets_symmetric_from_flutter, $edge_insets);
    }
}