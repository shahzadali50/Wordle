@extends('layouts.panel')
@section('title')
Dashboard

@endsection

@section('content')

<div class="row mt-5">
    <div class="col-md-12 col-xxl-8">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Congratulations <span class="fw-bold"></span> 🎉</h4>
                        <p class="mb-0">You have done 68% 😎 more sales today.</p>
                        <p>Check your new badge in your profile.</p>
                        {{-- <a href="javascript:;" class="btn btn-primary waves-effect waves-light">View Profile</a> --}}
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                    <div class="card-body pb-0 px-0 pt-2">
                        <img src="{{ url('admin/assets/img/illustrations/illustration-john-light.png') }}" height="186" class="scaleX-n1-rtl" alt="View Profile">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
