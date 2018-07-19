<?php

namespace Human;

class Child extends Human
{
    private $brain;

    /**
     * Get the value of brain
     */ 
    public function getBrain()
    {
        return $this->brain;
    }

    /**
     * Set the value of brain
     *
     * @return  self
     */ 
    public function setBrain($brain)
    {
        $this->brain = $brain;

        return $this;
    }

    /**
     * From array
     * 
     * Create a new Child instance from an array of value
     * 
     * @param array $definition The array of value
     * 
     * @return Child
     */
    public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $child = new Human();
        $child->setAge((int)$definition['age'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setName($definition['name'] ?? '')
            ->setEye(Eye::fromArray($definition['eye'] ?? []))
            ->setHair(Hair::fromArray($definition['hair'] ?? []))
            ->setBrain($definition['brain'] ?? '');
        
        return $child;
    }
}