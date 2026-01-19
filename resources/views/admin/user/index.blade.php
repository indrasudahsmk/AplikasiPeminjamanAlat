@extends('layouts-sbadmin2.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-users"></i>
        {{ $title }}
    </h1>
    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm" title="Tambah User">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>
                                <i class="fas fa-cog"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    @if ($user->role === 'admin')
                                        <span class="badge badge-primary badge-pill">
                                            Admin
                                        </span>
                                    @elseif ($user->role === 'petugas')
                                        <span class="badge badge-warning badge-pill">
                                            Petugas
                                        </span>
                                    @else
                                        <span class="badge badge-success badge-pill">
                                            Peminjam
                                        </span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info" data-toggle="modal" title="Lihat Detail User"
                                        data-target="#ModalView{{ $user->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"
                                        title="Ubah Data User">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" title="Hapus Data User"
                                        data-target="#ModalHapus{{ $user->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    @include('admin.user.modal')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection