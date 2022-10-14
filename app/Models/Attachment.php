<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->belongsTo(Attachment::class);
    }
}
