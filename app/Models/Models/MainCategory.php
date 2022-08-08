<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'unit',
        'main_group_id'
    ];

    public function main_groups_table()
    {
        return $this->belongsTo(MainGroup::class, 'main_group_id', 'id');
    }

    public function sub_groups_table()
    {
        return $this->hasMany(SubGroup::class, 'main_category_id', 'id');
    }
}
