@extends('layouts.app')

@section('content')

{{-- start Hader Page --}}
<div class="alert alert-secondary" >
    <div class="row ">
        <div class=" col-auto">
            <h1 class="text p-3 pt-5">Category </h1>
        </div>
        <div class="col-auto  me-auto" >
            <a class="btn btn-primary mt-3 " href="{{ route('category.create') }}" >  Create New Category  </a>
        </div>
    </div>
</div>
@if ($message = Session::get('message'))
<div class="alert alert-primary">
    {{ $message }}
</div>
@endif
{{-- End Hader Page --}}
{{-- Start Cards Trashed --}}
<div class="row row-cols-1 row-cols-md-3 g-4 mt-5 " >
    @foreach ($categories as $item)

    <div class="col">
        <div class="card portfolio-item anmit" style="width:22rem ;">
        <img src="{{ URL::asset($item->photo) }}" class="card-img-top" alt="" style="height : 15rem ;">
        <div class="card-body">
        <span class="text-capitalize fw-bold text-wrap d-flex" > </span>

        <h5 class="card-title"> category name   :  <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">

            {{ $item->name }}
       </span></h5>
       <h5 class="card-title">   category address:  <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">

            {{ $item->address }}
            </span>
        </h5>

         @php
         $countStore = 0;
         @endphp
         @foreach($stores as $itemStore)

             @if ($itemStore->category_id == $item->id)
             @php
             $countStore++;
             @endphp
             @endif

         @endforeach
       <h5 class="card-title">  Count Products For This Category : <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">

        {{ $countStore }}
        </span>
        </h5>
        <div class="card-footer">
            <small class="text-muted" style="font-size: 13px;"> Last Update  : {{ $item->updated_at->diffForhumans()}}  </small>
          </div>
          <a class="btn btn-primary" style="margin-bottom:15px;margin-top:8px" data-bs-toggle="collapse" href="#operation{{ $item->id }}" role="button" aria-expanded="false" aria-controls="operation163">
            Choose the type of operation you want:
            </a>
            <ul class="list-group list-group-fluh collapse ulstyle" style="margin-bottom:5px ; position:relative; " id="operation{{ $item->id }}">

                <li class="list-group-item">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit">
                        <a href="{{ route('category.edit', ['id' => $item->id]) }}" style="color:#fff; text-decoration: none;">Update</a>
                    </button>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('category.destroy', ['id' => $item->id]) }}">
                        <button type="button" class="btn btn-danger confirmprocess "> Send For Trash   </button>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('stores', ['id' => $item->id]) }}">
                        <button class="btn btn-primary ">  Show Products   </button>
                    </a>
                </li>


            </ul>

            </div>
        </div>
    </div>
    @endforeach
    @if ($categories->count() == 0)
    <div class="alert alert-danger">
       عذر , لا يوجد فئات يمكنك اضافة فئة جديدة من خلال الضغط على زر فئة جديدة
    </div>
    @endif
    </div>
</div>
{{-- End Cards Trashed --}}

@endsection
