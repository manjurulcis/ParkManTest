<?php
/**
 * Created by PhpStorm.
 * User: Manzurul
 * Date: 9/27/2016
 * Time: 1:17 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $table = 'garages';

    protected $fillable = [
        'garage_name', 'hourly_price', 'currency', 'country', 'center_coordinate'
    ];
    public $timestamps = true;

    public function owner(){
        return $this->belongsTo('App\Owner');
    }
}