<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberregis extends Model
{
    protected $connection = 'secondary';
    protected $table = 'memberregis';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = null;
    
    use HasFactory;
}
