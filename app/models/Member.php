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

    /**
     * Validations and business logic
     *
     * @return boolean
     */

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('membersocial_id', 'Membersocial', 'id', array('alias' => 'Membersocial'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
}
