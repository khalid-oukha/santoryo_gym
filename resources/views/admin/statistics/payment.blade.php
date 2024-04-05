@extends('admin.master')

@section('content')

    <!-- content @s
        -->
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Sales Report</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Here is the sales report of this Month.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-xxl-6 col-md-6">
                                    <div class="card h-100">
                                        <div class="nk-ecwg nk-ecwg1">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Total {{ now()->year }} Sales</h6>
                                                    </div>
                                                    <div class="card-tools">
                                                        <a href="#" class="link">View Report</a>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="amount">{{ $totalYearlyIncome }} DH</div>
                                                    <div class="info"><strong>{{ $totalLastYearIncome }}</strong> in last Year</div>
                                                </div>
                                                <div class="data">
                                                    <h6 class="sub-title">This Month so far</h6>
                                                    <div class="data-group">
                                                        <div class="amount">{{ $monthlyIncome }} DH</div>
                                                        <div class="info text-right"><span class="change up text-danger"><em
                                                                    class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs.
                                                                last week</span></div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-inner -->
                                            <div class="nk-ecwg1-ck">
                                                <canvas class="ecommerce-line-chart-s1" id="totalSales"></canvas>
                                            </div>
                                        </div><!-- .nk-ecwg -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-6 col-md-6">
                                    <div class="card card-full">
                                        <div class="card-inner d-flex flex-column h-100">
                                            <div class="card-title-group mb-3">
                                                <div class="card-title">
                                                    <h6 class="title">Most Sold Medicine</h6>
                                                    <p>In last 30 days most sold medicine.</p>
                                                </div>
                                                <div class="card-tools mt-n1 me-n1">
                                                    <div class="drodown">
                                                        <a href="#"
                                                            class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white"
                                                            data-bs-toggle="dropdown">30 Days</a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><span>7 Days</span></a></li>
                                                                <li><a href="#"><span>15 Days</span></a></li>
                                                                <li><a href="#"><span>30 Days</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-list gy-3">
                                                <div class="progress-wrap">
                                                    <div class="progress-text">
                                                        <div class="progress-label">Zimax</div>
                                                        <div class="progress-amount">98%</div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar" data-progress="58"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-wrap">
                                                    <div class="progress-text">
                                                        <div class="progress-label">Oxidin</div>
                                                        <div class="progress-amount">73%</div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-warning" data-progress="43"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-wrap">
                                                    <div class="progress-text">
                                                        <div class="progress-label">Med-1008</div>
                                                        <div class="progress-amount">43%</div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-azure" data-progress="33"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-wrap">
                                                    <div class="progress-text">
                                                        <div class="progress-label">Ceevit</div>
                                                        <div class="progress-amount">29%</div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-pink" data-progress="29"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-wrap">
                                                    <div class="progress-text">
                                                        <div class="progress-label">DON A</div>
                                                        <div class="progress-amount">18.49%</div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-orange" data-progress="18.49"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-12">
                                    <div class="nk-block">
                                        <div class="card card-bordered card-stretch">
                                            <div class="card-inner-group">
                                                <div class="card-inner position-relative card-tools-toggle">
                                                    <div class="card-title-group">
                                                        <div class="card-tools">
                                                            <div class="form-control-wrap">
                                                                <div class="input-daterange date-picker-range input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Start Date" />
                                                                    <div class="input-group-addon">TO</div>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="End Date" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-tools me-n1">
                                                            <ul class="btn-toolbar gx-1">
                                                                <li>
                                                                    <a href="#"
                                                                        class="btn btn-icon search-toggle toggle-search"
                                                                        data-target="search"><em
                                                                            class="icon ni ni-search"></em></a>
                                                                </li><!-- li -->
                                                            </ul><!-- .btn-toolbar -->
                                                        </div><!-- .card-tools -->
                                                        <div class="card-search search-wrap" data-search="search">
                                                            <div class="card-body">
                                                                <div class="search-content">
                                                                    <a href="#"
                                                                        class="search-back btn btn-icon toggle-search"
                                                                        data-target="search"><em
                                                                            class="icon ni ni-arrow-left"></em></a>
                                                                    <input type="text"
                                                                        class="form-control border-transparent form-focus-none"
                                                                        placeholder="Search by name">
                                                                    <button class="search-submit btn btn-icon"><em
                                                                            class="icon ni ni-search"></em></button>
                                                                </div>
                                                            </div>
                                                        </div><!-- .card-search -->
                                                    </div><!-- .card-title-group -->
                                                    <div class="card-search search-wrap" data-search="search">
                                                        <div class="card-body">
                                                            <div class="search-content">
                                                                <a href="#"
                                                                    class="search-back btn btn-icon toggle-search"
                                                                    data-target="search"><em
                                                                        class="icon ni ni-arrow-left"></em></a>
                                                                <input type="text"
                                                                    class="form-control border-transparent form-focus-none"
                                                                    placeholder="Search by name">
                                                                <button class="search-submit btn btn-icon"><em
                                                                        class="icon ni ni-search"></em></button>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-search -->
                                                </div><!-- .card-inner -->
                                                <div class="card-inner p-0">
                                                    <div class="nk-tb-list nk-tb-ulist">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid">
                                                                    <label class="custom-control-label"
                                                                        for="uid"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col"><span>Medicine Name</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Total
                                                                    Sales Amount</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span
                                                                    class="sub-text">Categtory</span></div>
                                                            <div class="nk-tb-col"><span>Sales Quantity</span></div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid1">
                                                                    <label class="custom-control-label"
                                                                        for="uid1"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">Zimax</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">2000.55 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Tablet</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>100box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid2">
                                                                    <label class="custom-control-label"
                                                                        for="uid2"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">Oxidon</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">3200.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Tablet</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>252box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid3">
                                                                    <label class="custom-control-label"
                                                                        for="uid3"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">MED-1008</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">4500.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Inhealer</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>552box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid4">
                                                                    <label class="custom-control-label"
                                                                        for="uid4"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">Ceevit</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">3400.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Vitamin</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>444box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid5">
                                                                    <label class="custom-control-label"
                                                                        for="uid5"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">DON A</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">2100.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Tablet</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>230box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid6">
                                                                    <label class="custom-control-label"
                                                                        for="uid6"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">Pantonix</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">1200.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Tablet</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>800box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid7">
                                                                    <label class="custom-control-label"
                                                                        for="uid7"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">Isoniazid</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">3200.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Syrup</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>3200box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid8">
                                                                    <label class="custom-control-label"
                                                                        for="uid8"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">EC Plus</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">1200.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Vitamin</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>2200box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid9">
                                                                    <label class="custom-control-label"
                                                                        for="uid9"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">Acetylsalicylic Acid</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">1000.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Syrup</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>350box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid10">
                                                                    <label class="custom-control-label"
                                                                        for="uid10"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/pharmacy/medicine-details.html">
                                                                    <span class="tb-product">
                                                                        <span class="title">Voltaren</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-amount">8766.00 <span
                                                                        class="currency">USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>Syrup</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>300box</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                    </div>
                                                </div><!-- .card-inner -->
                                                <div class="card-inner">
                                                    <ul class="pagination justify-content-center justify-content-md-start">
                                                        <li class="page-item"><a class="page-link" href="#">Prev</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><span class="page-link"><em
                                                                    class="icon ni ni-more-h"></em></span></li>
                                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul><!-- .pagination -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card-inner-group -->
                                        </div><!-- .card -->
                                    </div><!-- .nk-block -->
                                </div><!-- .col -->
                            </div><!-- .row-->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endsection
