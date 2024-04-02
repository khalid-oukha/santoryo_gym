@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Pricing Table</h3>
                            <div class="nk-block-des text-soft">
                                <p>Choose your pricing plan and start enjoying our service.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        @foreach ($offers as $offer)
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h2 class="card-title font-bold text-2xl title">{{ $offer->title }}</h2>
                                            <p class="sub-text">{{ $offer->description }}</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="h4 fw-500">{{ $offer->months_valid }}</span>
                                                    <span class="sub-text">Number of months</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="h4 fw-500">{{ $offer->price . ' ' }}DH</span>
                                                    <span class="sub-text">Price</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            @foreach ($offer->features as $feature)
                                                <li><span class="w-50"><em class="icon ni ni-check-thick"></em>
                                                        {{ $feature->name }}</span></li>
                                            @endforeach

                                        </ul>
                                        <div class="pricing-action flex justify-center align-bottom ">

                                                    <button type="submit" class="btn btn-outline-info"><em
                                                        class="icon ni ni-edit-fill"></em></button>
                                            <form action="{{ route('offer.destroy', $offer) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger mx-2"><em
                                                    class="icon ni ni-trash"></em></button>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        @endforeach

                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
