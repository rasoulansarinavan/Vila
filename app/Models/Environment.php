<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Environment extends Model
{
    use HasFactory;
    use WithFileUploads;
    protected $guarded = [];

    public function saveEnvironment($formData, $environment_id, $image)
    {
        DB::transaction(function () use ($image, $environment_id, $formData) {
            $image_name = '';
            if ($image) {
                $extension = $image->extension();
                $image_name = 'environment_' . Str::random(10) . time() . '.' . $extension;
                if ($environment_id != 0) {
                    $environmentFileName = File::query()->where([
                        'product_id' => $environment_id,
                        'type' => 'brand',
                    ])->pluck('name')->first();
                    unlink('images/environments/' . $environmentFileName);
                }
                Image::make($image)->crop('300', '300')->save(public_path('images/environments/' . $image_name));
            }

            $environment = $this->insertToEnvironmentTable($environment_id, $formData);
            if ($image) {
                $this->insertToFileTable($environment->id, $image_name);
            }
        });
    }

    public function insertToEnvironmentTable($environment_id, $formData)
    {
        return Environment::query()->updateOrCreate(
            [
                'id' => $environment_id
            ],
            [
                'name' => $formData['name']
            ]
        );
    }

    public function insertToFileTable($environment_id, $image_name)
    {
        File::query()->updateOrCreate(
            [
                'product_id' => $environment_id,
                'type' => 'environment'
            ],
            [
                'name' => $image_name,
            ]
        );
    }

    public function file()
    {
        return $this->belongsTo(File::class, 'id', 'product_id')->where('type', '=', 'environment');
    }
}
