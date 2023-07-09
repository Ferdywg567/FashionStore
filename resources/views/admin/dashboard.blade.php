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
                                @forelse ($transactions as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <a class="text-dark" href="">{{ $item->user->name }}</a>
                                        </td>
                                        <td class="d-none d-lg-table-cell">{{ $item->poin_transaksi }}</td>
                                        <td class="d-none d-lg-table-cell">{{ $item->created_at->format('d F Y') }}</td>
                                        <td class="d-none d-lg-table-cell">Rp. {{ $item->total }}</td>
                                        <td class="text-right">
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                    id="dropdown-recent-order1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    {{-- <li class="dropdown-item">
                                                        <a href="{{route('transaction.show', $item->id)}}">View</a>
                                                    </li> --}}
                                                    <li class="dropdown-item">
                                                        <a href="#" class="btn-delete" data-href="{{ route('transaction.destroy', $item->id) }}">Remove</a>
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
@push('scripts')
    <script>
        $(document).ready(function () {
            
            $('.btn-delete').click(function (e) { 
                e.preventDefault();

                let url = $(this).data('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('.form-delete').attr('action', url);
                        $('.form-delete').submit();
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Your file has been deleted.',
                        //     'success'
                        // )
                    }
                })
            });
        });
    </script>
@endpush