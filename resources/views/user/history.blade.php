@extends('user.layouts.app')
@section('user-content')
    <!-- User history section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="ec-shop-rightside col-12">
                    <div class="ec-vendor-dashboard-card">
                        <div class="ec-vendor-card-header">
                            <h5>My History Orders</h5>
                            <div class="ec-header-btn">
                                <a class="btn btn-lg btn-primary" href="{{ route('home') }}">Shop Now</a>
                            </div>
                        </div>
                        <div class="ec-vendor-card-body">
                            <div class="ec-vendor-card-table">
                                <table class="table ec-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Transaction ID</th>
                                            <th scope="col">Tax</th>
                                            <th scope="col">Total Price</th>
                                            <th scope="col">Total Poin Gained</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($transactions as $item)
                                            <tr class="align-middle">
                                                <th scope="row"><span>{{$item->id}}</span></th>
                                                <td><span>Rp. {{$item->pajak}}</span></td>
                                                <td><span>Rp. {{$item->total}}</span></td>
                                                <td><span>{{$item->poin_transaksi}} Point</span></td>
                                                <td><span class="tbl-btn"><a class="btn btn-lg btn-primary"
                                                            href="{{ route('showReceipt', $item->id) }}">View</a></span>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End User history section -->
@endsection
