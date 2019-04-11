<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    use Notifiable;
    use Searchable;


    protected $fillable = [
        'name', 'unit_cost', 'meta_description','meta_keywords','image','imd_dop',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function searchableAs()
    {
        return 'name';
    }

    protected $table='products';

}
