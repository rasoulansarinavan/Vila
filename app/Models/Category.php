<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveCategory($formData, $category_id)
    {
        Category::query()->updateOrCreate(
            [
                'id' => $category_id
            ],
            [
                'name' => $formData['name']
            ]
        );
    }
}
