<?php
class Reservation extends \Phalcon\Mvc\Model
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var integer
     */
    public $id_ad;
	/**
    * @var integer
    */
    public $id_client;
    /**
    * @var date
    */
    public $startdate;
    /**
    * @var date
    */
    public $enddate;
} 