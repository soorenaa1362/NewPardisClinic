<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/persian-datepicker.css') }}">    
    <title>کلینیک پردیس</title>
</head>
<body>
    <div id="app">
        <main class="py-4">

            <div class="container-fluid" style="direction: rtl;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                منوی اصلی
                            </div>
                            <div class="card-body">
                                <ul class="py-3">
                                    <li class="nav-item active">                    
                                        <i class="fas fa-user-alt"></i>
                                        <a href="{{ route('admin.dashboard.users') }}" id="users" class="btn">
                                            کاربران 
                                        </a>                    
                                    </li>
                                    <li class="nav-item active">                    
                                        <i class="fas fa-medkit"></i>
                                        <a href="{{ route('admin.dashboard.providers') }}" id="users" class="btn">
                                            سرویس دهنده ها
                                        </a>                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div> <!-- Row -->
            </div> <!-- Container Fluid -->
        </main>
    </div> <!-- app -->
</body>
</html>