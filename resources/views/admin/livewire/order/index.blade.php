<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">لیست سفارشات</h2>
        </div>
        <div>
            <input class="form-control bg-white" type="text" placeholder="Search order ID">
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input class="form-control" type="text" placeholder="....جست و جو">
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>وضعیت</option>
                        <option>فعال</option>
                        <option>غیرفعال</option>
                        <option>نمایش همه</option>
                    </select>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>نمایش 20</option>
                        <option>نمایش 30</option>
                        <option>نمایش 40</option>
                    </select>
                </div>
            </div>
        </header>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">نام اقامتگاه</th>
                        <th scope="col">زمان درخواست</th>
                        <th scope="col">تعداد روز</th>
                        <th scope="col">تعداد میهمان</th>
                        <th scope="col">نام کاربر</th>
                        <th scope="col">وضعیت رزرو</th>
                        <th class="text-end" scope="col">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td><b>{{@$order->product->name}}</b></td>
                            <td>jane@example.com</td>
                            <td>$710.68</td>
                            <td><span class="badge rounded-pill alert-success">Received</span></td>
                            <td>28.04.2022</td>
                            <td>28.04.2022</td>
                            <td class="text-end"><a class="btn btn-md rounded font-sm" href="#">Detail</a>
                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm" href="#"
                                                         data-bs-toggle="dropdown"><i
                                            class="material-icons md-more_horiz"></i></a>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">View detail</a><a
                                            class="dropdown-item" href="#">Edit info</a><a
                                            class="dropdown-item text-danger" href="#">Delete</a></div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</section>

