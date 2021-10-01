@extends('layouts.app')
@section()

{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sales Report') }}
                </div>
                <div class="card-body">
                    <a href="{{ route('report.print') }}" class="btn btn-primary float-right mb-1"> Print</a>

                    @if (session()->has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{session('success')}}</strong>
                    </div>
                    @endif

                    <table class="table table-striped table-inverse table-bordered table-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Sales Date</th>
                                <th>Sales Id</th>
                                <th>Customer Name</th>
                                <th>Sales Total</th>
                                <th>discount</th>
                                <th>Paid Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($SaleDetails as $sale)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$sale->sale->created_at}}</td>
                                <td>{{$sale->sale_id}}</td>
                                <td>{{$sale->sale->customer_name}}</td>
                                <td>{{$sale->amount}}</td>
                                <td>{{$sale->discount}}</td>
                                <td>{{$sale->quantity}}</td>
                                

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}


        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
@endsection
