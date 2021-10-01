@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <div class="row"> --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Purchase') }}
                    <a class="btn btn-info float-right" href="{{ route('purchase.index') }}"> Back</a>

                </div>
                <div class="card-body">
                    <form action="{{ route('purchase.update', $purchase->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            {{-- <div class="col-md-6 offset-md-3"> --}}
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
                                    <input type="text" class="form-control" name="item_name"
                                        value="{{ ($purchase->item_name) }}" placeholder="">
                                </div>
                                <div class="form-group col-md-4 offset-1">
                                    <label for="">Buy Price</label>
                                    <input type="text" class="form-control" name="price" value="{{ ($purchase->price) }}"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="div row">


                                <div class="form-group col-md-2 offset-1 ">
                                    <label for="">Quantity</label>
                                    <input type="number" min="0" class="form-control" name="quantity"
                                        value="{{ $purchase->quantity }}" placeholder="">
                                </div>
                                <div class="form-group col-md-2 offset-1 ">
                                    <label for="">Other Cost</label>
                                    <input type="text" class="form-control" name="other_cost" min="0"
                                        value="{{ $purchase->other_cost }}" placeholder="">
                                </div>
                                <div class="form-group col-md-2 offset-1">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control" name="date" value="{{ $purchase->date }}"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 offset-1">
                                    <label for="">Supplier Name</label>
                                    <input type="text" class="form-control" name="supplier_name"
                                        value="{{ $purchase->supplier_name }}" placeholder="">
                                </div>
                                <div class="form-group col-md-4 offset-1">
                                    <label for="">Supplier Contact</label>
                                    <input type="text" class="form-control" name="supplier_contact"
                                        value="{{ $purchase->supplier_contact }}" placeholder="">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection
