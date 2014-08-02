<?php
/**
 * Created by PhpStorm.
 * User: kelvin mbwilo
 * Date: 6/1/14
 * Time: 5:30 AM
 */

class Portfolio extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'portfolio';

    protected  $guarded = array('id');

}