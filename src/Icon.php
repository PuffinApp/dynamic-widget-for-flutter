<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class Icon extends Widget {

    public $data;
    public $size;
    public $color;
    public $semanticLabel;
    public $textDirection;

    public function __construct(
        $data,
        $size = null,
        $color = null,
        $semanticLabel = null,
        $textDirection = null
    ) {
        $this->data = $data;
        $this->size = $size;
        $this->color = $color;
        $this->semanticLabel = $semanticLabel;
        $this->textDirection = $textDirection;
    }
}