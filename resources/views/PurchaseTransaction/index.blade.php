@extends('layouts.app')

@section('content')
    {{-- start Hader Page --}}
    <div class="alert alert-secondary">
        <div class="row ">
            <div class=" col-auto">
                <h1 class="text p-3 pt-5">Purchase Transaction </h1>
            </div>

        </div>
    </div>

    {{-- End Hader Page --}}
    {{-- Start Cards Trashed --}}
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 ">
        @foreach ($productCart as $item)
            @foreach ($stores as $itemstores)
                @if ($item->product_id == $itemstores->id)
                    <div class="col">
                        <div class="card portfolio-item anmit" style="width:22rem ;">
                            <img src="{{ URL::asset($itemstores->photo) }}" class="card-img-top" alt=""
                                style="height : 15rem ;">
                            <div class="card-body">
                                <span class="text-capitalize fw-bold text-wrap d-flex"> </span>

                                <h5 class="card-title"> Product name : <span class="text-capitalize"
                                        style="color:rgb(166, 162, 162); margin-right:5px;">

                                        {{ $itemstores->name }}
                                    </span></h5>
                                    <h5 class="card-title"> Store name : <span class="text-capitalize"
                                        style="color:rgb(166, 162, 162); margin-right:5px;">
                                        @foreach ($categories as $itemcategories)
                                        @if ($itemstores->category_id == $itemcategories->id)
                                                {{ $itemcategories->name }}
                                        @endif
                                    @endforeach
                                    </span></h5>
                                <h5 class="card-title"> Product price: <span class="text-capitalize"
                                        style="color:rgb(166, 162, 162); margin-right:5px;">
                                        {{ $item->price }}
                                    </span>
                                </h5>
                                <h5 class="card-title"> Total price: <span class="text-capitalize"
                                    style="color:rgb(166, 162, 162); margin-right:5px;">
                                    @foreach ($productCartreport as $itemProductCartreport)
                                        @if ($itemProductCartreport->product_id == $itemstores->id)

                                        {{ $itemProductCartreport->total }}
                                        @endif
                                    @endforeach
                                </span>
                                </h5>

                                <div class="card-footer">
                                    <small class="text-muted" style="font-size: 13px;">  Add This Product :
                                        {{ $item->created_at->format('Y - m - d') }} </small>
                                </div>

                              
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach

        @if ($productCart->count() == 0)
            <div class="alert alert-danger">
                sorry , not found any product
            </div>
        @endif

    </div>
    </div>
    {{-- End Cards Trashed --}}
@endsection
