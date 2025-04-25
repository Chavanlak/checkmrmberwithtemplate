<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberinput extends Model
{
    // protected $table = 'tsr_memberchob';
    // public $timestamps = false;
    // public $incrementing = false;
    // protected $primaryKey = 'IdMember';
    protected $table = 'memberinput';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'IdMember';
    use HasFactory;
}
