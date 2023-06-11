@extends('layout.app')
@section('content')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">POS System</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Dashboards</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        {{-- <a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary">Recent Orders</a> --}}
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary">Save Orders</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0">
                            <!--begin::Pos food-->
                            <div class="card card-flush card-p-0 bg-transparent border-0">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-3 mb-8">
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-0">
                                            <!--begin::Nav link-->
                                            @foreach ($kategori as $key => $category)
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show" data-bs-toggle="pill" href="#kt_pos_food_content_1" style="width: 138px;height: 180px">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <!--begin::Food icon-->
                                                    <img src="dist\assets\media\svg\brand-logos\adidas-9.svg" class="w-50px" alt="" />
                                                    <!--end::Food icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="">
                                                        <span class="text-gray-800 fw-bold fs-2 d-block">{{ $category->name_category }}</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            @endforeach
                                            <!--end::Nav link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-0">
                                            <!--begin::Nav link-->
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_2" style="width: 138px;height: 180px">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <!--begin::Food icon-->
                                                    <img src="assets/media/svg/food-icons/salad.svg" class="w-50px" alt="" />
                                                    <!--end::Food icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Salad</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">14 Salads</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::Nav link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-0">
                                            <!--begin::Nav link-->
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_3" style="width: 138px;height: 180px">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <!--begin::Food icon-->
                                                    <img src="assets/media/svg/food-icons/cheeseburger.svg" class="w-50px" alt="" />
                                                    <!--end::Food icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Burger</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">5 Burgers</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::Nav link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-0">
                                            <!--begin::Nav link-->
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_4" style="width: 138px;height: 180px">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <!--begin::Food icon-->
                                                    <img src="assets/media/svg/food-icons/coffee.svg" class="w-50px" alt="" />
                                                    <!--end::Food icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Coffee</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">7 Beverages</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::Nav link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-0">
                                            <!--begin::Nav link-->
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_5" style="width: 138px;height: 180px">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <!--begin::Food icon-->
                                                    <img src="assets/media/svg/food-icons/cheesecake.svg" class="w-50px" alt="" />
                                                    <!--end::Food icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Dessert</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">8 Desserts</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::Nav link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_pos_food_content_1">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                                    <!--begin::Card-->
                                                    @foreach ($product as $row)
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                                <!--begin::Food img-->
                                                            <img src="{{ asset('dist/assets/media/product/'.$row->img) }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">{{ $row->name_product }}</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">{{ ($row->stock) }} Stock</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">Rp. {{ $row->price }}</span>
                                                            <!--end::Total-->
                                                        </div>
                                                            <div class="text-center">
                                                                {{-- <input type="hidden" name="id" id="id_user" value="{{ $id_user }}"> --}}
                                                                <input type="hidden" name="id" id="id_product">
                                                                {{-- <input type="submit" class="btn btn-primary text-300 mt-3" value="Add to cart"> --}}
                                                                {{-- <button id="add-to-cart-btn" class="btn btn-primary" data-product-id="{{ $row->id }}" data-product-name="{{ $row->name_product }}" data-product-img="{{ $row->img }}">Add to Cart</button> --}}
                                                                <a href="{{ route('pembelian.index',$row->id) }}" class="btn btn-primary">Add To Cart</a>
                                                            </div>
                                                            <!--end::Body-->
                                                    </div>
                                                    @endforeach 
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-7.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-8.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-4.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-10.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-9.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-5.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                    <!--begin::Card-->
                                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                        <!--begin::Body-->
                                                        <div class="card-body text-center">
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-11.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_pos_food_content_2">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-11.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-5.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-4.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-8.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-10.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-9.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-7.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        {{-- <form class="form-product">
                                                            @csrf --}}
                                                            <!--begin::Food img-->
                                                            <img src="assets/media/stock/food/img-2.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                            <!--end::Food img-->
                                                            <!--begin::Info-->
                                                            <div class="mb-2">
                                                                <!--begin::Title-->
                                                                <div class="text-center">
                                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Total-->
                                                            <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                            <!--end::Total-->
                                                        </div>
                                                    {{-- </form> --}}
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_pos_food_content_3">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-5.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-11.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-2.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-7.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-4.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-8.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-9.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-10.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_pos_food_content_4">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-5.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-4.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-8.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-9.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-11.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-7.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-10.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_pos_food_content_5">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-10.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-5.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-4.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-2.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-7.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-8.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-9.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <!--begin::Body-->
                                                    <div class="card-body text-center">
                                                        <!--begin::Food img-->
                                                        <img src="assets/media/stock/food/img-11.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                        <!--end::Food img-->
                                                        <!--begin::Info-->
                                                        <div class="mb-2">
                                                            <!--begin::Title-->
                                                            <div class="text-center">
                                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Total-->
                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                        <!--end::Total-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Pos food-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-row-auto w-xl-425px">
                            <!--begin::Pos order-->
                            <div class="card card-flush bg-body" id="kt_pos_form">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <h3 class="card-title fw-bold text-gray-800 fs-2qx">Current Order</h3>
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-light-primary fs-4 fw-bold py-4">Clear All</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table container-->
                                    <div class="table-responsive mb-8">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-175px"></th>
                                                    <th class="w-125px"></th>
                                                    <th class="w-60px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                {{-- @foreach ($product as $a)
                                                <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                                    <td class="pe-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('dist/assets/media/product/'.$a->img) }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                            <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">{{ $a->name_product }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="pe-0">
                                                        <!--begin::Dialer-->
                                                        <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                            <!--begin::Decrease control-->
                                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                                <i class="ki-duotone ki-minus fs-3x"></i>
                                                            </button>
                                                            <!--end::Decrease control-->
                                                            <!--begin::Input control-->
                                                            <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                            <!--end::Input control-->
                                                            <!--begin::Increase control-->
                                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                                <i class="ki-duotone ki-plus fs-3x"></i>
                                                            </button>
                                                            <!--end::Increase control-->
                                                        </div>
                                                        <!--end::Dialer-->
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$66.00</span>
                                                    </td>
                                                </tr>
                                                @endforeach --}}
                                                {{-- <div id="cart-items">

                                                </div> --}}
                                                
                                                <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                                    <td class="pe-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/media/stock/food/img-9.jpg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                            <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup of the Day</span>
                                                        </div>
                                                    </td>
                                                    <td class="pe-0">
                                                        <!--begin::Dialer-->
                                                        <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                            <!--begin::Decrease control-->
                                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                                <i class="ki-duotone ki-minus fs-3x"></i>
                                                            </button>
                                                            <!--end::Decrease control-->
                                                            <!--begin::Input control-->
                                                            <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                                                            <!--end::Input control-->
                                                            <!--begin::Increase control-->
                                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                                <i class="ki-duotone ki-plus fs-3x"></i>
                                                            </button>
                                                            <!--end::Increase control-->
                                                        </div>
                                                        <!--end::Dialer-->
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$7.50</span>
                                                    </td>
                                                </tr>
                                                <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                                    <td class="pe-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/media/stock/food/img-3.jpg" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                            <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                                        </div>
                                                    </td>
                                                    <td class="pe-0">
                                                        <!--begin::Dialer-->
                                                        <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                            <!--begin::Decrease control-->
                                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                                <i class="ki-duotone ki-minus fs-3x"></i>
                                                            </button>
                                                            <!--end::Decrease control-->
                                                            <!--begin::Input control-->
                                                            <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                            <!--end::Input control-->
                                                            <!--begin::Increase control-->
                                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                                <i class="ki-duotone ki-plus fs-3x"></i>
                                                            </button>
                                                            <!--end::Increase control-->
                                                        </div>
                                                        <!--end::Dialer-->
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold text-white">
                                            {{-- <span class="d-block lh-1 mb-2">Subtotal</span>
                                            <span class="d-block mb-2">Discounts</span>
                                            <span class="d-block mb-9">Tax(12%)</span> --}}
                                            <span class="d-block fs-2qx lh-1">Total</span>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold text-white text-end">
                                            {{-- <span class="d-block lh-1 mb-2" data-kt-pos-element="total">$100.50</span>
                                            <span class="d-block mb-2" data-kt-pos-element="discount">-$8.00</span>
                                            <span class="d-block mb-9" data-kt-pos-element="tax">$11.20</span> --}}
                                            <span class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$93.46</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Pos order-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end:::Main-->
@endsection
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Temukan semua tombol "Add to Cart"
        var addToCartButtons = document.querySelectorAll('#add-to-cart-btn');

        // Loop melalui setiap tombol dan tambahkan event listener
        addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Ambil informasi produk dari atribut data
            var name_product = this.dataset.name_product;

            // Tampilkan informasi produk
            var cartItem = document.createElement('div');
            cartItem.innerHTML = ' Name: ' +  name_product;
            document.getElementById('cart-items').appendChild(cartItem);
        });
        });
    });
</script> --}}
