@extends('layouts-sbadmin2.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus"></i>
        {{ $title }}
    </h1>
    <div class="card mb-5">
        <div class="card-header bg-success">
            <a href="{{ route('users.index') }}" class="btn btn-success btn-sm" title="Kembali">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span> Nama :
                        </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" autocomplete="off">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span> Email :
                        </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" autocomplete="off">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span> Role :
                        </label>
                        <select name="role" class="form-control @error('role') is-invalid @enderror">
                            <option value="">-- Pilih Role --</option>
                            <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="petugas" {{ old('role') === 'petugas' ? 'selected' : '' }}>Petugas</option>
                            <option value="peminjam" {{ old('role') === 'peminjam' ? 'selected' : '' }}>Peminjam</option>
                        </select>
                        @error('role')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span> Password :
                        </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            autocomplete="off">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span> Konfirmasi Password :
                        </label>
                        <input type="password" name="password_confirmation" class="form-control" autocomplete="off">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success btn-sm" title="Simpan Data User">
                        <i class="fas fa-save mr-2"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
