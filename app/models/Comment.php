<?php
class Photo extends \Phalcon\Mvc\Model
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var date
     */
    public $datecreation;
    /**
     * @var string
     */
    public $title;
	/**
    * @var string
    */
    public $description;
    /**
    * @var integer
    */
    public $id_ad;
    /**
    * @var integer
    */
    public $id_people;
}