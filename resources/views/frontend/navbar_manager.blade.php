<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg position-sticky z-3" style="background-color:#FDE7FB;top:0">
    <div class="container">
        <div class=" row collapse navbar-collapse " id="navbarSupportedContent">
            <div class="d-flex col-lg-3 justify-content-start">
                <a href="{{Session::get('userData')['ChucVu']=="QuanLy"  ? route("homemanager") : route("employeehome")}}"
                   class="d-flex">
                    <img class="card-img-top-logo rounded-lg " src="{{asset("images/logo-home.svg")}}" alt="/"
                         style="height:41px"/>
                    <img class="card-img-top-text rounded-lg" src="{{asset("images/text_home.svg")}}" alt="/"
                         style="width:141px;height:41px"/>
                </a>
            </div>
            <div class="col-6">
                <div style="padding-left: 20%; padding-right: 20%">
                    <form method="GET">
                        <div class="input-group">
                            <a href="" class="position-absolute custom-searchbar " id="search-addon">
                                <i class="fas fa-search icon-search "></i>
                            </a>
                            <input
                                type="text"
                                name="search"
                                value="{{ request()->get('search') }}"
                                class="custom-searchbar_input position-relative form-control"
                                placeholder="Tìm kiếm ..." aria-label="Search" aria-describedby="search-addon"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class=" col-lg-3  collapse navbar-collapse justify-content-end " id="navbarNav" role="button">
                <a class="nav-link active fs-3 fw-medium" aria-current="page" href="{{Session::get('userData')['ChucVu']=="QuanLy"  ? route("homemanager") : route("employeehome")}}">Trang
                    chủ</a>
                <div class="dropdown border rounded rounded-pill ms-3 p-3 bg-white">
                    @empty(!Session::get('userData'))
                        <div class="btn-menu btn-group">
                            <button type="button" class="btn " data-bs-toggle="dropdown" data-bs-display="static"
                                    aria-expanded="false">
                                <i class="fas fa-bars fa-lg px-1"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-center border-1 rounded-4 position-absolute"
                                style="background-color:#FDE7FB; border-color:#990033;top:60px; width:240px; right:-40px; ">
                                <li>
                                    <a href="/feedback" class="text-decoration-none">
                                        <button class="dropdown-item fw-medium py-2 fs-6" type="button" href="">Đánh giá
                                            và
                                            phản
                                            hồi
                                        </button>
                                    </a>

                                </li>
                                <li>
                                    <a href="/historyandreviews1" class="text-decoration-none">
                                        <button class="dropdown-item fw-medium py-2 fs-6" type="button">Quản lí đặt
                                            phòng
                                        </button>
                                    </a>

                                </li>
                                <li>
                                    <a href="/favouritelist" class="text-decoration-none">
                                        <button
                                            class="dropdown-item fw-medium border-bottom border-secondary-subtler py-2 fs-6"
                                            type="button" style="border-color:blueviolet">Danh sách yêu thích
                                        </button>
                                    </a>
                                </li>
                                <li>

                                    <a href="/cancelroom" class="text-decoration-none">
                                        <button class="dropdown-item py-2 fs-6" type="button">Quản lí thông tin đặt
                                            phòng
                                        </button>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{route('manage_profile')}}" class="text-decoration-none">
                                        <button class="dropdown-item  border-bottom border-secondary-subtler py-2 fs-6"
                                                type="button" style="border-color:blueviolet">Quản lí thông tin cá nhân
                                        </button>

                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('changepasswordnv')}}" class="text-decoration-none">
                                        <button class="dropdown-item  border-bottom border-secondary-subtler py-2 fs-6"
                                                type="button" style="border-color:blueviolet">Thay đổi mật khẩu
                                        </button>

                                    </a>
                                </li>
                                <li>
                                    <button class="dropdown-item py-2 fs-6" type="button">Trung tâm hỗ trợ</button>
                                </li>
                                <li>
                                    <a href="{{route("logout")}}" class="dropdown-item py-2 fs-6">Đăng xuất</a>
                            </ul>
                        </div>
                    @else
                        <div class="btn-user btn-group ">
                            <button type="button" class="btn btn-secondary rounded-circle" data-bs-toggle="dropdown"
                                    data-bs-display="static" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end border-1 rounded-4 position-absolute z-1"
                                style="background-color:#FDE7FB; border-color:#990033; top:60px; width:220px">
                                <li>
                                    <a href="/employeeprofile" class="text-decoration-none">
                                        <button class="dropdown-item fs-6 py-2" type="button">Quản lý tài khoản cá nhân
                                        </button>

                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("logout")}}" class="dropdown-item py-2 fs-6">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    @endempty
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</nav>

</body>
</html>
