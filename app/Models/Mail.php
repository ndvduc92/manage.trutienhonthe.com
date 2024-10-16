<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    public function char() {
        return $this->belongsTo(Char::class, "char_id", "char_id");
    }

    public function sender() {
        return $this->belongsTo(User::class, 'send_by', 'id');
    }
}
