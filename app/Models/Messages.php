<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'message',
        'score',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
