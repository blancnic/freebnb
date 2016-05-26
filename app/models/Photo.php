<?php
class Photo extends \Phalcon\Mvc\Model
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
    public $url;
    /**
    * @var integer
    */
    public $id_ad;
}