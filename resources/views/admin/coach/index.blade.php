@extends('admin.master')

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Coach List</h3>
                        <div class="nk-block-des text-soft">
                            <p>You have total {{ $nbr_coachs }} Coach.</p>
                        </div>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">

                                    <li class="nk-block-tools-opt">
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('coach.create') }}"><span>Add Coach</span></a>
                                                    </li>
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

                                    </div><!-- .form-inline -->
                                </div><!-- .card-tools -->

                            </div><!-- .card-title-group -->
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
                                    <div class="nk-tb-col"><span class="sub-text">Coach</span></div>
                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">specialization</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">gender</span></div>
                                    <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Joined</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></div>
                                    <div class="nk-tb-col text-end"><span class="sub-text">Actions</span></div>
                                </div><!-- .nk-tb-item -->

                                @foreach ($coashes as $coash)
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
                                                        <img class="w-full h-full"
                                                            src="{{ asset('storage/images/uploads/' . $coash->user->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="user-name">
                                                        <span
                                                            class="tb-lead">{{ $coash->user->firstname . ' ' . $coash->user->lastname }}<span
                                                                class="dot dot-info d-lg-none ms-1"></span></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="sub-text">{{ $coash->user->email }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="sub-text">{{ $coash->specialization }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="sub-text">{{ $coash->gender }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="sub-text">{{ $coash->cin }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-status text-info">{{ $coash->status }}</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">

                                                        <a href="{{ route('coach.edit', ['coach' => $coash]) }}" class="btn btn-trigger btn-icon"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit">
                                                            <em class="icon ni ni-edit"></em>
                                                        </a>

                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <form action="{{ route('coach.destroy', ['coach' => $coash]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button onclick="return confirm('Do you really want to Delete ?');"
                                                            type="submit" class="btn btn-trigger btn-icon"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Suspend">
                                                            <em class="icon ni ni-cross-fill-c"></em>
                                                        </button>

                                                    </form>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-eye"></em><span>View
                                                                            Details</span></a></li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-mail"></em><span>Send
                                                                            Mail</span></a></li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-cart"></em><span>Orders</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-na"></em><span>Suspend</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                @endforeach

                            </div><!-- .nk-tb-list -->
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            {{ $coashes->links() }}
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection
