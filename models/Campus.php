<?php namespace MMlinks\App\Models;

use Model;

/**
 * Campus Model
 */
class Campus extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mmlinks_app_campuses';

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