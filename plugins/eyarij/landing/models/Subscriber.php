<?php namespace Eyarij\Landing\Models;

use Model;

/**
 * Subscriber Model
 */
class Subscriber extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'eyarij_landing_subscribers';

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
