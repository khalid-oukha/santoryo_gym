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
                                    <h3 class="nk-block-title page-title"> Edit Categories</h3>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-gs flex-row-reverse">
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
                                            <form action="{{ route('category.update', $category) }}" enctype="multipart/form-data"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
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
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" value="{{ $category->name }}" placeholder="Name">
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
                                                                <input value="{{ $category->slug }}" name="slug" type="text" class="form-control"
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
                                                                placeholder="Write your description">{{ $category->description }}</textarea>
                                                        </div>
                                                    </div><!-- col -->
                                                </div><!-- .row -->
                                                <div class="row  g-3">
                                                    <div class="col-12 ">
                                                        <div class="form-group mt-2">
                                                            <button type="submit"
                                                                class="btn btn-lg btn-primary bg-primary-300">SAVE
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
