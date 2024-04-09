<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id','file_id','file_name'
    ];

    /**
     * Get the content document that owns the file.
    */
    public function content()
    {
        return $this->belongsTo(Content::class, 'group_id');
    }
}