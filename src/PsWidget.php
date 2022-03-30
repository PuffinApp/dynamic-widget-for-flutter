<?php 

namespace agostinofiscale\DynamicWidgetForFlutter;

class PsWidget extends Widget {

    public $type = "PSWidget";
    public $title;
    public $subtitle;
    public $tabs;
    public $tabsView;
    public $children;
    
    public function __construct(
        Widget $title = null,
        Widget $subtitle = null,
        array $tabs = null,
        array $tabsView = null,
        array $children = null
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->tabs = $tabs;
        $this->tabsView = $tabsView;
        $this->children = $children;
    }
}