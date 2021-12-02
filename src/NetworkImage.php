<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class NetworkImage extends Image {

    public $type = "NetworkImage";

    public $src;

    public function __construct(
        string $src,
        $semanticLabel = null,
        bool $excludeFromSemantics = false,
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
        $this->src = $src;
        
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
                    $matchTextDirection ,
                    $gaplessPlayback,
                    $filterQuality,
                    $clickEvent);
    }
    
    /**
     * Get the value of src
     */ 
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set the value of src
     *
     * @return  self
     */ 
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }
}
