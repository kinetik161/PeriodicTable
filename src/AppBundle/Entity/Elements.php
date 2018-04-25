<?php
/**
 * Created by PhpStorm.
 * User: MVYaroslavcev
 * Date: 21/04/18
 * Time: 16:02
 */

namespace AppBundle\Entity;


class Elements
{
    private $id;
    private $element;
    private $name;
    private $namerus;
    private $properties;

    /**
     * @return mixed
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param mixed $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param mixed $element
     */
    public function setElement($element)
    {
        $this->element = $element;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNamerus()
    {
        return $this->namerus;
    }

    /**
     * @param mixed $namerus
     */
    public function setNamerus($namerus)
    {
        $this->namerus = $namerus;
    }

}