@extends('admin.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-3">
                    <h5>لیست سرویس دهندگان</h5>                
                </div>
                <div class="col-md-9">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#provider">
                        افزودن سرویس دهنده
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">نام و نام خانوادگی</th>
                        <th scope="col">کدملی</th>
                        <th scope="col">جنسیت</th>
                        <th scope="col">تاریخ تولد</th>
                        <th scope="col">وضعیت تاهل</th>
                        <th scope="col">تلفن</th>
                        <th scope="col">عملیات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($providers as $key=>$provider)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $provider->fname }} {{ $provider->lname }}</td>
                            <td>{{ $provider->nationalcode }}</td>
                            <td>{{ $provider->sex }}</td>
                            <td>{{ $provider->birthday }}</td>
                            <td>{{ $provider->married }}</td>
                            <td>{{ $provider->tel }}</td>
                            <td>
                                <a href="">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- Card Body -->
    </div> <!-- Card -->
@endsection



<!-- Modal -->
<div class="modal fade" id="provider" tabindex="-1" aria-labelledby="providerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="providerLabel">افزودن سرویس دهنده</h5>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">نام</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">نام خانوادگی</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">کدملی</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">جنسیت</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">تاریخ تولد</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">وضعیت تاهل</label>
                        <input type="text" class="form-control">
                    </div>   
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">تلفن</label>
                        <input type="text" class="form-control">
                    </div>   
                    <div class="form-group mt-1">
                        <label for="fname" class="mb-1">آیدی کاربر</label>
                        <input type="text" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary mt-2">ذخیره</button>
                </form>
            </div>            
        </div>
    </div>
</div>
