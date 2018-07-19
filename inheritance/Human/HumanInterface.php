<?php
namespace Human;

interface HumanInterface
{
    /**
     * Get name
     *
     * Return the name of the current human instance
     *
     * @return string
     */
    public function getName() : string;
    
    /**
     * Get age
     *
     * Return the age of the current human instance
     *
     * @return int
     */
    public function getAge() : int;
    
    /**
     * Get gender
     *
     * Return the gender of the current human instance
     *
     * @return string
     */
    public function getGender() : string;
    
    /**
     * Get eye
     *
     * Return the Eye object, representing the current human instance eye
     *
     * @return Eye|null
     */
    public function getEye() : ?Eye;
    
    /**
     * Get hair
     *
     * Return the Hair object, representing the current human instance hair
     *
     * @return Hair|null
     */
    public function getHair() : ?Hair;
    
    /**
     * Set name
     *
     * Set the current human instance name value
     *
     * @param string $name The new name
     *
     * @return $this
     */
    public function setName(string $name);
    
    /**
     * Set age
     *
     * Set the current human instance age value
     *
     * @param int $age The new age
     *
     * @return $this
     */
    public function setAge(int $age);
    
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
    public function setGender(string $gender);
    
    /**
     * Set eye
     *
     * Set the current human instance eye value
     *
     * @param Eye $eye The new eye
     *
     * @return $this
     */
    public function setEye(Eye $eye);
    
    /**
     * Set hair
     *
     * Set the current human instance hair value
     *
     * @param Eye $hair The new hair
     *
     * @return $this
     */
    public function setHair(Hair $hair);
}

