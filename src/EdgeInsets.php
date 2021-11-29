<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class EdgeInsets extends EdgeInsetsGeometry {

    public static function all(float $value = 0.0) {
        $edge_insets = new static();

        $edge_insets->left = $value;
        $edge_insets->top = $value;
        $edge_insets->right = $value;
        $edge_insets->bottom = $value;

        return $edge_insets->export();
    } 

    public static function fromLTRB(
        float $left = 0.0,
        float $top = 0.0,
        float $right = 0.0,
        float $bottom = 0.0
    ) {
        $edge_insets = new static();

        $edge_insets->left = $left;
        $edge_insets->top = $top;
        $edge_insets->right = $right;
        $edge_insets->bottom = $bottom;

        return $edge_insets->export();
    }

    public static function only(array $map) {
        $edge_insets = new static();

        $edge_insets->left = array_key_exists("left", $map) ? $map["left"] : 0.0;
        $edge_insets->top = array_key_exists("top", $map) ? $map["top"] : 0.0;
        $edge_insets->right = array_key_exists("right", $map) ? $map["right"] : 0.0;
        $edge_insets->bottom = array_key_exists("bottom", $map) ? $map["bottom"] : 0.0;

        return $edge_insets->export();
    }

    public static function symmetric(
        float $vertical = 0.0,
        float $horizontal = 0.0
    ) {
        $edge_insets = new static();

        $edge_insets->left = $horizontal;
        $edge_insets->top = $vertical;
        $edge_insets->right = $horizontal;
        $edge_insets->bottom = $vertical;

        return $edge_insets->export();
    }

    private function export()
    {
        $edges = [number_format($this->left, 1), 
            number_format($this->top, 1), 
            number_format($this->right, 1), 
            number_format($this->bottom, 1)];

        return implode(", ", $edges);
    }
    
}