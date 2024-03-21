@extends('admin.master')

@section('content')
    <!-- content @s
                                -->
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="components-preview wide-md mx-auto">

                            <div class="nk-block nk-block-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="title nk-block-title">Add Offer</h4>
                                        <div class="nk-block-des">
                                            <p>Examples and usage guidelines for Lesson styles and layout options.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="preview-block ">
                                            <span class="preview-title-lg overline-title">Offer Information</span>
                                            @if ($errors->any())
                                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                                    role="alert">
                                                    <strong class="font-bold">Whoops!</strong>
                                                    <span class="block sm:inline">There were some problems with your
                                                        input.</span>
                                                    <ul class="list-disc mt-2 ml-4">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form action="{{ route('offer.store') }}" enctype="multipart/form-data"
                                                method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="row gy-4 ">



                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-01">Title</label>
                                                            <div class="form-control-wrap">
                                                                <input name="title" type="text" class="form-control"
                                                                    id="default-01" placeholder="Input placeholder">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-05">Price</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-text-hint">
                                                                    <span class="overline-title">DH</span>
                                                                </div>
                                                                <input type="text" name="price" class="form-control"
                                                                    id="default-05" placeholder="Input placeholder">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-05">Number OF Months</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-text-hint">
                                                                    <span class="overline-title">member</span>
                                                                </div>
                                                                <input type="text" name="months_valid" class="form-control"
                                                                    id="default-05" placeholder="Input placeholder">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-textarea">description</label>
                                                            <div class="form-control-wrap">
                                                                <textarea name="description" class="form-control no-resize" id="default-textarea">Descritpion</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="form-label">Features</label>
                                                            <div class="form-control-wrap">
                                                                <div class="flex flex-wrap gap-4">
                                                                    @foreach ($features as $feature)
                                                                    <label class="inline-flex items-center rounded-md p-1 bg-white shadow-md">
                                                                        <input type="checkbox" name="features[]" value="{{ $feature->id }}" class="form-checkbox rounded-sm text-indigo-600 h-4 w-4">
                                                                        <span class="ml-2">{{ $feature->name }}</span>
                                                                    </label>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="mt-24">
                                                    <div class="form-group ">
                                                        <button type="submit"
                                                            class="text-gray-300 btn btn-lg bg-dark-400  ">Save
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- content @e -->
    @endsection
