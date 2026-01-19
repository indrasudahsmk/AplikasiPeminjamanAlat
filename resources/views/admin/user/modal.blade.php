<!-- MODAL VIEW -->
<div class="modal fade" id="ModalView{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="exampleModalLabel">Detail {{ $title }}</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    &times;
                </button>
            </div>
            <div class="modal-body text-left">
                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Nama</div>
                    <div class="col-7">: {{ $user->name }}</div>
                </div>

                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Email</div>
                    <div class="col-7">: {{ $user->email }}</div>
                </div>

                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Role</div>
                    <div class="col-7">: {{ ucfirst($user->role) }}</div>
                </div>

                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Terdaftar pada</div>
                    <div class="col-7">: {{ $user->created_at->format('d/m/Y H:i:s') }}</div>
                </div>

                <div class="row py-1">
                    <div class="col-5 font-weight-bold">Terakhir diubah</div>
                    <div class="col-7">: {{ $user->updated_at->format('d/m/Y H:i:s') }}</div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" title="Tutup">
                    <i class="fas fa-times mr-2"></i>Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL HAPUS -->
<div class="modal fade" id="ModalHapus{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Hapus {{ $title }}</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    &times;
                </button>
            </div>
            <div class="modal-body text-left">
                <p>Apakah anda yakin ingin menghapus user berikut?</p>

                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Nama</div>
                    <div class="col-7">: {{ $user->name }}</div>
                </div>

                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Email</div>
                    <div class="col-7">: {{ $user->email }}</div>
                </div>

                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Role</div>
                    <div class="col-7">: {{ ucfirst($user->role) }}</div>
                </div>

                <div class="row border-bottom py-1">
                    <div class="col-5 font-weight-bold">Terdaftar pada</div>
                    <div class="col-7">: {{ $user->created_at->format('d/m/Y H:i:s') }}</div>
                </div>

                <div class="row py-1">
                    <div class="col-5 font-weight-bold">Terakhir diubah</div>
                    <div class="col-7">: {{ $user->updated_at->format('d/m/Y H:i:s') }}</div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" title="Tutup">
                    <i class="fas fa-times mr-2"></i>Tutup
                </button>
                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data User">
                        <i class="fas fa-trash mr-2"></i>Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>