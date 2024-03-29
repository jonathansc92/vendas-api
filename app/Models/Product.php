<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'products';

    protected $hidden = ['pivot'];

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function scopeProduct($query)
    {
        $query->select('name', 'description', 'price');
    }
}
