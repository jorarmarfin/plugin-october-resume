<?php namespace LuisMayta\Resume\Models;

use Model;

/**
 * Model
 */
class Sitio extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $guarded = [];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'luismayta_resume_sitio';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /**
     * Relations
     */
    /**
     * Fotos
     */
    public $attachOne = [
        'fondo' => 'System\Models\File',
        'logo' => 'System\Models\File'
    ];
}
