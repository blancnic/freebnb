<?php
class People extends \Phalcon\Mvc\Model
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $firstname;
	/**
    * @var string
    */
    public $lastname;
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
    public $phone;
    /**
    * @var string
    */
    public $email;
}
