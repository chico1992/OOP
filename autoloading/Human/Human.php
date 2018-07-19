<?php

namespace Human;

/**
 * Human
 * 
 * The class human is used to represent a basic human, with a name,
 * a gender, an age, an eye and some hairs.
 * 
 * @author matthieu vallance <matthieu.vallance@vesperiagroup.com>
 * @category exercise_correction
 * @package exercise1
 */
class Human implements HumanInterface
{
    /**
     * Name
     *
     * Store the current object name value
     *
     * @var string
     */
    private $name;
    
    /**
     * Age
     *
     * Store the current object age value
     *
     * @var int
     */
    private $age;
    
    /**
     * Gender
     *
     * Store the current object gender value
     *
     * @var string
     */
    private $gender;
    
    /**
     * Eye
     *
     * Store the current object eye value
     *
     * @var Eye
     */
    private $eye;
    
    /**
     * Hair
     * 
     * Store the current object hair value
     * 
     * @var Hair
     */
    private $hair;
    
    private static $allowedGender = ['male', 'female', 'other'];
    
    /**
     * Get name
     * 
     * Return the name of the current human instance
     * 
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Get age
     * 
     * Return the age of the current human instance
     * 
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Get gender
     * 
     * Return the gender of the current human instance
     * 
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }

    /**
     * Get eye
     * 
     * Return the Eye object, representing the current human instance eye
     * 
     * @return Eye|null
     */
    public function getEye() : ?Eye
    {
        return $this->eye;
    }

    /**
     * Get hair
     * 
     * Return the Hair object, representing the current human instance hair
     * 
     * @return Hair|null
     */
    public function getHair() : ?Hair
    {
        return $this->hair;
    }

    /**
     * Set name
     * 
     * Set the current human instance name value
     * 
     * @param string $name The new name
     * 
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * Set age
     *
     * Set the current human instance age value
     *
     * @param int $age The new age
     *
     * @return $this
     */
    public function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }
    
    /**
     * Set gender
     *
     * Set the current human instance gender value. The gender value will be inserted
     * only if it's 'male', 'female' or 'other'
     *
     * @param string $gender The new gender
     *
     * @return $this
     */
    public function setGender(string $gender)
    {
        if (!in_array($gender, self::$allowedGender)) {
            throw new \RuntimeException('Gender is not allowed');
        }
        
        $this->gender = $gender;
        return $this;
    }

    /**
     * Set eye
     * 
     * Set the current human instance eye value
     * 
     * @param Eye $eye The new eye
     * 
     * @return $this
     */
    public function setEye(Eye $eye)
    {
        $this->eye = $eye;
        return $this;
    }
    
    /**
     * Set hair
     *
     * Set the current human instance hair value
     *
     * @param Eye $hair The new hair
     *
     * @return $this
     */
    public function setHair(Hair $hair)
    {
        $this->hair = $hair;
        return $this;
    }
    
    /**
     * From array
     * 
     * Create a new Human instance from an array of value
     * 
     * @param array $definition The array of value
     * 
     * @return Human
     */
    public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $human = new Human();
        $human->setAge((int)$definition['age'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setName($definition['name'] ?? '')
            ->setEye(Eye::fromArray($definition['eye'] ?? []))
            ->setHair(Hair::fromArray($definition['hair'] ?? []));
        
        return $human;
    }
}

