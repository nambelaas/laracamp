<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Camps extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'price',
    ];

    public function getIsRegisteredAttribute(){
        if(!Auth::check()){
            return false;
        }

        return Checkout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
    }
}
