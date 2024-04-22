@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em
                                        class="icon ni ni-arrow-left"></em><span>Coach's management</span></a></div>
                            <h2 class="nk-block-title fw-normal">Here YOU can add new coach</h2>

                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Please to create an account for coash </h4>
                                <div class="nk-block-des">
                                    <p>give the informations and Validating your form, just add the class </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
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
                                <form action="{{ route('coach.store') }}" enctype="multipart/form-data" method="POST"
                                    class="form-validate">
                                    @csrf
                                    @method('POST')
                                    <div class="row g-gs">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Last Name</label>
                                                <div class="form-control-wrap">
                                                    <input value="{{ old('lastname') }}" type="text" class="form-control" id="fv-full-name"
                                                        name="lastname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">First Name</label>
                                                <div class="form-control-wrap">
                                                    <input value="{{ old('firstname') }}" type="text" class="form-control" id="fv-full-name"
                                                        name="firstname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-email">Email address</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-mail"></em>
                                                    </div>
                                                    <input value="{{ old('email') }}" type="text" class="form-control" id="fv-email" name="email"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-email">Password</label>
                                                <div class="form-control-wrap">

                                                    <input type="password"  class="form-control" id="fv-email"
                                                        name="password" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-phone">Carte d'identité nationale</label>
                                                <div class="form-control-wrap">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="fv-phone">CIN</span>
                                                        </div>
                                                        <input value="{{ old('cin') }}" name="cin" type="cin" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-phone">Sex / Gender</label>
                                                <div class="form-control-wrap">
                                                    <ul class="custom-control-group">
                                                        <li>
                                                            <div
                                                                class="custom-control custom-radio custom-control-pro no-control">
                                                                <input name="gender" checked type="radio"
                                                                    class="custom-control-input" value="male"
                                                                    id="sex-male" required>
                                                                <label class="custom-control-label"
                                                                    for="sex-male">male</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-control custom-radio custom-control-pro no-control">
                                                                <input name="gender" type="radio"
                                                                    class="custom-control-input" value="female"
                                                                    id="sex-female" required>
                                                                <label class="custom-control-label"
                                                                    for="sex-female">female</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-subject">specialization</label>
                                                <div class="form-control-wrap">
                                                    <input value="{{ old('specialization') }}" type="text" class="form-control" id="fv-subject"
                                                        name="specialization" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="fv-message" name="description" placeholder="Write your message"
                                                        required>lorem</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-image">Upload Image</label>
                                                <div class="form-control-wrap">
                                                    <input name="image" type="file"
                                                        class="form-control form-control-sm" id="fv-image"
                                                         required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="text-gray-300 btn btn-lg bg-dark-400  ">Save
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
@endsection
