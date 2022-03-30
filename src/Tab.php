<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class Tab extends Widget {

    public $type = "Tab";
    public $data;
    public $icon;
    public $iconMargin;
    public $height;
    public $child;

    public function __construct(
        string $data,
        Widget $icon = null,
        $iconMargin = null,
        float $height = null,
        Widget $child = null
    ) {
        $this->data = $data;
        $this->icon = $icon;
        $this->iconMargin = $iconMargin;
        $this->height = $height;
        $this->child = $child;
    }
}