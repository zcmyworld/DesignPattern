<?php

//简历模板
abstract class AbstractResume
{
    protected $image = null;
    protected $name = null;
    protected $content = null;

    public function setImage($image)
    {
        $this->image = $image ;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function show()
    {
        var_dump($this->getImage());
        var_dump($this->getName());
        $this->setContent();
    }

    abstract function setContent();
}
