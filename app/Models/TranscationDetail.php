<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranscationDetail extends Model
{
    use HasFactory;
    protected $table = 'transactions_details';
    protected $guarded = ['id'];

    protected $hidden = [''];
}
