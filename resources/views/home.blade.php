@extends('layouts.app')

@section('content')


<!--begin::Section-->
<div class="pt-12">
    <!--begin::Title-->

    <h3 class="text-dark text-center fs-1 fw-boldest line-height-lg">Welcome {{ Auth::user()->name }} ,Choose the interface you want to go to
     </h3>
    <!--end::Title-->

    <!--begin::Action-->
    <div class="text-center py-7 mb-18">
        <a href="{{ route('categories') }}" class="btn btn-primary mb-4" >Stores && Products </a>
        <a href="{{ route('report') }}" class="btn btn-primary mb-4" style="margin-left: 10px;"> Purchase Transactions </a>
        <a href="{{ route('index') }}" class="btn btn-primary mb-4" style="margin-left: 10px;">  Public Website </a>
    </div>
    <!--end::Action-->
</div>
<!--end::Section-->



@endsection

