<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class ListTile extends Widget {

    public $type = "ListTile";
        
    /**
     * Whether this list tile is intended to display three lines of text.
     *
     * @var ?bool
     */
    public $isThreeLine;
    
    /**
     * A widget to display before the title.
     *
     * @var ?Widget
     */
    public $leading;
        
    /**
     * The primary content of the list tile.
     *
     * @var ?Widget
     */
    public $title;
        
    /**
     * Additional content displayed below the title.
     *
     * @var ?Widget
     */
    public $subtitle;
        
    /**
     * A widget to display after the title.	
     *
     * @var ?Widget
     */
    public $trailing;
        
    /**
     * Whether this list tile is part of a vertically dense list.
     *
     * @var ?bool
     */
    public $dense;
    
    /**
     * The tile's internal padding.
     * 
     * You can use EdgeInsetsGeometry constructors.
     *
     * @var ?string
     */
    public $contentPadding;
        
    /**
     * Whether this list tile is interactive.
     *
     * @var bool
     */
    public $enabled;
        
    /**
     * If this tile is also enabled then icons and text are rendered with the same color.	
     *
     * @var bool
     */
    public $selected;
    
    /**
     * __construct
     * 
     * @param ?bool $isThreeLine Whether this list tile is intended to display three lines of text.
     * @param ?Widget $leading A widget to display before the title.
     * @param ?Widget $title The primary content of the list tile.
     * @param ?Widget $subtitle Additional content displayed below the title.
     * @param ?Widget $trailing A widget to display after the title.
     * @param ?bool $dense Whether this list tile is part of a vertically dense list.
     * @param ?string $contentPadding The tile's internal padding.
     * @param bool $enabled Whether this list tile is interactive.
     * @param bool $selected If this tile is also enabled then icons and text are rendered with the same color.
     *
     * @return void
     */
    public function __construct(
        bool $isThreeLine = null,
        Widget $leading = null,
        Widget $title = null,
        Widget $subtitle = null,
        Widget $trailing = null,
        bool $dense = null,
        string $contentPadding = null,
        bool $enabled = true,
        bool $selected = false
    ) {
        $this->isThreeLine = $isThreeLine ?? false;
        $this->leading = $leading;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->trailing = $trailing;
        $this->dense = $dense;
        $this->contentPadding = $contentPadding;
        $this->enabled = $enabled ?? true;
        $this->selected = $selected ?? false;
    }

    /**
     * Get the value of isThreeLine
     */ 
    public function getIsThreeLine()
    {
        return $this->isThreeLine;
    }

    /**
     * Set the value of isThreeLine
     *
     * @return  self
     */ 
    public function setIsThreeLine(bool $isThreeLine)
    {
        $this->isThreeLine = $isThreeLine;

        return $this;
    }

    /**
     * Get the value of leading
     */ 
    public function getLeading()
    {
        return $this->leading;
    }

    /**
     * Set the value of leading
     *
     * @return  self
     */ 
    public function setLeading(Widget $leading)
    {
        $this->leading = $leading;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(Widget $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle(Widget $subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of trailing
     */ 
    public function getTrailing()
    {
        return $this->trailing;
    }

    /**
     * Set the value of trailing
     *
     * @return  self
     */ 
    public function setTrailing(Widget $trailing)
    {
        $this->trailing = $trailing;

        return $this;
    }

    /**
     * Get the value of dense
     */ 
    public function getDense()
    {
        return $this->dense;
    }

    /**
     * Set the value of dense
     *
     * @return  self
     */ 
    public function setDense(bool $dense)
    {
        $this->dense = $dense;

        return $this;
    }

    /**
     * Get the value of contentPadding
     */ 
    public function getContentPadding()
    {
        return $this->contentPadding;
    }

    /**
     * Set the value of contentPadding
     *
     * @return  self
     */ 
    public function setContentPadding(string $contentPadding)
    {
        $this->contentPadding = $contentPadding;

        return $this;
    }

    /**
     * Get the value of enabled
     */ 
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     *
     * @return  self
     */ 
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get the value of selected
     */ 
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * Set the value of selected
     *
     * @return  self
     */ 
    public function setSelected(bool $selected)
    {
        $this->selected = $selected;

        return $this;
    }
}