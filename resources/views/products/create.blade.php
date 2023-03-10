@extends('layouts.app')

@section('content')
<div class="container" >
    <!--begin::Col-->
    <div class="col-md-12" style="zoom: 1;">
        <!--begin::header-->
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">   Add New Product  </h4>
            @if (count($errors) > 0 )
            <ul>
                @foreach ($errors as $item )
                <li class="alert alert-danger">
                    {{ $item }}
                </li>
                @endforeach
            </ul>
              @endif

            @if ($message = Session::get('message'))
            <div class="alter alert-primary">
                {{ $message }}
            </div>
            @endif

        </div>
        <!-- end::header -->
        <!--begin::content-->
        <!-- end::content -->
        <div class="card-content collapse show">
            {{-- begin Card Content -------------------------- --}}
            <div class="card-body">
                <form class="form p-4" id="my_form" method="post" action="{{ route('store.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="form-body">

                    <div class="row">

                            {{-- Name --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AdminName" class="pb-3">  Product Name </label>
                                <input type="text" id="AdminName" class="form-control mb-10" name="name">
                            </div>
                        </div>

                        {{-- Description  --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AddersAdmin" class="pb-3"> Product description </label>
                                <input type="text" id="AddersAdmin" class="form-control mb-10" name="description">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AdminName" class="pb-3"> Product price  </label>
                                <input type="text" step="any" id="AdminName" class="form-control mb-10" name="price">
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AdminName" class="pb-3"> Product price after Discount  </label>
                                <input type="text" step="any" id="AdminName" class="form-control mb-10" name="price_after_discount">
                            </div>
                        </div>
                        {{-- Photo --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AdminEmail" class="pb-3"> Product photo </label>
                                <input type="file" id="AdminEmail" class="form-control mb-10" name="photo">
                            </div>
                        </div>

                        {{-- Id Categories --}}

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AdminEmail" class="pb-3">Category Name </label>
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    {{-- <option selected></option> --}}
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>


                    </div>
                    <div class="form-check mt-5 mb-5">
                        <input class="form-check-input" name="flag" type="checkbox" role="switch" id="flexSwitchCheckChecked" >

                                    <label class="form-check-label" for="flexCheckChecked">
                                        flag
                                    </label>
                            </div>
                    <!-- ------------ end row ------ -->
                    </div>
                        <!-- ---------- End --------- -->
                    </div>
                        <!-- ---------- End Row --------- -->
                    </div>
                    <div class="form-actions" style="margin-left: 38px; margin-bottom:20px">
                        <button class="btn btn-primary edit">
                            <i class="la la-check-square-o"></i>add
                            </button>

                        <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x"></i><a href="{{ route('categories')}}" class="link-item" style="color: #fff;">close</a>
                        </button>

                    </div>
                </form>
            </div>
            {{-- End Card Content -------------------------- --}}
    </div>
    <!-- end::Col -->
</div>




@endsection


