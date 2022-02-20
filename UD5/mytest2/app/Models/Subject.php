<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['id_subject','name','abreviation'];

    public function toString()
    {
        return "" . $this->id;
    }
}
