<?php

namespace agostinofiscale\DynamicWidgetForFlutter;

class ListView extends Widget {
    public $type = "ListView";
    public $scrollDirection;
    public $reverse;
    public $shrinkWrap;
    public $cacheExtent;
    public $padding;
    public $itemExtent;
    public $pageSize;
    public $loadMoreUrl;
    public $isDemo;
    public $children;
    public $tempChild;
    public $dataKey;

    public function __construct(
        string $scrollDirection = "vertical",
        bool $reverse = false,
        bool $shrinkWrap = false,
        float $cacheExtent = 0.0,
        $padding = null,
        $itemExtent = null,
        int $pageSize = 10,
        $loadMoreUrl = null,
        bool $isDemo = false,
        array $children = [],
        $tempChild = null,
        $dataKey = null
    ) {
        $this->scrollDirection = $scrollDirection;
        $this->reverse = $reverse;
        $this->shrinkWrap = $shrinkWrap;
        $this->cacheExtent = $cacheExtent;
        $this->padding = $padding;
        $this->itemExtent = $itemExtent;
        $this->pageSize = $pageSize;
        $this->loadMoreUrl = $loadMoreUrl;
        $this->isDemo = $isDemo;
        $this->children = $children;
        $this->tempChild = $tempChild;
        $this->dataKey = $dataKey;
    }

    /**
     * Get the value of scrollDirection
     */ 
    public function getScrollDirection()
    {
        return $this->scrollDirection;
    }

    /**
     * Set the value of scrollDirection
     *
     * @return  self
     */ 
    public function setScrollDirection($scrollDirection)
    {
        $this->scrollDirection = $scrollDirection;

        return $this;
    }

    /**
     * Get the value of reverse
     */ 
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * Set the value of reverse
     *
     * @return  self
     */ 
    public function setReverse($reverse)
    {
        $this->reverse = $reverse;

        return $this;
    }

    /**
     * Get the value of shrinkWrap
     */ 
    public function getShrinkWrap()
    {
        return $this->shrinkWrap;
    }

    /**
     * Set the value of shrinkWrap
     *
     * @return  self
     */ 
    public function setShrinkWrap($shrinkWrap)
    {
        $this->shrinkWrap = $shrinkWrap;

        return $this;
    }

    /**
     * Get the value of cacheExtent
     */ 
    public function getCacheExtent()
    {
        return $this->cacheExtent;
    }

    /**
     * Set the value of cacheExtent
     *
     * @return  self
     */ 
    public function setCacheExtent($cacheExtent)
    {
        $this->cacheExtent = $cacheExtent;

        return $this;
    }

    /**
     * Get the value of padding
     */ 
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * Set the value of padding
     *
     * @return  self
     */ 
    public function setPadding($padding)
    {
        $this->padding = $padding;

        return $this;
    }

    /**
     * Get the value of itemExtent
     */ 
    public function getItemExtent()
    {
        return $this->itemExtent;
    }

    /**
     * Set the value of itemExtent
     *
     * @return  self
     */ 
    public function setItemExtent($itemExtent)
    {
        $this->itemExtent = $itemExtent;

        return $this;
    }

    /**
     * Get the value of pageSize
     */ 
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Set the value of pageSize
     *
     * @return  self
     */ 
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * Get the value of loadMoreUrl
     */ 
    public function getLoadMoreUrl()
    {
        return $this->loadMoreUrl;
    }

    /**
     * Set the value of loadMoreUrl
     *
     * @return  self
     */ 
    public function setLoadMoreUrl($loadMoreUrl)
    {
        $this->loadMoreUrl = $loadMoreUrl;

        return $this;
    }

    /**
     * Get the value of isDemo
     */ 
    public function getIsDemo()
    {
        return $this->isDemo;
    }

    /**
     * Set the value of isDemo
     *
     * @return  self
     */ 
    public function setIsDemo($isDemo)
    {
        $this->isDemo = $isDemo;

        return $this;
    }

    /**
     * Get the value of children
     */ 
    public function getChildren()
    {
        return $this->children;
    }
    
    /**
     * Add a child in children
     * 
     * @return self
     */
    public function addChildren(Widget $child) {
        array_push($this->children, $child);

        return $this;
    } 

    /**
     * Set the value of children
     *
     * @return  self
     */ 
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Get the value of tempChild
     */ 
    public function getTempChild()
    {
        return $this->tempChild;
    }

    /**
     * Set the value of tempChild
     *
     * @return  self
     */ 
    public function setTempChild($tempChild)
    {
        $this->tempChild = $tempChild;

        return $this;
    }

    /**
     * Get the value of dataKey
     */ 
    public function getDataKey()
    {
        return $this->dataKey;
    }

    /**
     * Set the value of dataKey
     *
     * @return  self
     */ 
    public function setDataKey($dataKey)
    {
        $this->dataKey = $dataKey;

        return $this;
    }
}