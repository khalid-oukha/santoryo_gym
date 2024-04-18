

@include('layouts.dashboard.start_html')

<body class="bg-white" onload="printPromot()">
    <div class="nk-block">
        <div class="invoice invoice-print">
            <div class="invoice-wrap">
                <div class="invoice-brand text-center">
                    <img src="{{ asset('assets/images/logo1-01.png') }}" srcset="./images/logo-dark2x.png 2x" alt="">
                </div>
                <div class="invoice-head">
                    <div class="invoice-contact">
                        <span class="overline-title">Invoice To</span>
                        <div class="invoice-contact-info">
                            <h4 class="title">Gregory Anderson</h4>
                            <ul class="list-plain">
                                <li><em class="icon ni ni-map-pin-fill fs-18px"></em><span>House #65, 4328 Marion Street<br>Newbury, VT 05051</span></li>
                                <li><em class="icon ni ni-call-fill fs-14px"></em><span>+012 8764 556</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="invoice-desc">
                        <h3 class="title">Invoice</h3>
                        <ul class="list-plain">
                            <li class="invoice-id"><span>Invoice ID</span>:<span>66K5W3</span></li>
                            <li class="invoice-date"><span>Date</span>:<span>26 Jan, 2020</span></li>
                        </ul>
                    </div>
                </div><!-- .invoice-head -->
            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="">
                                <div class="card card-bordered pricing text-center">
                                    <div class="pricing-body">
                                        <div class="pricing-media">
                                            <img src="./images/icons/plan-s1.svg" alt="">
                                        </div>
                                        <div class="pricing-title w-220px mx-auto">
                                            <h5 class="title">Starter</h5>
                                            <span class="sub-text">If you are a small business amn please select this plan</span>
                                        </div>
                                        <div class="pricing-amount">
                                            <div class="amount">$99 <span>/yr</span></div>
                                            <span class="bill">1 User, Billed Yearly</span>
                                        </div>
                                        <div class="pricing-action">
                                            <a href="#" class="btn btn-primary">Select Plan</a>
                                        </div>
                                    </div>
                                </div><!-- .pricing -->
                            </div><!-- .col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->
            </div><!-- .invoice-wrap -->
        </div><!-- .invoice -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            window.print();
        }
    </script>
</body>
@include('layouts.dashboard.end_html')
