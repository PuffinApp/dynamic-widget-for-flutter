<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class TextStyle extends Widget {

    public $color;
    public $debugLabel;
    public $decoration;
    public $fontSize;
    public $fontFamily;
    public $fontStyle;
    public $fontWeight;

    public function __construct(
        int $color = null,
        string $debugLabel = null,
        string $decoration = null,
        float $fontSize = null,
        string $fontFamily = null,
        string $fontStyle = null,
        string $fontWeight = "normal"
    )
    {
       $this->color = dechex($color);
       $this->debugLabel = $debugLabel;
       $this->decoration = $decoration ?? "none";
       $this->fontSize = $fontSize;
       $this->fontFamily = $fontFamily;
       $this->fontStyle = $fontStyle ?? "normal";
       $this->fontWeight = $fontWeight ?? "normal";
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
    public function setColor(int $color)
    {
        $this->color = \dechex($color);

        return $this;
    }

    /**
     * Get the value of debugLabel
     */ 
    public function getDebugLabel()
    {
        return $this->debugLabel;
    }

    /**
     * Set the value of debugLabel
     *
     * @return  self
     */ 
    public function setDebugLabel(string $debugLabel)
    {
        $this->debugLabel = $debugLabel;

        return $this;
    }

    /**
     * Get the value of decoration
     */ 
    public function getDecoration()
    {
        return $this->decoration;
    }

    /**
     * Set the value of decoration
     *
     * @return  self
     */ 
    public function setDecoration(string $decoration)
    {
        $this->decoration = $decoration;

        return $this;
    }

    /**
     * Get the value of fontSize
     */ 
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * Set the value of fontSize
     *
     * @return  self
     */ 
    public function setFontSize(float $fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * Get the value of fontFamily
     */ 
    public function getFontFamily()
    {
        return $this->fontFamily;
    }

    /**
     * Set the value of fontFamily
     *
     * @return  self
     */ 
    public function setFontFamily(string $fontFamily)
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    /**
     * Get the value of fontStyle
     */ 
    public function getFontStyle()
    {
        return $this->fontStyle;
    }

    /**
     * Set the value of fontStyle
     *
     * @return  self
     */ 
    public function setFontStyle(string $fontStyle)
    {
        $this->fontStyle = $fontStyle;

        return $this;
    }

    /**
     * Get the value of fontWeight
     */ 
    public function getFontWeight()
    {
        return $this->fontWeight;
    }

    /**
     * Set the value of fontWeight
     *
     * @return  self
     */ 
    public function setFontWeight(string $fontWeight)
    {
        $this->fontWeight = $fontWeight;

        return $this;
    }
}











