<?php

namespace Human;

class Hair
{
    private $color;
    private $length;
    
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
    public function getLength()
    {
        return $this->length;
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
     * @param mixed $length
     */
    public function setLength(int $length)
    {
        $this->length = $length;
        return $this;
    }

    public static function fromArray(array $definition)
    {
        $hair = new Hair();
        $hair->setColor($definition['color'] ?? '')
            ->setLength((int)$definition['length'] ?? '');
        
        return $hair;
    }
}

