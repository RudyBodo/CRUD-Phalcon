<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Member extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $phonenumber;

    /**
     *
     * @var integer
     */
    public $membersocial_id;

    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Member
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
