<?php

namespace App\Models;

use App\Models\User;
use App\Models\File_uploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todos extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'is_complete',
        'user_id',
    ];

    public function Users() {
        return $this->belongsTo(User::class);
    }

    public function fileUploads() {
        return $this->belongsToMany(File_uploads::class);
    }
}
