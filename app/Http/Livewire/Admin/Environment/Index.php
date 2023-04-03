<?php

namespace App\Http\Livewire\Admin\Environment;

use App\Models\Environment;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $name = '', $image, $environment_id;

    public function saveEnvironment($formData, Environment $environments)
    {
        $rules = [];
        if ($this->environment_id != null) {
            $environment_id = $this->environment_id;
            $rules['name'] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
        } else {
            $environment_id = 0;
            $rules['name'] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
        }
        $rules['image'] = 'image|mimes:jpg,jpeg,png,gif|max:1024';
        $image = $this->image;

        $validator = Validator::make($formData, $rules);
        $validator->validate();
        $this->resetValidation();
        $environments->saveEnvironment($formData, $environment_id, $image);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->name = '';
        $this->image = '';
        $this->environment_id = '';
    }

    public function editEnvironment($environment_id)
    {
        $environment = Environment::query()->where('id', $environment_id)->first();
        $this->name = $environment->name;
        $this->image = $environment->image;
    }

    public function render()
    {
        $environments = Environment::all();
        return view('admin.livewire.environment.index', ['environments' => $environments])->extends('admin.layouts.app');
    }
}
