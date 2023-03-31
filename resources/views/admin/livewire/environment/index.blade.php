<section class="content-main">
    <div class="content-header">
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form wire:submit.prevent="saveEnvironment(Object.fromEntries(new FormData($event.target)))">

                            <div class="mb-4">
                                <label class="form-label" for="name">نام محیط گردشگری</label>
                                <input value="{{$name}}" wire:model.defer="name"
                                       class="form-control @error('name') error-input-border @enderror" name="name" id="name" type="text">
                                @foreach ($errors->get('name') as $message)
                                    <span wire:loading.remove
                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                @endforeach
                            </div>

                        <div class="mb-4">
                            <label class="form-label" for="image">تصور محیط گردشگری</label>
                            <input  wire:model="image" class="form-control @error('image') error-input-border @enderror" id="image" type="file">
                            @foreach ($errors->get('image') as $message)
                                <span wire:loading.remove
                                      class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                            @endforeach
                            <div wire:loading wire:target="image">Uploading...</div>
                        </div>


                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">ثبت</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </th>
                                <th>ردیف</th>
                                <th>نام محیط گردشگری</th>
                                <th style="width: 10%;">تصویر محیط گردشگری</th>
                                <th class="text-end">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($environments as $environment)
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$environment->name}}</td>
                                    <td>
                                        <img style=" width: 153px; height: 100px;"
                                             src="/images/environments/{{@$environment->file->name}}" alt="">
                                    </td>

                                    <td class="text-end">
                                        <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                                 data-bs-toggle="dropdown"><i
                                                    class="material-icons md-more_horiz"></i></a>


                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" wire:click="editEnvironment('{{$environment->id}}')">ویرایش</a>
                                                <a class="dropdown-item text-danger"
                                                   wire:click="deleteConfirm({{$environment->id}})">حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
