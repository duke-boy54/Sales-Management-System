@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit items') }}
                        <a class="btn btn-info float-right" href="{{ route('item.index') }}"> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('item.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <br />
                                @endif
                                @if (session()->has('success'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>{{ session('success') }}</strong>
                                    </div>
                                @endif

                                <div class="row">

                                    <div class="form-group col-md-4 offset-1">
                                        <label for="">Item Name</label>
                                        <input type="text" class="form-control" name="item_name" value="{{ ($item->item_Name) }}"
                                            placeholder="">
                                    </div>

                                    <div class="form-group col-md-4 offset-1">
                                        <label for="">Quantity</label>
                                        <input type="number" class="form-control" name="quantity"
                                            value="{{ ( $item->quantity ) }}" placeholder="">
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="form-group col-md-4 offset-1">
                                        <label for="">Buying Price</label>
                                        <input type="number" class="form-control" name="buy_price"
                                            value="{{ ( $item->buy_price ) }}" placeholder="">
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="">Selling Price</label>
                                        <input type="number" class="form-control" name="sell_price"
                                            value="{{ ( $item->sell_price ) }}" placeholder="">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-md-4 offset-1">
                                        <label for="">Alert stock</label>
                                        <input type="number" class="form-control" name="alert_stock"
                                            value="{{ ( $item->alert_stock ) }}" placeholder="">
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="">Category</label>
                                        <input type="text" class="form-control" name="category" value="{{ ( $item->category ) }}"
                                            placeholder="">
                                    </div>
                                </div>


                                <div class="text-center">
                                    {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                                    <input type="submit" class="btn btn-primary" value="save">
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
