@extends('admin.master')

@section('content')
    <!-- content @s
            -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Subscriptions</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 937 Subscription.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <ul class="nk-block-tools g-3">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('subscription.create') }}"><span>Add New</span></a></li>
                                                    <li><a href="{{ route('subscription.create') }}"><span>Add New</span></a></li>
                                                    <li><a href="#"><span>Import</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">All Subscriptions</h5>
                                        </div>
                                        <div class="card-tools me-n1">
                                            <ul class="btn-toolbar">
                                                <li>
                                                    <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                        data-target="search"><em class="icon ni ni-search"></em></a>
                                                </li><!-- li -->
                                                <li class="btn-toolbar-sep"></li><!-- li -->
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown">
                                                            <em class="icon ni ni-setting"></em>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-check">
                                                                <li><span>Show</span></li>
                                                                <li class="active"><a href="#">10</a></li>
                                                                <li><a href="#">20</a></li>
                                                                <li><a href="#">50</a></li>
                                                            </ul>
                                                            <ul class="link-check">
                                                                <li><span>Order</span></li>
                                                                <li class="active"><a href="#">DESC</a></li>
                                                                <li><a href="#">ASC</a></li>
                                                            </ul>
                                                            <ul class="link-check">
                                                                <li><span>Density</span></li>
                                                                <li class="active"><a href="#">Regular</a></li>
                                                                <li><a href="#">Compact</a></li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .dropdown -->
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- card-tools -->
                                        <div class="card-search search-wrap" data-search="search">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search"
                                                    data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input id="search-input" type="text"
                                                    class="form-control form-control-sm border-transparent form-focus-none"
                                                    placeholder="Quick search by Username">
                                                <button class="search-submit btn btn-icon"><em
                                                        class="icon ni ni-search"></em></button>
                                            </div>
                                        </div><!-- card-search -->
                                    </div><!-- .card-title-group -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <table class="table table-orders">
                                        <thead>
                                            <tr class="tb-tnx-head">
                                                <th class="tb-tnx-id"><span class="">#</span></th>
                                                <th class="tb-tnx-info">
                                                    <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                        <span>Member</span>
                                                    </span>
                                                    <span class="tb-tnx-date d-md-inline-block d-none">
                                                        <span class="d-md-none">Date</span>
                                                        <span class="d-none d-md-block">
                                                            <span>start Date</span>
                                                            <span>Expired Date</span>
                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="tb-tnx-amount is-alt">
                                                    <span class="tb-tnx-total">Total</span>
                                                    <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                </th>
                                                <th class="tb-tnx-action">
                                                    <span>&nbsp;</span>
                                                </th>
                                            </tr><!-- tb-tnx-item -->
                                        </thead>
                                        <tbody class="tb-odr-body" id="subscription-container">
                                            @foreach ($subscriptions as $subscription)
                                                <tr class="tb-tnx-item">
                                                    <td class="tb-tnx-id">
                                                        <a href="#"><span>{{ $subscription->id }}</span></a>
                                                    </td>
                                                    <td class="tb-tnx-info">
                                                        <div class="tb-tnx-desc">
                                                            <span class="title">{{ $subscription->user->firstname . ' ' . $subscription->user->lastname }}</span>
                                                        </div>
                                                        <div class="tb-tnx-date">
                                                            <span class="date">{{ $subscription->start_date }}</span>
                                                            <span class="date">{{ $subscription->end_date }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="tb-tnx-amount is-alt">
                                                        <div class="tb-tnx-total">
                                                            <span class="amount">{{ $subscription->offer->price * 10 }} DH</span>
                                                        </div>
                                                        @if ($subscription->status == 'ended')
                                                            <div class="tb-tnx-status"><span
                                                                    class="badge badge-dot bg-warning">{{ $subscription->status }}</span></div>
                                                        @else
                                                            <div class="tb-tnx-status"><span
                                                                class="badge badge-dot bg-success">{{ $subscription->status }}</span></div>
                                                        @endif

                                                    </td>
                                                    <td class="tb-odr-action">
                                                        <div class="tb-odr-btns d-none d-sm-inline">
                                                            <a href="{{ route('membership.print') }}" target="_blank"
                                                                class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em
                                                                    class="icon ni ni-printer-fill"></em></a>

                                                        </div>
                                                        <a href="html/invoice-details.html"
                                                            class="btn btn-pd-auto d-sm-none"><em
                                                                class="icon ni ni-chevron-right"></em></a>
                                                    </td>
                                                </tr><!-- tb-tnx-item -->
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    {{ $subscriptions->links() }}
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

    <!-- content @e -->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/charts/chart-ecommerce.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('js/livesearch.js') }}"></script>
@endsection
