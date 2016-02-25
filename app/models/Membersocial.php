<?php

class Membersocial extends \Phalcon\Mvc\Model
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
    public $facebook;

    /**
     *
     * @var string
     */
    public $twitter;

    /**
     *
     * @var string
     */
    public $gplus;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Member', 'membersocial_id', array('alias' => 'Member'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'membersocial';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Membersocial[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Membersocial
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
