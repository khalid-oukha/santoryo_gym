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

                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Sales Overview</h3>
                                        <div class="nk-block-des text-soft">
                                            <p>Welcome to Santoryo Gym.</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                    <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                    <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
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
                                                    <div class="info"><strong>{{ $totalLastYearIncome }}</strong> in last Year
                                                    </div>
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
                                                    <h6 class="title">Most Sold Plans</h6>
                                                    <p>In last 30 days most sold Plans.</p>
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
                                                @foreach($offerPaymentsPercentages as $item)

                                                <div class="progress-wrap">
                                                    <div class="progress-text">
                                                        <div class="progress-label">{{ $item['name'] }}</div>
                                                        <div class="progress-amount">{{ $item['percentage'] }}%</div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar" data-progress="{{ $item['percentage'] }}"></div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-12">
                                    <div class="nk-block">
                                        <div class="card card-bordered card-stretch">
                                            <div class="card-inner-group">
                                                <div class="card-inner position-relative card-tools-toggle">
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
                                                            <div class="nk-tb-col"><span>Member</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">amount</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span
                                                                    class="sub-text">Method</span></div>
                                                            <div class="nk-tb-col"><span>date</span></div>
                                                        </div><!-- .nk-tb-item -->

                                                        @foreach ($payments as $payment)
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
                                                                            <span class="title">{{ $payment->user->firstname . ' ' . $payment->user->firstname }}</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span class="tb-amount">{{ $payment->amount }} <span
                                                                            class="currency">MAD</span></span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg ">
                                                                    <span>{{ $payment->payment_method }}</span>
                                                                </div>

                                                                <div class="nk-tb-col">
                                                                    <span>{{ $payment->created_at }}</span>
                                                                </div>
                                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                                    <a href="{{ route('membership.print') }}" target="_blank"
                                                                        class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em
                                                                            class="icon ni ni-printer-fill"></em></a>

                                                                </div>

                                                            </div><!-- .nk-tb-item -->

                                                        @endforeach


                                                    </div>
                                                </div><!-- .card-inner -->
                                                <div class="card-inner">

                                                    {{ $payments->links() }}
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
