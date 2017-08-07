<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
  protected $fillable = [
      'user_email', 'trip_name', 'start_location', 'end_location','waypoints','start_date_of_trip','end_date_of_trip',
  ];
}
