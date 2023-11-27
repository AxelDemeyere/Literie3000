<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Dimensions;

class Produit extends Model
{
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
}
