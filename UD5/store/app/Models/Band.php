<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $fillable = ['name','style','country'];

    public function toString()
    {
        return "" . $this->id;
    }

    public function records(){
        return $this->hasMany(Record::class);
    }
}
