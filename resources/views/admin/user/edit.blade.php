@extends('layouts-sbadmin2.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-edit"></i>
        {{ $title }}
    </h1>
    <div class="card mb-5">
        <div class="card-header bg-primary">
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm" title="Kembali">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span> Nama :
                        </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $user->name) }}">
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
                            value="{{ old('email', $user->email) }}">
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
                            <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin
                            </option>
                            <option value="petugas" {{ old('role', $user->role) === 'petugas' ? 'selected' : '' }}>Petugas
                            </option>
                            <option value="peminjam" {{ old('role', $user->role) === 'peminjam' ? 'selected' : '' }}>
                                Peminjam</option>
                        </select>
                        @error('role')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            Password :
                        </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            autocomplete="off">
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password</small>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            Konfirmasi Password :
                        </label>
                        <input type="password" name="password_confirmation" class="form-control" autocomplete="off">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-sm" title="Simpan Perubahan">
                        <i class="fas fa-save mr-2"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
