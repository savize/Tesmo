<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Name'];

    public function products()
    {
       $product = $this->hasMany(Products::class, 'CategId')->get();
        return $product;
    }



}
