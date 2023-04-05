<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Environment;
use App\Models\File;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $name = '', $wc_en, $wc_fa, $bath, $single_bed, $double_bed, $capacity, $price, $discount, $description, $status, $environment_id, $category_id, $image, $product_id;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }


    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'name' => 'required',
                'wc_en' => 'required',
                'wc_fa' => 'required',
                'bath' => 'required',
                'single_bed' => 'required',
                'double_bed' => 'required',
                'capacity' => 'required',
                'price' => 'required',
                'discount' => 'required',
                'description' => 'required',
                'status' => 'required',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'environment_id' => 'required',
                'category_id' => 'required',
            ]);
        }
    }

    public function saveProduct($formData)
    {
        $this->resetErrorBag();
        if ($this->currentStep == 3) {
            $this->validate([
                'image' => 'required| image'
            ]);
        }
        $product = Product::query()->create(
            [
                'id' => $this->product_id,
                'name' => $this->name,
                'wc_en' => $this->wc_en,
                'wc_fa' => $this->wc_fa,
                'bath' => $this->bath,
                'single_bed' => $this->single_bed,
                'double_bed' => $this->double_bed,
                'capacity' => $this->capacity,
                'price' => $this->price,
                'discount' => $this->discount,
                'description' => $this->description,
                'status' => $this->status,
                'environment_id' => $this->environment_id,
                'category_id' => $this->category_id,
                'special_offer' => 1
            ]);
        $image = $this->image;
        $image_name = '';
        if ($image) {
            $extension = $image->extension();
            $image_name = 'product_' . Str::random(10) . time() . '.' . $extension;
            Image::make($image)->crop('300', '300')->save(public_path('images/products/' . $image_name));
        }

        $product_id = $product->id;

        File::query()->updateOrCreate(
            [
                'product_id' => $product_id,
                'type' => 'product'
            ],
            [
                'name' => $image_name,
            ]
        );
    }

    public function render()
    {
        $categories = Category::all();
        $environments = Environment::all();
        return view('admin.livewire.product.index', ['categories' => $categories, 'environments' => $environments])->extends('admin.layouts.app');
    }
}
