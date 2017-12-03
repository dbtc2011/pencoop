<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanDetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'principal', 'interest', 'amort', 'balance',
    ];
}
