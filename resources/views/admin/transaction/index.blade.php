@extends('admin.layouts.app')

@section('admin-content')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-12 p-b-15">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none card-default recent-orders" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Recent Orders</h2>
                        {{-- <div class="date-range-report">
                            <span></span>
                        </div> --}}
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Buyer Name</th>
                                    <th class="d-none d-lg-table-cell">Order Points</th>
                                    <th class="d-none d-lg-table-cell">Order Date</th>
                                    <th class="d-none d-lg-table-cell">Order Cost</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($collection as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <a class="text-dark" href="">{{ $item->user->name }}</a>
                                        </td>
                                        <td class="d-none d-lg-table-cell">{{ $item->poin_transaksi }}</td>
                                        <td class="d-none d-lg-table-cell">{{ $item->created_at->format('d F Y')}}</td>
                                        <td class="d-none d-lg-table-cell">Rp. {{ $item->total }}</td>
                                        <td class="text-right">
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                    id="dropdown-recent-order1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="dropdown-item">
                                                        <a href="{{route('transaction.show')}}">View</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
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

    </div> <!-- End Content -->
@endsection
