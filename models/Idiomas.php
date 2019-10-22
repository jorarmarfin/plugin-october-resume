<?php namespace LuisMayta\Resume\Models;

use Model;

/**
 * Model
 */
class Idiomas extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'luismayta_resume_idiomas';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
