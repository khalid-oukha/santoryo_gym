@extends('admin.master')

@section('content')
    <!-- content @s
        -->
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Dashboard</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Welcome to Santoryo .</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                            data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#"
                                                            class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                            data-bs-toggle="dropdown"><em
                                                                class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                    class="d-none d-md-inline">Last</span> 30 Days</span><em
                                                                class="dd-indc icon ni ni-chevron-right"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                <li><a href="#"><span>Last 1 Years</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                            class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Today Subscribers</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">{{ $todaySubscribers }}</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Today Revenue</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">{{ $todayRevenue }} MAD</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Today Users</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">{{ $todayUsers }}</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3"
                                                                id="todayCustomers"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Today Reservations</h6>
                                                    </div>
                                                </div>
                                                <div class="data">
                                                    <div class="data-group">
                                                        <div class="amount">{{ $todayReservations }}</div>
                                                        <div class="nk-ecwg6-ck">
                                                            <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-6">
                                    <div class="card card-full">
                                        <div class="nk-ecwg nk-ecwg8 h-100">
                                            <div class="card-inner">
                                                <div class="card-title-group mb-3">
                                                    <div class="card-title">
                                                        <h6 class="title">Sales Statistics</h6>
                                                    </div>
                                                    <div class="card-tools">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle link link-light link-sm dropdown-indicator"
                                                                data-bs-toggle="dropdown">Weekly</a>
                                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><span>Daily</span></a></li>
                                                                    <li><a href="#"
                                                                            class="active"><span>Weekly</span></a></li>
                                                                    <li><a href="#"><span>Monthly</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-ecwg8-legends">
                                                    <li>
                                                        <div class="title">
                                                            <span class="dot dot-lg sq" data-bg="#0fac81"></span>
                                                            <span>Total Order</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">
                                                            <span class="dot dot-lg sq" data-bg="#eb6459"></span>
                                                            <span>Canceled Order</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="nk-ecwg8-ck">
                                                    <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                                                </div>
                                                <div class="chart-label-group ps-5">
                                                    <div class="chart-label">01 Jul, 2020</div>
                                                    <div class="chart-label">30 Jul, 2020</div>
                                                </div>
                                            </div><!-- .card-inner -->
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-6">
                                    <div class="card card-full overflow-hidden">
                                        <div class="nk-ecwg nk-ecwg7 h-100">
                                            <div class="card-inner flex-grow-1">
                                                <div class="card-title-group mb-4">
                                                    <div class="card-title">
                                                        <h6 class="title">Order Statistics</h6>
                                                    </div>
                                                </div>
                                                <div class="nk-ecwg7-ck">
                                                    <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                                </div>
                                                <ul class="nk-ecwg7-legends">
                                                    <li>
                                                        <div class="title">
                                                            <span class="dot dot-lg sq" data-bg="#0fac81"></span>
                                                            <span>Completed</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">
                                                            <span class="dot dot-lg sq" data-bg="#e85347"></span>
                                                            <span>Canclled</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">
                                                            <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                                            <span>Processing</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- .card-inner -->
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <div class="card-title-group mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Santoryo Statistics</h6>
                                                </div>
                                            </div>
                                            <ul class="nk-store-statistics">
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">active Subscriptions</div>
                                                        <div class="count">{{ $totalActiveSubscribers }}</div>
                                                    </div>
                                                    <em class="icon bg-primary-dim ni ni-bag"></em>
                                                </li>
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Users</div>
                                                        <div class="count">{{ $totalUsers }}</div>
                                                    </div>
                                                    <em class="icon bg-info-dim ni ni-users"></em>
                                                </li>
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Offers</div>
                                                        <div class="count">{{ $totalOffers }}</div>
                                                    </div>
                                                    <em class="icon bg-pink-dim ni ni-box"></em>
                                                </li>
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">Categories</div>
                                                        <div class="count">{{ $totalCategories }}</div>
                                                    </div>
                                                    <em class="icon bg-purple-dim ni ni-server"></em>
                                                </li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-8">
                                    <div class="card card-full">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Recent Orders</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-list mt-n2">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col"><span>Order No.</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                                <div class="nk-tb-col"><span>Amount</span></div>
                                                <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                            </div>
                                            @if (!empty( $latestSubscribers))

                                            @foreach ($latestSubscribers as $latestSubscriber)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead"><a href="#">{{ $latestSubscriber->id }}</a></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="user-card">
                                                            <div class="user-avatar sm bg-purple-dim">
                                                                <span>{{ strtoupper(substr($latestSubscriber->user->firstname, 0, 1)) . strtoupper(substr($latestSubscriber->user->lastname, 0, 1)) }}
                                                                </span>
                                                            </div>
                                                            <div class="user-name">
                                                                <span class="tb-lead">{{ $latestSubscriber->user->firstname . ' ' . $latestSubscriber->user->lastname }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub">{{ $latestSubscriber->created_at }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-sub tb-amount">{{ $latestSubscriber->offer->price }} <span>MAD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        @if ($latestSubscriber->status == 'active')
                                                            <span class="badge badge-dot badge-dot-xs bg-success">{{ $latestSubscriber->status }}</span>

                                                        @else
                                                        <span class="badge badge-dot badge-dot-xs bg-danger">{{ $latestSubscriber->status }}</span>

                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                            @endif


                                        </div>
                                    </div><!-- .card -->
                                </div>

                            </div><!-- .row -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endsection
