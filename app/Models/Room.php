<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms'; // Name of the "rooms" table in the database
    protected $primaryKey = 'id'; // Primary key column name (usually 'id')
    // Add any other properties or methods specific to your Room model if necessary
}
