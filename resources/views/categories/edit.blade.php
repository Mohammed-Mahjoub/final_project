@extends('layouts.app')

@section('content')
<div class="container" >
    <!--begin::Col-->
    <div class="col-md-12" style="zoom: 1;">
        <!--begin::header-->
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">   Update Category :  {{ $category->name }}  </h4>
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

                <form class="form p-4" action="{{ route('category.update' , ['id' => $category->id ]) }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-body">

                        <div class="row">

                            {{-- Name --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AdminName" class="pb-3"> category name</label>
                                <input type="text" id="AdminName" value="{{ $category->name }}" class="form-control mb-10" name="name">
                            </div>
                        </div>

                        {{-- address  --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AddersAdmin" class="pb-3">  category address</label>
                                <input type="text" id="AddersAdmin" value="{{ $category->address }}"  class="form-control mb-10" name="address">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="AdminEmail" class="pb-3">  photo  </label>
                                <input type="file" id="AdminEmail" class="form-control mb-10" name="photo">
                            </div>
                        </div>
                    </div>

                    <!-- ------------ end row ------ -->
                    </div>
                        <!-- ---------- End --------- -->
                    </div>
                        <!-- ---------- End Row --------- -->
                    </div>
                    <div class="form-actions" style="margin-left: 38px; margin-bottom:20px">
                        <button class="btn btn-primary ">
                            <i class="la la-check-square-o"></i>update
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
