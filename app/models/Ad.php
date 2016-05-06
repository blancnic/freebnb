<?php
class Ad extends \Phalcon\Mvc\Model
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $title;
	/**
    * @var string
    */
    public $description;
    /**
    * @var string
    */
    public $address1;
    /**
    * @var string
    */
    public $address2;
    /**
    * @var integer
    */
    public $id_town;
    /**
    * @var integer
    */
    public $id_country;
    /**
    * @var integer
    */
    public $id_owner;
    /**
    * @var integer
    */
    public $id_type;

}