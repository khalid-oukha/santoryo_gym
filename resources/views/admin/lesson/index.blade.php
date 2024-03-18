@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Wastage Return</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 270 return from Customer for wastage.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-2">
                                        <li>
                                            <div class="drodown">
                                                <a href="#"
                                                    class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                    data-bs-toggle="dropdown"><em
                                                        class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span
                                                            class="d-none d-md-inline"></span>Filtered By</span><em
                                                        class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Last 7 Days</span></a></li>
                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                        <li><a href="#"><span>Last 6 Month</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                        <li class="nk-block-tools-opt">
                                            <a href="html/pharmacy/add-wastage-return.html"
                                                class="btn btn-icon btn-primary d-md-none"><em
                                                    class="icon ni ni-plus"></em></a>
                                            <a href="html/pharmacy/add-wastage-return.html"
                                                class="btn btn-primary d-none d-md-inline-flex"><em
                                                    class="icon ni ni-plus"></em><span>Add Wastage Return</span></a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                            <div class="form-wrap w-150px">
                                                <select class="form-select form-select-sm js-select2" data-search="off"
                                                    data-placeholder="Bulk Action">
                                                    <option value="">Bulk Action</option>
                                                    <option value="today">Today</option>
                                                    <option value="tomorrow">Tomorrow</option>
                                                    <option value="month">Last 1 month</option>
                                                    <option value="sixmonth">Last 6 month</option>
                                                </select>
                                            </div>
                                            <div class="btn-wrap">
                                                <span class="d-none d-md-block"><button
                                                        class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                <span class="d-md-none"><button
                                                        class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                            class="icon ni ni-arrow-right"></em></button></span>
                                            </div>
                                        </div><!-- .form-inline -->
                                    </div><!-- .card-tools -->
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                    data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                            <li>
                                                <div class="toggle-wrap">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle"
                                                        data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                    <div class="toggle-content" data-content="cardTools">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li class="toggle-close">
                                                                <a href="#" class="btn btn-icon btn-trigger toggle"
                                                                    data-target="cardTools"><em
                                                                        class="icon ni ni-arrow-left"></em></a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#"
                                                                        class="btn btn-trigger btn-icon dropdown-toggle"
                                                                        data-bs-toggle="dropdown">
                                                                        <div class="dot dot-primary"></div>
                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                    </a>
                                                                    <div
                                                                        class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                        <div class="dropdown-head">
                                                                            <span class="sub-title dropdown-title">Filter
                                                                                Wastage Return</span>
                                                                            <div class="dropdown">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon">
                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                            <div class="row gx-6 gy-3">
                                                                                <div class="col-6">
                                                                                    <div
                                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="custom-control-input"
                                                                                            id="hasBalance">
                                                                                        <label class="custom-control-label"
                                                                                            for="hasBalance"> Have
                                                                                            Balance</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div
                                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="custom-control-input"
                                                                                            id="hasKYC">
                                                                                        <label class="custom-control-label"
                                                                                            for="hasKYC">Email
                                                                                            Verified</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="form-label">Date</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <div
                                                                                                class="form-icon form-icon-right">
                                                                                                <em
                                                                                                    class="icon ni ni-calendar"></em>
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                class="form-control date-picker"
                                                                                                data-date-format="dd-mm-yyyy"
                                                                                                placeholder="dd-mm-yyyy">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="form-label">Reason</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <select
                                                                                                class="form-select js-select2">
                                                                                                <option
                                                                                                    value="default_option">
                                                                                                    Select</option>
                                                                                                <option
                                                                                                    value="option_select_reason">
                                                                                                    Expire Date</option>
                                                                                                <option
                                                                                                    value="option_select_reason">
                                                                                                    Wrong Drug</option>
                                                                                                <option
                                                                                                    value="option_select_reason">
                                                                                                    Extra Drug</option>
                                                                                                <option
                                                                                                    value="option_select_reason">
                                                                                                    Damaged Drug</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!--col-->
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary">Filter</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-foot between">
                                                                            <a class="clickable" href="#">Reset
                                                                                Filter</a>
                                                                            <a href="#">Save Filter</a>
                                                                        </div>
                                                                    </div><!-- .filter-wg -->
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#"
                                                                        class="btn btn-trigger btn-icon dropdown-toggle"
                                                                        data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-setting"></em>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                        <ul class="link-check">
                                                                            <li><span>Show</span></li>
                                                                            <li class="active"><a href="#">10</a>
                                                                            </li>
                                                                            <li><a href="#">20</a></li>
                                                                            <li><a href="#">50</a></li>
                                                                        </ul>
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li class="active"><a href="#">DESC</a>
                                                                            </li>
                                                                            <li><a href="#">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .toggle-content -->
                                                </div><!-- .toggle-wrap -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search"
                                                data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none"
                                                placeholder="Search by Purchase id name or">
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
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">title</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">Coach</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Start_at</span></div>

                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">status</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Price</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Category</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-mail"></em><span>Send Email
                                                                            to All</span></a></li>
                                                                <li><a data-bs-toggle="modal"
                                                                        href="#editWastageReturn"><em
                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                            Selected</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em
                                                                            class="icon ni ni-trash"></em><span>Remove
                                                                            Selected</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->

                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                <label class="custom-control-label" for="uid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#3466</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-info">
                                                        <span>JL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Joe Larson</span>
                                                        <span>larson@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>05/12/2021</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <div>
                                                <span>Name : <span class="fw-bold">MED-1008</span></span>
                                            </div>
                                            <div>
                                                <span>Generic Name : hydrazine</span>
                                            </div>
                                            <div>
                                                <span>Catagory : Inhealer</span>
                                            </div>
                                            <div>
                                                <span>Invoice : <span class="text-success">#546H74W</span></span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <div class="user-card">
                                                <div class="user-avatar sm bg-success-dim">
                                                    <em class="icon ni ni-user-fill"></em>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Jon Nurb</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="badge  bg-outline-info">Subsidence symptoms</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>5pcs</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount">43.98 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="badge  bg-outline-info">Subsidence symptoms</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal"
                                                                        href="#editWastageReturn"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em
                                                                            class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->

                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->

                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
