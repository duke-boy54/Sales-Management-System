@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-success">
                    <div class="inner">
                       <h1>200</h1>
                        <b>Total sales</b><br>
                    </div>
                    <div class="icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6"">
                                              <div class=" small-box bg-info">
                <div class="inner">
                    <h1>100</h1>
                    <b>Total Purchases</b>
                </div>
                <div class="icon">
                    <i class="fas fa-th-large"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class=" small-box bg-warning">
                <div class="inner">
                    <h1>200</h1>
                    <b>Recently +items</b>
                </div>
                <div class="icon">
                    <i class="fas fa-dolly"></i>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
            <div class=" small-box bg-danger">
                <div class="inner">
                    <h1>345</h1>
                    <b><a href="#">notifications</a> </b>
                </div>
                <div class="icon">
                    <i class="fas fa-bell"></i>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- TABLE: LATEST ORDERS -->
    <div class="row">
        <div class="col-6 ml-3">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Orders</h3>
                    
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Router</th>
                                    <th>Brand</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">OR9842</a></td>
                                    <td>Ethernet</td>
                                    <td><span class="badge badge-info">CISCO</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">90</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">OR1848</a></td>
                                    <td>Firewall</td>
                                    <td><span class="badge badge-info">SOPHOS</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">80</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">OR7429</a></td>
                                    <td>Laptop</td>
                                    <td><span class="badge badge-info">DELL</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">10</div>
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="#" class="btn btn-sm btn-secondary float-left">Place New Order</a>
                    <a href="#" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                </div>
            </div>


        </div>
        <div class="col-4 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recently Added Products</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        <li class="item">
                            
                            <div class="product-info">
                                <a href="#" class="product-title">GX machine
                                    <span class="badge badge-warning float-right">$1800</span></a>
                                <span class="product-description">
                                    Gaming Console
                                </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            
                            <div class="product-info">
                                <a href="#" class="product-title">Fire Alarm
                                    <span class="badge badge-warning float-right">$700</span></a>
                                <span class="product-description">
                                    IC 23445v
                                </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                           
                            <div class="product-info">
                                <a href="#" class="product-title">
                                    Xbox One <span class="badge badge-warning float-right">
                                        $350
                                    </span>
                                </a>
                                <span class="product-description">
                                    Xbox One Console
                                </span>
                            </div>
                        </li>
                
                       
                        <!-- /.item -->
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center bg-secondary">
                    <a href="#" class="uppercase">View All Products</a>
                </div>
            </div>
         

            @yield('content')
        @endsection

