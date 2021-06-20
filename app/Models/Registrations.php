<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    protected $table='registrations';
    protected $fillable=['Index_Number','Fingerprint_Id','Name','Gender','Class_Name','Parent_Name','Telephone','Image'];
    use HasFactory;
}
