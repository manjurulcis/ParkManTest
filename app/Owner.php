<?php
/**
 * Created by PhpStorm.
 * User: Manzurul
 * Date: 9/27/2016
 * Time: 1:17 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';

    protected $fillable = [
        'owner_name', 'contact_email'
    ];
    public $timestamps = true;

    public function Garage(){
        return $this->hasMany('App\Garage');
    }
}