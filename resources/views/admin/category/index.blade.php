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
                                    <h3 class="nk-block-title page-title">Categories</h3>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-gs flex-row-reverse">
                                <div class="col-xxl-7">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group">
                                                    <div class="card-tools">
                                                        <div class="form-inline flex-nowrap gx-3">
                                                            <div class="form-wrap w-150px">

                                                            </div>
                                                            <div class="btn-wrap">

                                                            </div>
                                                        </div><!-- .form-inline -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div
                                                                class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text"></span></div>
                                                        <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span
                                                                class="sub-text">Description</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Slug</span>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Total Lessons </span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                    </div><!-- .nk-tb-item -->

                                                    @foreach ($categories as $category)
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid1">
                                                                    <label class="custom-control-label" for="uid1"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-product">
                                                                    <img src="{{ asset('storage/images/' . $category->image) }}"
                                                                        alt="" class="thumb">
                                                                </span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>{{ $category->name }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <div class="text-ellipsis w-max-200px">
                                                                    <span>—</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>{{ $category->slug }}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <div>
                                                                    <span>{{ $total_lessons }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a class="btn btn-trigger btn-icon"
                                                                            href="{{ route('category.edit', $category->id) }}"
                                                                            title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-trigger btn-icon"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Move To Trash">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#"
                                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                data-bs-toggle="dropdown"><em
                                                                                    class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li>

                                                                                        <a
                                                                                            href="{{ route('category.edit', $category) }}"><em
                                                                                                class="icon ni ni-edit-fill"></em><span>Edit
                                                                                                Category</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <form class="mx-2"
                                                                                            action="{{ route('category.destroy', $category) }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button
                                                                                                onclick="return confirm('Do you really want to Delete ?');"
                                                                                                type="submit">
                                                                                                <em
                                                                                                    class="icon ni ni-trash-fill"></em><span>Trash</span></button>
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
                                            </div><!-- .card-inner -->

                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-xxl-5">
                                    <div class="card card-bordered h-100">
                                        @if ($errors->any())
                                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                                role="alert">
                                                <strong class="font-bold">Whoops!</strong>
                                                <span class="block sm:inline">There were some problems with your input.</span>
                                                <ul class="list-disc mt-2 ml-4">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="card-inner">
                                            <form action="{{ route('category.store') }}" enctype="multipart/form-data"
                                                method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="row g-3 align-center">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="name">Name</label>
                                                            <span class="form-note">The name that appears on your site.</span>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="name"  class="form-control"
                                                                    id="name" placeholder="Name">
                                                            </div>
                                                        </div>
                                                    </div><!-- col -->
                                                </div><!-- .row -->
                                                <div class="row g-3 align-center">
                                                    <div class="col-md-6 my-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="slug">Slug</label>
                                                            <span class="form-note">The “slug” is URL-friendly version of the
                                                                name.</span>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6 my-4">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input name="slug" type="text" class="form-control"
                                                                    id="slug" placeholder="Slug">
                                                            </div>
                                                        </div>
                                                    </div><!-- col -->
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-md-6 my-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="slug">Category Image</label>
                                                            <span class="form-note">The “slug” is URL-friendly version of the
                                                                name.</span>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <div class="form-file">
                                                                    <input type="file" name="image"
                                                                        class="form-file-input" id="customFile">
                                                                    <label class="form-file-label" for="customFile">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row g-3 align-center">
                                                    <div class="col-md-6 my-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="addDescription">Description</label>
                                                            <span class="form-note">The description is not prominent by
                                                                default.</span>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6 my-4">
                                                        <div class="form-control-wrap">
                                                            <textarea name="description" class="form-control form-control-sm no-resize" id="addDescription"
                                                                placeholder="Write your description"></textarea>
                                                        </div>
                                                    </div><!-- col -->
                                                </div><!-- .row -->
                                                <div class="row  g-3">
                                                    <div class="col-12 ">
                                                        <div class="form-group mt-2">
                                                            <button type="submit"
                                                                class="btn btn-lg btn-primary bg-primary-300">Add New
                                                                Category</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form><!-- form -->
                                        </div><!-- .card-inner -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                            </div>
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endsection
