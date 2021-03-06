<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $fillable = ['code','name','description'];

    public function toString()
    {
        return "" . $this->id;
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
