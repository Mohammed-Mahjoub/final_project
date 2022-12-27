<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'address',
        'photo',
        'user_id',
    ];

    ######### Begin relations #########################

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function stores()
    {
        return $this->hasMany('App\Model\Store' , 'category_id');
    }
    ######### End relations ###########################

}
