<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = ['title','code','year', 'format','condition'];

    public function toString()
    {
        return "" . $this->id;
    }
}
