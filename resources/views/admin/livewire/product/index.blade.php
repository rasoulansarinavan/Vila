<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <div class="row gx-5">
                        <div class="tab-content" id="animateLineContent-4">
                            <form wire:submit.prevent="saveProduct(Object.fromEntries(new FormData($event.target)))">
                                @if($currentStep==1)
                                    <div class="col-lg-9">
                                        <div CLASS="card-header bg-secondary text-white">General Details</div>
                                        <section class="content-body p-xl-4">
                                            @foreach(config('app.languages') as $lang)
                                                <div class="row mb-4">
                                                    <label class="col-lg-3 col-form-label"
                                                           for="name">@lang('form-labels.product-name') {{$lang}} </label>
                                                    <div class="col-lg-9">
                                                        <input wire:model.defer="names.{{$lang}}"
                                                               class="form-control @error('name') error-input-border @enderror"
                                                               name="{{$lang}}" id="name_{{$lang}}" type="text"
                                                               placeholder="Type here">
                                                    </div>
                                                    @foreach ($errors->get($lang) as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                            @foreach(config('app.languages') as $lang)
                                                <div class="row mb-4">
                                                    <label class="col-lg-3 col-form-label"
                                                           for="description">@lang('form-labels.product-description') {{$lang}}</label>
                                                    <div class="col-lg-9">
                                                    <textarea wire:model.defer="describes.{{$lang}}"
                                                              class="form-control @error('description') error-input-border @enderror"
                                                              placeholder="Type here" rows="4"
                                                              name="{{$lang}}" id="description_{{$lang}}"></textarea>
                                                    </div>
                                                    @foreach ($errors->get('description') as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="brand_id">@lang('form-labels.product-brand')</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">Choose
                                                        Brand</small>
                                                    <select
                                                        class="form-select @error('brand_id') error-input-border @enderror"
                                                        name="brand_id" id="brand_id"
                                                        wire:model.defer="brand_id">

                                                        <option>choose parent category</option>
                                                        @foreach($brands as $brand)
                                                            <option
                                                                value="{{$brand->id}}">
                                                                {{$brand->local->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @foreach($errors->get('brand_id') as $message)
                                                        <span wire:loading.remove
                                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="code">@lang('form-labels.product-code')</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="code" name="code" id="code"
                                                           class="form-control @error('code') error-input-border @enderror"
                                                           type="number"
                                                           placeholder="012345678">
                                                </div>
                                                @foreach($errors->get('code') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="price">@lang('form-labels.product-price')</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="price"
                                                           name="price" id="price"
                                                           class="form-control @error('price') error-input-border @enderror"
                                                           type="number"
                                                           placeholder="012345678">
                                                </div>
                                                @foreach($errors->get('price') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="quantity">@lang('form-labels.product-quantity')</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="quantity" name="quantity" id="quantity"
                                                           class="form-control @error('quantity') error-input-border @enderror"
                                                           type="number"
                                                           placeholder="012345678">
                                                </div>
                                                @foreach($errors->get('quantity') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="discount">@lang('form-labels.product-discount')</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="discount" name="discount" id="discount"
                                                           class="form-control @error('discount') error-input-border @enderror"
                                                           type="number"
                                                           placeholder="012345678">
                                                </div>
                                                @foreach($errors->get('discount') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="status">@lang('form-labels.product-status')</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">Choose
                                                        status</small>
                                                    <select
                                                        class="form-select @error('status') error-input-border @enderror"
                                                        name="status" id="status"
                                                        wire:model.defer="status">

                                                        <option>choose parent category</option>
                                                        <option
                                                            value="1">@lang('form-labels.product-enable-this-product')</option>
                                                        <option
                                                            value="2">@lang('form-labels.product-disable-this-product')</option>
                                                    </select>
                                                    @foreach($errors->get('status') as $message)
                                                        <span wire:loading.remove
                                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                @endif
                                @if($currentStep==2)
                                    <div class="col-lg-9">
                                        <div CLASS="card-header bg-secondary text-white">Category Details</div>
                                        <section class="content-body p-xl-4">
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="size_id">@lang('form-labels.product-size')</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">Choose
                                                        Size</small>
                                                    <select
                                                        class="form-select @error('size_id') error-input-border @enderror"
                                                        name="size_id" id="size_id"
                                                        wire:model.defer="size_id">

                                                        <option>choose parent category</option>
                                                        @foreach($sizes as $size)
                                                            <option
                                                                value="{{$size->id}}">
                                                                {{@$size->size->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @foreach($errors->get('size_id') as $message)
                                                        <span wire:loading.remove
                                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="color_id">@lang('form-labels.product-color')</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">Choose
                                                        Color</small>
                                                    <select
                                                        class="form-select @error('color_id') error-input-border @enderror"
                                                        name="color_id" id="color_id"
                                                        wire:model.defer="color_id">

                                                        <option>choose parent category</option>
                                                        @foreach($colors as $color)
                                                            <option
                                                                value="{{$color->id}}">
                                                                {{@$color->color->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @foreach($errors->get('color_id') as $message)
                                                        <span wire:loading.remove
                                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="category_id">@lang('form-labels.product-category')</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">Choose
                                                        Category</small>
                                                    <select
                                                        class="form-select @error('category_id') error-input-border @enderror"
                                                        name="category_id" id="category_id"
                                                        wire:model.defer="category_id">

                                                        <option>choose parent category</option>
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{$category->id}}">
                                                                {{@$category->local->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @foreach($errors->get('category_id') as $message)
                                                        <span wire:loading.remove
                                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="currency_id">@lang('form-labels.product-currency')</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">Choose
                                                        Currency</small>
                                                    <select
                                                        class="form-select @error('currency_id') error-input-border @enderror"
                                                        name="currency_id" id="currency_id"
                                                        wire:model.defer="currency_id">

                                                        <option>choose parent category</option>
                                                        @foreach($currencies as $currency)
                                                            <option
                                                                value="{{$currency->id}}">
                                                                {{@$currency->local->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @foreach($errors->get('currency_id') as $message)
                                                        <span wire:loading.remove
                                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label
                                                    class="col-lg-3 col-form-label">@lang('form-labels.product-special-offer')</label>
                                                <div class="col-lg-9">
                                                    <label class="form-check my-2">
                                                        <input class="form-check-input" type="checkbox" checked=""><span
                                                            class="form-check-label">@lang('form-labels.product-special-this-product')</span>
                                                    </label>
                                                </div>
                                            </div>

                                        </section>

                                    </div>
                                @endif
                                @if($currentStep==3)
                                    <div class="col-lg-9">
                                        <div CLASS="card-header bg-secondary text-white">Image</div>
                                        <div class="mb-4">
                                            <label class="form-label" for="image">@lang('form-labels.product-image')</label>
                                            <input name="image" wire:model="image"
                                                   class="form-control @error('image') error-input-border @enderror"
                                                   id="image" type="file">
                                            @foreach ($errors->get('image') as $message)
                                                <span wire:loading.remove
                                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                            @endforeach
                                            <div wire:loading wire:target="image">Uploading...</div>
                                        </div>
                                    </div>
                                @endif
                                <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                                    @if($currentStep==1)
                                        <div></div>
                                    @endif
                                    @if($currentStep==2 || $currentStep==3)
                                        <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">Back</button>
                                    @endif
                                    @if($currentStep==1 || $currentStep==2)
                                        <button type="button" class="btn btn-sm btn-success" wire:click="increaseStep()">Next</button>
                                    @endif
                                    @if($currentStep==3)
                                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

