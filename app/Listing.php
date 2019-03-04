<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    // Belongs to relationship
    public function user() {
        return $this->belongsTo('App\User');
    }
}
