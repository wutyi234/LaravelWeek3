<?php

use App\Receipe;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "category";

    public function receipe()
    {
        return $this->hasMany(Receipe::class);
    }
}
