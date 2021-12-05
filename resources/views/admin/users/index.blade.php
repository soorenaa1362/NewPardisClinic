@extends('admin.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>لیست کاربران</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">موبایل</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">دسترسی</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">عملیات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($users as $key=>$user)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->access }}</td>
                            <td>{{ $user->confirmed }}</td>
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