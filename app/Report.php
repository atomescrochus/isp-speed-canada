<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function postalcode()
    {
        return $this->belongsTo(PostalCode::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
