<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table="topics";

    protected $fillable = ['heading', 'body', 'chapter_id', 'primary_key', 'secondary_key', 'file_name'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
