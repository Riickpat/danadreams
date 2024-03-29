<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newsletter extends Model
{
    use HasFactory;

        protected $primaryKey = 'id';
        protected $table = 'newsletters';
        protected $fillable = [
            'email',
            'telephone'
        ];
}
