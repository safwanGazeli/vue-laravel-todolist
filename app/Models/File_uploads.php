<?php

namespace App\Models;

use App\Models\Todos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File_uploads extends Model
{
    use HasFactory;
    protected $fillable = [
       'name',
       'size',
       'path',
       'extension',
    ];

    public function todos() {
        return $this->belongsToMany(Todos::class);
    }


}
