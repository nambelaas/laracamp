<?php

namespace App\Models;

use App\Models\User;
use App\Models\Camps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'camp_id',
        'card_number',
        'expired',
        'cvc',
        'is_paid'
    ];

    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    public function Camp()
    {
        return $this->belongsTo(Camps::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
