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
                                        <div CLASS="card-header bg-secondary text-white">اطلاعات اقامتگاه</div>
                                        <section class="content-body p-xl-4">

                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="name">عنوان اقامتگاه</label>
                                                <div class="col-lg-9">
                                                    <input wire:model.defer="name"
                                                           class="form-control @error('name') error-input-border @enderror"
                                                           name="name" id="name" type="text" placeholder="نام اقامتگاه">
                                                </div>
                                                @foreach ($errors->get('name') as $message)
                                                    <span wire:loading.remove
                                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                @endforeach
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="wc_en">سرویس بهداشتی
                                                    فرنگی</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="wc_en" name="wc_en" id="wc_en"
                                                           class="form-control @error('wc_en') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('wc_en') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="wc_fa">سرویس بهداشتی
                                                    ایرانی</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="wc_fa" name="wc_fa" id="wc_fa"
                                                           class="form-control @error('wc_fa') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('wc_fa') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="bath">حمام</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="bath" name="bath" id="bath"
                                                           class="form-control @error('bath') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('bath') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="single_bed">تخت خواب یک
                                                    نفره</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="single_bed" name="single_bed"
                                                           id="single_bed"
                                                           class="form-control @error('single_bed') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('single_bed') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="double_bed">تخت خواب دو
                                                    نفره</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="double_bed" name="double_bed"
                                                           id="double_bed"
                                                           class="form-control @error('double_bed') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('double_bed') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="capacity">ظرفیت</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="capacity" name="capacity" id="capacity"
                                                           class="form-control @error('capacity') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('capacity') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="price">قیمت</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="price" name="price" id="price"
                                                           class="form-control @error('price') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('price') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="discount">تخفیف</label>
                                                <div class="col-lg-4">
                                                    <input wire:model.defer="discount" name="discount" id="discount"
                                                           class="form-control @error('discount') error-input-border @enderror"
                                                           type="number">
                                                </div>
                                                @foreach($errors->get('discount') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="description">توضیحات</label>
                                                <div class="col-lg-4">
                                                    <textarea wire:model.defer="description" name="description"
                                                              id="description"
                                                              class="form-control @error('description') error-input-border @enderror"
                                                              type="text"
                                                              placeholder="توضیحات لازم را یادداشت کنید"></textarea>
                                                </div>
                                                @foreach($errors->get('description') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label"
                                                       for="status">وضعیت اقامتگاه</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">انتخاب
                                                        وضعیت</small>
                                                    <select
                                                        class="form-select @error('status') error-input-border @enderror"
                                                        name="status" id="status" wire:model.defer="status">
                                                        <option>انتخاب</option>
                                                        <option value="1">نمایش اقامتگاه</option>
                                                        <option value="2">عدم نمایش اقامتگاه</option>
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
                                        <div CLASS="card-header bg-secondary text-white">جزییات محیط و دسته بندی
                                            اقامتگاه
                                        </div>
                                        <section class="content-body p-xl-4">
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="environment_id">محیط
                                                    اقامتگاه</label>
                                                <div class="col-lg-4">
                                                    <select
                                                        class="form-select @error('environment_id') error-input-border @enderror"
                                                        name="environment_id" id="environment_id"
                                                        wire:model.defer="environment_id">

                                                        <option>انتخاب محیط اقامتگاه</option>
                                                        @foreach($environments as $environment)
                                                            <option
                                                                value="{{$environment->id}}">
                                                                {{@$environment->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @foreach($errors->get('environment_id') as $message)
                                                        <span wire:loading.remove
                                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label" for="category_id">دسته بندی
                                                    اقامتگاه</label>
                                                <div class="col-lg-4">
                                                    <select
                                                        class="form-select @error('category_id') error-input-border @enderror"
                                                        name="category_id" id="category_id"
                                                        wire:model.defer="category_id">

                                                        <option>انتخاب دسته بندی اقامتگاه</option>
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{$category->id}}">
                                                                {{@$category->name}}
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
                                                <label class="col-lg-3 col-form-label">اقامتگاه شگفت انگیز</label>
                                                <div class="col-lg-9">
                                                    <label class="form-check my-2" for="status">
                                                        <input class="form-check-input" type="checkbox" checked=""><span
                                                            class="form-check-label">شگفت انگیز</span>
                                                    </label>
                                                </div>
                                            </div>

                                        </section>

                                    </div>
                                @endif
                                @if($currentStep==3)
                                    <div class="col-lg-9">
                                        <div CLASS="card-header bg-secondary text-white">تصویر اقامتگاه</div>
                                        <div class="mb-4">
                                            <label class="form-label"
                                                   for="image">تصاویر اقامتگاه</label>
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
                                <div class="action-buttons d-flex justify-content-between pt-2 pb-2">
                                    @if($currentStep==1)
                                        <div></div>
                                    @endif
                                    @if($currentStep==2 || $currentStep==3)
                                        <button type="button" class="btn btn-sm btn-secondary"
                                                wire:click="decreaseStep()">قبل
                                        </button>
                                    @endif
                                    @if($currentStep==1 || $currentStep==2)
                                        <button type="button" class="btn btn-sm btn-success"
                                                wire:click="increaseStep()">بعد
                                        </button>
                                    @endif
                                    @if($currentStep==3)
                                        <button type="submit" class="btn btn-sm btn-primary">ثبت</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

