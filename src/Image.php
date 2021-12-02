<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

abstract class Image extends Widget {

    public $semanticLabel;
    public $excludeFromSemantics;
    public $width;
    public $height;
    public $color;
    public $colorBlendMode;
    public $fit;
    public $alignment;
    public $repeat;
    public $centerSlice;
    public $matchTextDirection;
    public $gaplessPlayback;
    public $filterQuality;
    public $clickEvent;

    public function __construct(
        string $semanticLabel = null,
        bool $excludeFromSemantics = false,
        float $width = null, 
        float $height = null,
        int $color = null,
        string $colorBlendMode = null,
        string $fit = null,
        string $alignment = null,
        string $repeat = null,
        string $centerSlice = null,
        bool $matchTextDirection = null,
        bool $gaplessPlayback = false,
        string $filterQuality = null,
        string $clickEvent = null
    ) {
        $this->semanticLabel = $semanticLabel;
        $this->excludeFromSemantics = $excludeFromSemantics;
        $this->width = $width;
        $this->height = $height;
        $this->color = !is_null($color) ? dechex($color) : null;
        $this->colorBlendMode = $colorBlendMode;
        $this->fit = $fit;
        $this->alignment = $alignment ?? Alignment::center;
        $this->repeat = $repeat ?? ImageRepeat::noRepeat;
        $this->centerSlice = $centerSlice;
        $this->matchTextDirection = $matchTextDirection ?? false;
        $this->gaplessPlayback = $gaplessPlayback;
        $this->filterQuality = $filterQuality ?? FilterQuality::low;
        $this->clickEvent = $clickEvent ?? "";
    }

    public static function asset(
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
        bool $matchTextDirection = false,
        bool $gaplessPlayback = false,
        string $filterQuality = null,
        string $clickEvent = null
    ) {
            return new AssetImage($name,
            $semanticLabel,
            $excludeFromSemantics,
            $scale,
            $width, 
            $height,
            $color,
            $blendMode,
            $boxFit,
            $alignment,
            $repeat,
            $centerSlice,
            $matchTextDirection,
            $gaplessPlayback,
            $filterQuality,
            $clickEvent);   
        }

    public static function network(
        string $src,
        string $semanticLabel = null,
        bool $excludeFromSemantics = false,
        float $width = null, 
        float $height = null,
        int $color = null,
        string $blendMode = null,
        string $boxFit = null,
        string $alignment = null,
        string $repeat = null,
        string $centerSlice = null,
        bool $matchTextDirection = false,
        bool $gaplessPlayback = false,
        string $filterQuality = null,
        string $clickEvent = null
    ) {
            return new NetworkImage(
            $src,
            $semanticLabel,
            $excludeFromSemantics,
            $width, 
            $height,
            $color,
            $blendMode,
            $boxFit,
            $alignment,
            $repeat,
            $centerSlice,
            $matchTextDirection,
            $gaplessPlayback,
            $filterQuality,
            $clickEvent);   
        }

    /**
     * Get the value of semanticLabel
     */ 
    public function getSemanticLabel()
    {
        return $this->semanticLabel;
    }

    /**
     * Set the value of semanticLabel
     *
     * @return  self
     */ 
    public function setSemanticLabel($semanticLabel)
    {
        $this->semanticLabel = $semanticLabel;

        return $this;
    }

    /**
     * Get the value of excludeFromSemantics
     */ 
    public function getExcludeFromSemantics()
    {
        return $this->excludeFromSemantics;
    }

    /**
     * Set the value of excludeFromSemantics
     *
     * @return  self
     */ 
    public function setExcludeFromSemantics($excludeFromSemantics)
    {
        $this->excludeFromSemantics = $excludeFromSemantics;

        return $this;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of blendMode
     */ 
    public function getBlendMode()
    {
        return $this->colorBlendMode;
    }

    /**
     * Set the value of blendMode
     *
     * @return  self
     */ 
    public function setBlendMode($colorBlendMode)
    {
        $this->colorBlendMode = $colorBlendMode;

        return $this;
    }

    /**
     * Get the value of boxFit
     */ 
    public function getBoxFit()
    {
        return $this->fit;
    }

    /**
     * Set the value of boxFit
     *
     * @return  self
     */ 
    public function setBoxFit($boxFit)
    {
        $this->fit = $boxFit;

        return $this;
    }

    /**
     * Get the value of alignment
     */ 
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * Set the value of alignment
     *
     * @return  self
     */ 
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * Get the value of repeat
     */ 
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Set the value of repeat
     *
     * @return  self
     */ 
    public function setRepeat($repeat)
    {
        $this->repeat = $repeat;

        return $this;
    }

    /**
     * Get the value of centerSlice
     */ 
    public function getCenterSlice()
    {
        return $this->centerSlice;
    }

    /**
     * Set the value of centerSlice
     *
     * @return  self
     */ 
    public function setCenterSlice($centerSlice)
    {
        $this->centerSlice = $centerSlice;

        return $this;
    }

    /**
     * Get the value of matchTextDirection
     */ 
    public function getMatchTextDirection()
    {
        return $this->matchTextDirection;
    }

    /**
     * Set the value of matchTextDirection
     *
     * @return  self
     */ 
    public function setMatchTextDirection($matchTextDirection)
    {
        $this->matchTextDirection = $matchTextDirection;

        return $this;
    }

    /**
     * Get the value of gaplessPlayback
     */ 
    public function getGaplessPlayback()
    {
        return $this->gaplessPlayback;
    }

    /**
     * Set the value of gaplessPlayback
     *
     * @return  self
     */ 
    public function setGaplessPlayback($gaplessPlayback)
    {
        $this->gaplessPlayback = $gaplessPlayback;

        return $this;
    }

    /**
     * Get the value of filterQuality
     */ 
    public function getFilterQuality()
    {
        return $this->filterQuality;
    }

    /**
     * Set the value of filterQuality
     *
     * @return  self
     */ 
    public function setFilterQuality($filterQuality)
    {
        $this->filterQuality = $filterQuality;

        return $this;
    }

    /**
     * Get the value of clickEvent
     */ 
    public function getClickEvent()
    {
        return $this->clickEvent;
    }

    /**
     * Set the value of clickEvent
     *
     * @return  self
     */ 
    public function setClickEvent($clickEvent)
    {
        $this->clickEvent = $clickEvent;

        return $this;
    }
}

