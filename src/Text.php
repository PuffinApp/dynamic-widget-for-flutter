<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

/**
 * Text
 * 
 * Text class is based on TextWidgetParser class from Dynamic Widget.
 */
class Text extends Widget {

    public $type = "Text";
    
    /**
     * The text to display	
     *
     * @var string
     */
    public $data;   

    /**
     * How the text should be aligned horizontally.
     * 
     * You can use TextAlign class as enumerator.
     *
     * @var string
     */
    public $textAlign;
        
    /**
     * How visual overflow should be handled.
     * 
     * You can use TextOverflow class as enumerator.
     *
     * @var mixed
     */
    public $overflow;
        
    /**
     * An optional maximum number of lines for the text to span, wrapping if necessary. If the text exceeds the given number of lines, it will be truncated according to overflow.
     *
     * @var int
     */
    public $maxLines;
    
    /**
     * An alternative semantics label for this text.	
     *
     * @var string
     */
    public $semanticsLabel;
        
    /**
     * Whether the text should break at soft line breaks.
     *
     * @var bool
     */
    public $softWrap;
        
    /**
     * The directionality of the text.
     * 
     * You can use TextDirection as enumarator.
     *
     * @var mixed
     */
    public $textDirection;
        
    /**
     * The style of the text.
     * 
     * You can use TextStyle class.
     *
     * @var mixed
     */
    public $style;
        
    /**
     * The number of font pixels for each logical pixel.
     *
     * @var float
     */
    public $textScaleFactor;
        
    /**
     * Create a Text widget instance.
     * 
     * @param string $data The text to display
     * @param ?string $textAlign How the text should be aligned horizontally.
     * @param ?string $overflow How visual overflow should be handled.
     * @param ?int $maxLines An optional maximum number of lines for the text to span, wrapping if necessary. If the text exceeds the given number of lines, it will be truncated according to overflow.
     * @param ?string $semanticsLabel An alternative semantics label for this text.	 
     * @param ?bool $softWrap Whether the text should break at soft line breaks.
     * @param ?string $textDirection The directionality of the text.
     * @param ?TextStyle $style The style of the text.
     * @param ?float $textScaleFactor The number of font pixels for each logical pixel.
     *
     * @return Text
     */
    public function __construct(
        string $data,
        string $textAlign = null, 
        string $overflow = null,
        int $maxLines = null,
        string $semanticsLabel = null,
        bool $softWrap = null,
        string $textDirection = null,
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
    public function setText(string $data)
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
    public function setTextAlign(string $textAlign)
    {
        $this->textAlign = $textAlign;

        return $this;
    }

    /**
     * Get the value of overflow
     */ 
    public function getOverflow()
    {
        return $this->overflow;
    }

    /**
     * Set the value of overflow
     *
     * @return  self
     */ 
    public function setOverflow($overflow)
    {
        $this->overflow = $overflow;

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
    public function setMaxLines(int $maxLines)
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
    public function setSemanticsLabel(string $semanticsLabel)
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
    public function setStyle(TextStyle $style)
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