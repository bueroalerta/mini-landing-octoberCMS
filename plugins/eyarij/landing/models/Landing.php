<?php namespace Eyarij\Landing\Models;

use Model;

/**
 * Landing Model
 */
class Landing extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'eyarij_landing_landings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
