<?php
/**
 * Created by PhpStorm.
 * User: kelvin mbwilo
 * Date: 6/1/14
 * Time: 5:30 AM
 */

class Picture extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pictures';

    protected  $guarded = array('id');

    public function category(){
        return $this->belongsTo('Category', 'category_id', 'id');
    }
}