<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model {

    protected $fillable = [
        'name',
        'nemonico',
        'address',
        'owner_id',
        'siteid',
        'instance',
        'tecnology',
        'emplz',
        'comuna',
        'provincia',
        'region',
        'category'
    ];

}
