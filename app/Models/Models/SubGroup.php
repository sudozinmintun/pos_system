<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGroup extends Model
{
    use HasFactory;

    public function main_category_table()
    {
        return $this->belongsTo(MainCategory::class, 'main_category_id', 'id');
    }
}
