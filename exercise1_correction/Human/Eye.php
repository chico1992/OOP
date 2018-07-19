<?php

namespace Human;

class EyeFactory
{
    public function __construct() {
        echo __FILE__;
    }
}

class Eye
{
    private $color;
    private $quality;
    
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param mixed $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param mixed $quality
     */
    public function setQuality(string $quality)
    {
        $this->quality = $quality;
        return $this;
    }

    public static function fromArray(array $definition)
    {
        
        $eye = new Eye();
        $eye->setColor($definition['color'] ?? '')
            ->setQuality($definition['quality'] ?? '');
        
        return $eye;
    }
}

