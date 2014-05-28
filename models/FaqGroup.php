<?php namespace LaminSanneh\FantasticFaq\Models;

use Model;

/**
 * FaqGroup Model
 */
class FaqGroup extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'laminsanneh_fantasticfaq_faq_groups';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules
     */
    public $rules = [];

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