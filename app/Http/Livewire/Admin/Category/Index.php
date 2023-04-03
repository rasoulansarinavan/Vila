<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $name = '', $category_id;
    protected $listeners = ['delete'];
    public function saveCategory($formData, Category $categories)
    {
        $rules = [];

        if ($this->category_id != null) {
            $category_id = $this->category_id;
            $rules['name'] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
        } else {
            $category_id = 0;
            $rules['name'] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
        }

        $validator = Validator::make($formData, $rules);
        $validator->validate();
        $this->resetValidation();
        $categories->saveCategory($formData, $category_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('دسته بندی با موفقیت ثبت شد')
        ]);

        $this->name = '';
        $this->category_id = '';

    }

    public function editCategory($category_id)
    {
        $category = Category::query()->where('id', $category_id)->first();
        $this->name = $category->name;
        $this->category_id = $category->id;
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('آیا مطمئن هستی؟؟'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($category_id)
    {
        Category::query()->where('id', $category_id)->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'عملیات حذف با موفقیت انجام شد'
        ]);
    }

    public function render()
    {
        $categories = Category::all();
        return view('admin.livewire.category.index', ['categories' => $categories])->extends('admin.layouts.app');
    }
}
