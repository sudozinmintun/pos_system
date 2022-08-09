<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageIngredients extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'main_categorie_id',
        'sub_group_id',
        'number_of_unit',
        'price',
    ];

    public function main_category_table()
    {
        return $this->belongsTo(MainCategory::class, 'main_categorie_id', 'id');
    }
}
