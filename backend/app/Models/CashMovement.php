<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashMovement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cash_register_id',
        'type',
        'description',
        'amount',
    ];
}
