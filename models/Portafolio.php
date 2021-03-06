<?php namespace LuisMayta\Resume\Models;

use Model;

/**
 * Model
 */
class Portafolio extends Model
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
    public $table = 'luismayta_resume_portafolio';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
        'trabajo' => 'System\Models\File'
    ];
    /**
     * Scope a muestra categorias
     */
    public function scopeCategorias($query)
    {
        return $query->groupBy('categoria');
    }
}
