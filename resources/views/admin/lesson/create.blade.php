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
                                        <h4 class="title nk-block-title">Add Lesson</h4>
                                        <div class="nk-block-des">
                                            <p>Examples and usage guidelines for Lesson styles and layout options.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="preview-block">
                                            <span class="preview-title-lg overline-title">Lesson Information</span>
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
                                            <form action="{{ route('lesson.store') }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="row gy-4">



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
                                                            <label class="form-label">Lesson start Date</label>

                                                            <div class="form-control-wrap">

                                                                <input name="start_date" type="date"
                                                                    class="form-control form-control-md form-control-outlined "
                                                                    id="outlined-date-picker">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Lesson start Time</label>

                                                            <div class="form-control-wrap">

                                                                <input name="start_time" type="time"
                                                                    class="form-control form-control-md form-control-outlined ">
                                                                <label class="form-label-outlined"
                                                                    for="outlined-date-picker">Time
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-06">Image Upload</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-file">
                                                                    <input name="image" type="file" multiple
                                                                        class="form-file-input" id="customFile">
                                                                    <label class="form-file-label" for="customFile">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label class="form-label" for="default-06"> Select
                                                                Category</label>
                                                            <div class="form-control-wrap ">
                                                                <div class="">
                                                                    <select name="category_id" class="form-control">
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}">
                                                                                {{ $category->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 my-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Lesson Duration in minutes</label>
                                                            <div class="form-control-wrap number-spinner-wrap">
                                                                <button class="btn btn-icon  number-spinner-btn number-minus"
                                                                    data-number="minus"><em
                                                                        class="icon ni ni-minus"></em></button>
                                                                <input type="number" name="duration"
                                                                    class="form-control number-spinner" placeholder="number"
                                                                    value="20" step="10">
                                                                <button class="btn btn-icon number-spinner-btn number-plus"
                                                                    data-number="plus"><em
                                                                        class="icon ni ni-plus"></em></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-05">capacity</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-text-hint">
                                                                    <span class="overline-title">member</span>
                                                                </div>
                                                                <input type="text" name="capacity" class="form-control"
                                                                    id="default-05" placeholder="Input placeholder">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">Select a coach</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-user"></em>
                                                                </div>
                                                                <select name="coach_id" class="form-control" id="default-06">
                                                                    @foreach ($coaches as $coach)
                                                                        <option value="{{ $coach->id }}">
                                                                            {{ $coach->user->firstname . ' ' . $coach->user->lastname }}

                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="default-textarea">description</label>
                                                            <div class="form-control-wrap">
                                                                <textarea name="description" class="form-control no-resize" id="default-textarea">Descritpion</textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 my-4">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="text-gray-300 btn btn-lg bg-dark-400  ">Save
                                                                Submit
                                                            </button>
                                                        </div>
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
