@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <div class="div class-row"> --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add item') }}
                    <a class="btn btn-info float-right" href="{{ route('item.index') }}"> Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('item.store') }}" method="POST">
                        @csrf


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
                                <input type="text" class="form-control" name="item_name" value="{{ old('name') }}"
                                    placeholder="">
                            </div>

                            <div class="form-group col-md-4 offset-1">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="quantity" min="1" value="{{ old('price') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-4 offset-1">
                                <label for="">Buying Price</label>
                                <input type="number" class="form-control" name="buy_price" min="0" value="{{ old('price') }}"
                                    placeholder="">
                            </div>

                            <div class="form-group col-6">
                                <label for="">Selling Price</label>
                                <input type="number" class="form-control" name="sell_price" min="0" value="{{ old('quantity') }}"
                                    placeholder="">
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-4 offset-1">
                                <label for="">Alert stock</label>
                                <input type="number" class="form-control" name="alert_stock" min="1"
                                    value="{{ old('alert_stock') }}" placeholder="">
                            </div>

                            <div class="form-group col-6">
                                <label for="">Category</label>
                                <input type="text" class="form-control" name="category" value="{{ old('type') }}"
                                    placeholder="">
                            </div>
                        </div>


                        <div class="text-center">
                            {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                            <input type="submit" class="btn btn-primary" value="save">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
