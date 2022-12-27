@extends('layouts.app')

@section('content')

{{-- start Hader Page --}}
<div class="alert alert-secondary" >
    <div class="row ">
        <div class=" col-auto">
            <h1 class="text p-3 pt-5">   Products For :  {{  $nameCategory }}</h1>
        </div>
        <div class="col-auto  me-auto" style="position: absolute;
        right: 10px;top:40px;">
            <a class="btn btn-primary mt-3 "  href="{{ route('store.create') }}" >  Add New Product </a>

    </div>
</div>
@if ($message = Session::get('message'))
<div class="alert alert-primary">
    {{ $message }}
</div>
@endif
{{-- End Hader Page --}}
{{-- Start Cards Trashed --}}
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-5">


    @foreach ($stores as $item)

    <div class="col">
        <div class="card portfolio-item anmit" style="width:22rem ; ">
        <img src="{{ URL::asset($item->photo) }}" class="card-img-top" alt="" style="height : 15rem ;">
        <div class="card-body">
        <span class="text-capitalize fw-bold text-wrap d-flex" > </span>

        <h5 class="card-title"> Product Name   :  <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">

            {{ $item->name }}
       </span></h5>
       <h5 class="card-title"> Category Name   :  <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">

        {{ $nameCategory }}
   </span></h5>
       <h5 class="card-title">  Product description:  <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">

            {{ $item->description }}
            </span>
        </h5>

        <h5 class="card-title" style=" <?= $item->flag == 1 ? 'text-decoration: line-through;' : '' ?>"> Product Price     :  <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">
            {{ $item->price }}
            </span>
        </h5>

        <h5 class="card-title"   style=" <?= $item->flag == 0 ? 'text-decoration: line-through;' : '' ?>" > Product price after discount     :  <span class="text-capitalize" style="color:rgb(166, 162, 162); margin-right:5px;">
            {{ $item->price_after_discount }}
            </span>
        </h5>
        <div class="form-check mt-5 mb-5">
            <form action="{{ route('flagProuct' , ['id' => $item->id]) }}" method="post" >
                @csrf
                <input class="form-check-input" name="flag" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?= $item->flag == 1 ? 'checked' : '' ?>>

                {{-- <input class="form-check-input" name="flag" type="checkbox" value="1"  id="flexCheckChecked" <?= $item->flag == 1 ? 'checked' : '' ?>> --}}
                <label class="form-check-label" for="flexSwitchCheckChecked">
                    flag
                </label>
                <button class="btn btn-primary " style="margin-left: 10px">Save</button>
            </form>
          </div>
        <div class="card-footer">
            <small class="text-muted" style="font-size: 13px;">اخر تحديث منذ : {{ $item->updated_at->diffForhumans()}}  </small>
          </div>
          <a class="btn btn-primary" style="margin-bottom:15px;margin-top:8px" data-bs-toggle="collapse" href="#operation{{ $item->id }}" role="button" aria-expanded="false" aria-controls="operation163">
            Choose the type of operation you want:
            </a>
            <ul class="list-group list-group-fluh collapse ulstyle" style="margin-bottom:5px ; position:relative; " id="operation{{ $item->id }}">

                <li class="list-group-item">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit">
                        <a href="{{ route('store.edit', ['id' => $item->id]) }}" style="color:#fff; text-decoration: none;">update </a>
                    </button>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('store.destroy', ['id' => $item->id]) }}">
                        <button class="btn btn-danger confirmprocess " type="button"> Delete </button>
                    </a>
                </li>


            </ul>

            </div>
        </div>
    </div>
    @endforeach

    @if ($stores->count() == 0)
    <div class="alert alert-danger">
        عذر , لا يوجد منتجات لهذه الفئة  يمكنك اضافة منتج جديدة من خلال الضغط على زر منتج جديدة
    </div>
    @endif
    </div>
</div>
{{-- End Cards Trashed --}}



@endsection




