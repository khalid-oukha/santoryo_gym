@extends('admin.master')

@section('content')

<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Customers List</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total 1,261 users.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                <li class="nk-block-tools-opt">
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>Add Customer</span></a></li>
                                                <li><a href="#"><span>Import Customer</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
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
                                        <select class="form-select js-select2" data-search="off" data-placeholder="Bulk Action">
                                            <option value="">Bulk Action</option>
                                            <option value="email">Send Email</option>
                                            <option value="suspend">Suspend</option>
                                            <option value="delete">Delete</option>
                                        </select>
                                    </div>
                                    <div class="btn-wrap">
                                        <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                        <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                    </div>
                                </div><!-- .form-inline -->
                            </div><!-- .card-tools -->
                            <div class="card-tools me-n1">
                                <ul class="btn-toolbar gx-1">
                                    <li>
                                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                    </li><!-- li -->
                                    <li class="btn-toolbar-sep"></li><!-- li -->
                                    <li>
                                        <div class="toggle-wrap">
                                            <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                            <div class="toggle-content" data-content="cardTools">
                                                <ul class="btn-toolbar gx-1">
                                                    <li class="toggle-close">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                <div class="dot dot-primary"></div>
                                                                <em class="icon ni ni-filter-alt"></em>
                                                            </a>
                                                            <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                <div class="dropdown-head">
                                                                    <span class="sub-title dropdown-title">Filter Customers</span>
                                                                </div>
                                                                <div class="dropdown-body dropdown-body-rg">
                                                                    <div class="row gx-6 gy-3">
                                                                        <div class="col-6">
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="hasBalance">
                                                                                <label class="custom-control-label" for="hasBalance"> Have Balance</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="hasKYC">
                                                                                <label class="custom-control-label" for="hasKYC"> KYC Verified</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label class="overline-title overline-title-alt">Card Type</label>
                                                                                <select class="form-select js-select2">
                                                                                    <option value="any">Any Card</option>
                                                                                    <option value="Visa">Visa</option>
                                                                                    <option value="Mastercard">Mastercard</option>
                                                                                    <option value="AmericanExpress">American Express</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label class="overline-title overline-title-alt">Status</label>
                                                                                <select class="form-select js-select2">
                                                                                    <option value="any">Any Status</option>
                                                                                    <option value="new">New</option>
                                                                                    <option value="active">Active</option>
                                                                                    <option value="suspend">Suspend</option>
                                                                                    <option value="deleted">Deleted</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <button type="button" class="btn btn-secondary">Filter</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-foot between">
                                                                    <a class="clickable" href="#">Reset Filter</a>
                                                                    <a href="#">Save Filter</a>
                                                                </div>
                                                            </div><!-- .filter-wg -->
                                                        </div><!-- .dropdown -->
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                <em class="icon ni ni-setting"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
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
                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name">
                                    <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                </div>
                            </div>
                        </div><!-- .card-search -->
                    </div><!-- .card-inner -->
                    <div class="card-inner p-0">
                        <div class="nk-tb-list nk-tb-ulist">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="cid">
                                        <label class="custom-control-label" for="cid"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col"><span class="sub-text">Customer</span></div>
                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Company</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Payment Methods</span></div>
                                <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Joined</span></div>
                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></div>
                                <div class="nk-tb-col text-end"><span class="sub-text">Actions</span></div>
                            </div><!-- .nk-tb-item -->
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-primary">
                                                <span>BG</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Bobby Gilbert <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">bobby@softnio.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+342 675-6578</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Softnio</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-blue icon ni ni-visa"></em>
                                        <span class="sub-text">**** 1955</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">12 Dec 2021, 12:12 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-danger">
                                                <span>OP</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Olivia Poulsen <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">olivia@apple.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+782 332-8328</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Apple</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-danger icon ni ni-mc"></em>
                                        <span class="sub-text">**** 7473</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">08 Dec 2021, 04:03 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-primary">
                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Heather Marshall <span class="dot dot-info d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">marshall@reakitt.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+342 545-5639</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Reakitt</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-indigo icon ni ni-american-express"></em>
                                        <span class="sub-text">**** 4355</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">02 Dec 2021, 02:34 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-info">Inactive</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-indigo">
                                                <span>BH</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Benjamin Harris <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">info@mediavest.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+342 675-6578</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">MediaVest</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-blue icon ni ni-visa"></em>
                                        <span class="sub-text">**** 3472</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">29 Nov 2021, 03:19 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-orange">
                                                <span>JK</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Joshua Kennedy <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">joshua@softnio.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+323 345-8676</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Softnio</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-blue icon ni ni-visa"></em>
                                        <span class="sub-text">**** 9878</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">24 Nov 2021, 04:21 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-primary">
                                                <img src="./images/avatar/c-sm.jpg" alt="">
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Justine Bauwens <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">bauwens@kline.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+657 879-3214</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Kline</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-danger icon ni ni-mc"></em>
                                        <span class="sub-text">**** 7657</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">19 Nov 2021, 09:56 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-purple">
                                                <span>EH</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Ethan Hunter <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">ethan@bergerpaints.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+435 675-2345</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Berger Paints</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-blue icon ni ni-visa"></em>
                                        <span class="sub-text">**** 5435</span>
                                    </div>
                                </div>
                                <div class= "nk-tb-col tb-col-xxl">
                                    <span class="sub-text">13 Nov 2021, 05:45 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-primary">
                                                <span>JB</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Justine Bauwens <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">justine@acstext.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+978 546-2342</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">ACS Textiles</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-blue icon ni ni-visa"></em>
                                        <span class="sub-text">**** 6577</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">06 Nov 2021, 06:34 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-primary">
                                                <img src="./images/avatar/d-sm.jpg" alt="">
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Summer Powell <span class="dot dot-danger d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">info@youngone.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+435 433-8767</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Youngone</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-indigo icon ni ni-american-express"></em>
                                        <span class="sub-text">**** 5432</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">27 Oct 2021, 01:43 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-danger">Suspended</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
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
                                        <input type="checkbox" class="custom-control-input" id="cid1">
                                        <label class="custom-control-label" for="cid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <a href="html/customer-details.html">
                                        <div class="user-card">
                                            <div class="user-avatar xs bg-dark">
                                                <span>SM</span>
                                            </div>
                                            <div class="user-name">
                                                <span class="tb-lead">Sofia Maier <span class="dot dot-success d-lg-none ms-1"></span></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="sub-text">sofia@unilever.com</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="sub-text">+432 435-1233</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Unilever</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="icon-text">
                                        <em class="text-blue icon ni ni-visa"></em>
                                        <span class="sub-text">**** 6786</span>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="sub-text">18 Oct 2021, 07:37 am</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-status text-success">Active</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                <em class="icon ni ni-eye-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-tb-item -->
                        </div><!-- .nk-tb-list -->
                    </div><!-- .card-inner -->
                    <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                            <div class="g">
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul><!-- .pagination -->
                            </div>
                            <div class="g">
                                <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                    <div>Page</div>
                                    <div>
                                        <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                            <option value="page-1">1</option>
                                            <option value="page-2">2</option>
                                            <option value="page-4">4</option>
                                            <option value="page-5">5</option>
                                            <option value="page-6">6</option>
                                            <option value="page-7">7</option>
                                            <option value="page-8">8</option>
                                            <option value="page-9">9</option>
                                            <option value="page-10">10</option>
                                            <option value="page-11">11</option>
                                            <option value="page-12">12</option>
                                            <option value="page-13">13</option>
                                            <option value="page-14">14</option>
                                            <option value="page-15">15</option>
                                            <option value="page-16">16</option>
                                            <option value="page-17">17</option>
                                            <option value="page-18">18</option>
                                            <option value="page-19">19</option>
                                            <option value="page-20">20</option>
                                        </select>
                                    </div>
                                    <div>OF 102</div>
                                </div>
                            </div><!-- .pagination-goto -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .card-inner -->
                </div><!-- .card-inner-group -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
</div>

@endsection