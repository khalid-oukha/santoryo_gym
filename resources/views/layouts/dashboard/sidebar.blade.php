<div class="nk-sidebar " data-content="sidebarMenu">
    <div class="nk-sidebar-bar bg-dark">
        <div class="nk-apps-brand">
            <a href="html/index.html" class="logo-link">
                <img class="logo-light logo-img" src="{{ asset('assets/images/icon.png') }}"
                    srcset="{{ asset('assets/images/icon.png') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('assets/images/icon.png') }}"
                    srcset="/images/logo-dark-small2x.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-sidebar-element ">
            <div class="nk-sidebar-body">
                <div class="nk-sidebar-content" data-simplebar>
                    <div class="nk-sidebar-menu ">
                        <!-- Menu -->
                        <ul class="nk-menu apps-menu ">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPharmacy">
                                    <span class="nk-menu-icon"><em class="icon ni ni-capsule"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                    <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item active">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                    <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPages">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navMisc">
                                    <span class="nk-menu-icon"><em class="icon ni ni-server"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps/calendar.html" class="nk-menu-link" title="Calendar">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calendar"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-hr"></li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navComponents">
                                    <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-sidebar-footer">
                        <ul class="nk-menu nk-menu-md apps-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link" title="Settings">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nk-sidebar-profile nk-sidebar-profile-fixed">
                    <a href="#" class="toggle" data-target="profileDD">
                        <div class="user-avatar">
                            <span>AB</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md m-1 nk-sidebar-profile-dropdown"
                        data-content="profileDD">
                        <div class="dropdown-inner user-card-wrap d-none d-md-block">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                    <span class="sub-text text-soft">info@softnio.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="html/user-profile-regular.html"><em
                                            class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                <li><a href="html/user-profile-setting.html"><em
                                            class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                <li><a href="html/user-profile-activity.html"><em
                                            class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                            </ul>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-sidebar-main is-light bg-gray-900">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content" data-content="navPharmacy">
                <h5 class="title font-extrabold text-gray-300 text-lg">S A N T O R Y O</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('statistics.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                            <span class="nk-menu-text">Coachs</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('coach.create') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Add Coach</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('coach.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Coach List</span></a>
                            </li>

                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Categories</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('category.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Categories List</span></a>
                            </li>

                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->


                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-note-add-fill-c"></em></span>
                            <span class="nk-menu-text">Lessons</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('lesson.create') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Add Lessons</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('lesson.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Lessons List</span></a>
                            </li>

                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div>
            <div class="nk-menu-content" data-content="navHospital">
                <h5 class="title">MemberShip Manegment</h5>
                <ul class="nk-menu">

                    <li class="nk-menu-item">
                        <a href="html/hospital/index.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Report</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('income.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Payments Report</span></a>
                            </li>

                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                            <span class="nk-menu-text">Subscriptions</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                            <li class="nk-menu-item">
                                <a href="{{ route('subscription.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Subscription List</span></a>
                            </li>
                            <a href="html/hospital/income-list.html" class="nk-menu-link"><span
                                    class="nk-menu-text">Income</span></a>
                    </li>

                </ul><!-- .nk-menu-sub -->
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                        <span class="nk-menu-text">Offers</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="{{ route('offer.create') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Add Offer</span></a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('offer.index') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">List Of Offers</span></a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('offer.suspend') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Suspend Offers</span></a>
                        </li>

                    </ul><!-- .nk-menu-sub -->
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-star"></em></span>
                        <span class="nk-menu-text">Features</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="{{ route('feature.index') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Feature List</span></a>
                        </li>
                    </ul>
                </li><!-- .nk-menu-item -->


                <li class="nk-menu-item">
                    <a href="html/hospital/settings.html" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                        <span class="nk-menu-text">Setting</span>
                    </a>
                </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div>
            <div class="nk-menu-content menu-active" data-content="navDashboards">
                <h5 class="title">Dashboards</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('role.index') }}" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Role</span>
                        </a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item">
                                <a href="{{ route('role.index') }}" class="nk-menu-link"><span class="nk-menu-text">Role List</span></a>
                            </li>

                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span>
                            <span class="nk-menu-text">Medicine</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/add-medicine.html" class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/medicine-list.html" class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/medicine-details.html" class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Manufacturer</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/manufacturer.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/manufacturer-ledger.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Ledger</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div>

        </div>
    </div>
</div>
