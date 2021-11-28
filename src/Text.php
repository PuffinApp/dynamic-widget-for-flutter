<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class Text extends Widget {

    public $type = "Text";

    public $data;
    public $textAlign;
    public $overflow;
    public $maxLines;
    public $semanticsLabel;
    public $softWrap;
    public $textDirection;
    public $style;
    public $textScaleFactor;

    public function __construct(
        string $data,
        string $textAlign = TextAlign::start, 
        string $overflow = TextOverflow::ellipsis,
        int $maxLines = null,
        string $semanticsLabel = null,
        bool $softWrap = null,
        string $textDirection = TextDirection::ltr,
        TextStyle $style = null,
        float $textScaleFactor = null
    ) {
        $this->data = $data;
        $this->textAlign = $textAlign ?? TextAlign::start;
        $this->overflow = $overflow ?? TextOverflow::ellipsis;
        $this->maxLines = $maxLines;
        $this->semanticsLabel = $semanticsLabel;
        $this->softWrap = $softWrap;
        $this->textDirection = $textDirection ?? TextDirection::ltr;
        $this->style = $style;
        $this->textScaleFactor = $textScaleFactor;
    }

    /**
     * Get the value of data
     */ 
    public function getText()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setText($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of textAlign
     */ 
    public function getTextAlign()
    {
        return $this->textAlign;
    }

    /**
     * Set the value of textAlign
     *
     * @return  self
     */ 
    public function setTextAlign($textAlign)
    {
        $this->textAlign = $textAlign;

        return $this;
    }

    /**
     * Get the value of maxLines
     */ 
    public function getMaxLines()
    {
        return $this->maxLines;
    }

    /**
     * Set the value of maxLines
     *
     * @return  self
     */ 
    public function setMaxLines($maxLines)
    {
        $this->maxLines = $maxLines;

        return $this;
    }

    /**
     * Get the value of semanticsLabel
     */ 
    public function getSemanticsLabel()
    {
        return $this->semanticsLabel;
    }

    /**
     * Set the value of semanticsLabel
     *
     * @return  self
     */ 
    public function setSemanticsLabel($semanticsLabel)
    {
        $this->semanticsLabel = $semanticsLabel;

        return $this;
    }

    /**
     * Get the value of softWrap
     */ 
    public function getSoftWrap()
    {
        return $this->softWrap;
    }

    /**
     * Set the value of softWrap
     *
     * @return  self
     */ 
    public function setSoftWrap($softWrap)
    {
        $this->softWrap = $softWrap;

        return $this;
    }

    /**
     * Get the value of textDirection
     */ 
    public function getTextDirection()
    {
        return $this->textDirection;
    }

    /**
     * Set the value of textDirection
     *
     * @return  self
     */ 
    public function setTextDirection($textDirection)
    {
        $this->textDirection = $textDirection;

        return $this;
    }

    /**
     * Get the value of style
     */ 
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set the value of style
     *
     * @return  self
     */ 
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get the value of textScaleFactor
     */ 
    public function getTextScaleFactor()
    {
        return $this->textScaleFactor;
    }

    /**
     * Set the value of textScaleFactor
     *
     * @return  self
     */ 
    public function setTextScaleFactor($textScaleFactor)
    {
        $this->textScaleFactor = $textScaleFactor;

        return $this;
    }
}