<?php
/**
 * Created by PhpStorm.
 * User: kelvin mbwilo
 */

class Category extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category';

    protected  $guarded = array('id');

    public function pictures(){
        return $this->hasMany('Picture', 'category_id', 'id');
    }
} 