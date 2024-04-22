@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Lesson Management</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total {{ $total }} Lesson .</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-2">

                                        <li class="nk-block-tools-opt">
                                        <li class="nk-block-tools-opt">
                                            <a href="html/pharmacy/add-wastage-return.html"
                                                class="btn btn-icon btn-primary d-md-none"><em
                                                    class="icon ni ni-plus"></em></a>
                                            <a href="{{ route('lesson.create') }}"
                                                class="btn btn-primary d-none d-md-inline-flex"><em
                                                    class="icon ni ni-plus"></em><span>Add Lesson</span></a>
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
                                        <select name="category" id="Selectfilterbycategory" class="form-select form-select-sm js-select2" data-search="off"
                                            data-placeholder="Bulk Action">
                                            <option >all</option>
                                            @foreach ($categories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
 


                                        </div><!-- .form-inline -->
                                    </div><!-- .card-tools -->
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                    data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
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
                                <div class="nk-tb-list nk-tb-ulist" id="lessons_container">
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

                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Category</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Price</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">status</span></div>
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

                                    @foreach ($lessons as $lesson)
                                        <div class="nk-tb-item" id="lesson_card">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid3">
                                                    <label class="custom-control-label" for="uid3"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <a href="#">
                                                    <span class="fw-medium">{{ $lesson->title }}</span>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col">
                                                <a href="#">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-info">
                                                            <img class="w-full h-full"
                                                                src="{{ asset('storage/images/uploads/' . $lesson->coach->user->image) }}"
                                                                alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <span
                                                                class="tb-lead">{{ $lesson->coach->user->firstname }}</span>
                                                            <span>{{ $lesson->coach->user->email }}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{ $lesson->start_at }}</span>
                                            </div>

                                            <div class="nk-tb-col tb-col-xxl">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-success-dim">
                                                        <em class="icon ni ni-user-fill"></em>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">{{ $lesson->category->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="badge  bg-outline-info">{{ $lesson->category->name }}</span>
                                            </div>

                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="tb-amount">{{ $lesson->price }} <span
                                                        class="currency">USD</span></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="badge  bg-outline-primary">{{ $lesson->status }}</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">

                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <div>
                                                                            <a
                                                                                href="{{ route('lesson.edit', ['lesson' => $lesson]) }}"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </div>

                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <a
                                                                                href="{{ route('lesson.cancel',$lesson) }}"><em
                                                                                    class="icon ni ni-delete-fill"></em><span>Cancel</span></a>
                                                                        </div>
                                                                        <div>
                                                                            <a
                                                                                href="{{ route('lesson.done', ['lesson' => $lesson]) }}"><em class="icon ni ni-check-fill-c"></em><span>Done</span></a>
                                                                        </div>

                                                                    </li>
                                                                    <li>
                                                                        <form class="px-4 py-2"
                                                                            action="{{ route('lesson.destroy', ['lesson' => $lesson]) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button
                                                                                onclick="return confirm('Do you really want to Delete ?');"
                                                                                onclick="return confirm('Do you really want to Delete ?');"
                                                                                type="submit" href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></button>

                                                                        </form>
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
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/filterbycategory.js') }}"></script>
@endsection
