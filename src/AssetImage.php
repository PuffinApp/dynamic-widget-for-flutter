<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

use JsonSerializable;

class AssetImage extends Image implements JsonSerializable {
    public $type = "AssetImage";

    public $name;
    public $scale;

    public function __construct(
        string $name,
        string $semanticLabel = null,
        bool $excludeFromSemantics = false,
        float $scale = null,
        float $width = null, 
        float $height = null,
        int $color = null,
        string $blendMode = null,
        string $boxFit = null,
        string $alignment = null,
        string $repeat = null,
        string $centerSlice = null,
        bool $matchTextDirection = null,
        bool $gaplessPlayback = false,
        string $filterQuality = null,
        string $clickEvent = null
    ) {
        $this->name = $name;
        $this->scale = $scale;
        
        parent::__construct($semanticLabel,
                    $excludeFromSemantics,
                    $width, 
                    $height,
                    $color,
                    $blendMode,
                    $boxFit,
                    $alignment,
                    $repeat,
                    null,
                    $matchTextDirection,
                    $gaplessPlayback,
                    $filterQuality,
                    $clickEvent);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of scale
     */ 
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set the value of scale
     *
     * @return  self
     */ 
    public function setScale(float $scale)
    {
        $this->scale = $scale;

        return $this;
    }

    public function jsonSerialize() {
        $vars = get_object_vars($this);

        if (is_null($this->scale))
           unset($vars["scale"]); 

        return $vars;
    }
}
