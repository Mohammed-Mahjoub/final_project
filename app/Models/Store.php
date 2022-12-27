<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'stores';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'price_after_discount',
        'photo',
        'flag',
    ];

    ######### Begin relations #########################


    public function category()
    {
        return $this->belongsTo('App\Models\category' , 'category_id');
    }


    ######### End relations ###########################

}
