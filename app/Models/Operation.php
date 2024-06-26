<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['type', 'cost'];

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
