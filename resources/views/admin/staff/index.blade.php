@extends('admin.layouts.app')
@section('admin-content')
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>List Akun Staff</h1>
                {{-- <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Vendor
                </p> --}}
            </div>
            <div>
                <button type="button" class="btn btn-primary create-staff" data-bs-toggle="modal" data-bs-target="#staffModal">
                    Tambah Staff
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="ec-vendor-list card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Lokasi</th>
                                        <th>No. Telp</th>
                                        <th>Role</th>
                                        <th>Terdaftar Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->telephone }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            <td>{{ $user->created_at->format('d F Y') }}</td>
                                            <td>
                                                <button type="button" data-url="{{ route('staff.update', $user->id) }}" data-name="{{ $user->name }}"
                                                    data-email="{{ $user->email }}" data-address="{{ $user->address }}"
                                                    data-phone="{{ $user->telephone }}" data-role="{{ $user->role_id }}"
                                                    class="btn btn-sm btn-outline-warning me-2 edit-staff"
                                                    data-bs-toggle="modal" data-bs-target="#staffModal">Edit</button>
                                                <button type="button" data-url="{{ route('staff.destroy', $user->id) }}"
                                                    class="btn btn-sm btn-outline-danger delete-staff">Delete</button>
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
        <div class="modal fade modal-add-contact" id="staffModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form id="form-modal" action="{{ route('staff.store') }}" method="POST">
                        <input type="hidden" name="_method" id="method" value="PUT">
                        @csrf
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="staff-modal-title"></h5>
                        </div>

                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Nama Akun</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="John">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="johnexample@gmail.com">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="phone">No. telp</label>
                                        <input type="text" class="form-control" id="phone" name="telephone"
                                            placeholder="+628123456789">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Jl. Percobaan">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select" name="role_id" id="role" aria-label="Role User">
                                        <option>-- Pilih Role Akses -- </option>
                                        <option value="1">Owner Toko</option>
                                        <option value="2">Staff Toko</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-secondary btn-pill"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-pill">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.create-staff').click(function(e) {
                $('#method').val('POST');
                $('#form_id').trigger("reset");
                $('#staff-modal-title').text('Tambah Staff');
                $('#form-modal').attr('action', "{{ route('staff.store') }}");
            });

            $('.edit-staff').click(function(e) {
                $('#method').val('PUT');
                $('#staff-modal-title').text('Edit Staff');
                // $('.modal-body').append("{{ method_field('put') }}");

                let url     = $(this).data('url');
                let name    = $(this).data('name');
                let email   = $(this).data('email');
                let address = $(this).data('address');
                let phone   = $(this).data('phone');
                let role    = $(this).data('role');

                $('#form-modal').attr('action', url);
                $('#name').val(name);
                $('#email').val(email);
                $('#address').val(address);
                $('#phone').val(phone);
                $('#role').val(role);
            });

            $('.delete-staff').click(function(e) {
                e.preventDefault();

                let url = $(this).data('url');

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
