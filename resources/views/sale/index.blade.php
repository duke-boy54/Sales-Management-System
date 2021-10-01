@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sales List') }}
                </div>
                <div class="card-body">
                    <a href="{{ route('sale.create') }}" class="btn btn-primary float-right mb-1"> New Sale</a>

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
                                <th>Item</th>
                                <th>Price</th>
                                <th>SQuantity</th>
                                <th>discount</th>
                                <th>Total Amount</th>
                                <th>Customer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($SaleDetails as $sale)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$sale->sale->created_at}}</td>
                                <td>{{$sale->item->item_Name??''}}</td>
                                <td>{{$sale->unitprice}}</td>
                                <td>{{$sale->quantity}}</td>
                                <td>{{$sale->discount}}</td>
                                <td>{{$sale->amount}}</td>
                                <td>{{$sale->sale->customer_name}}</td>
                        
                                <td>
                                    <a href="{{ route('sale.edit', $sale->id)}}" class="btn btn-primary btn-sm">Edit</a>

                                    <button type="button" onclick="onDeleteInfo('{{$sale->id}}')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModel">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning">Warning!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <p class="text-danger text-bold">Are you sure you want to delete this information?</p>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" id="id" value="">
                <button type="button" class="btn btn-success" data-dismiss="modal">No, cancel!</button>
                <button type="button" class="btn btn-danger" onclick="deleteInfo()">Yes, Delete!</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    function onDeleteInfo(id) {
        $("#id").val(id);
    }

    function deleteInfo() {
        let id = $("#id").val();
        let _url = '/sales/' + id;
        let _token = $('meta[name="csrf-token"]').attr('content');

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });

        $.ajax({
            url: _url,
            type: 'DELETE',
            data: {
                _token: _token
            },
            success: function(response) {
                if (response.status) {
                    Toast.fire({
                        type: 'success',
                        title: response.message
                    });
                } else {
                    Toast.fire({
                        type: 'error',
                        title: 'An error occurred. Please try again !!!.       '
                    });
                }
            }
        });
        location.reload();
    }
</script>
@endsection
