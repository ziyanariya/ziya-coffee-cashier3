<div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditJenisLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditJenisLabel">Edit Data</h5>
                <button type="button" class="btn-close" style="font-size: 2rem;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="jenis" class="form-edit">
                    @csrf
                    @method('PUT')
                    {{-- <div id="method"></div> --}}
                    <div class="mb-3">
                        <label for="nama_jenis" class="form-label">Nama Jenis</label>
                        <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
                    </div>
                    <div class="mb-3">
                        <label for="kategori_id" class="form-label">kategori_id</label>
                        <input type="text" class="form-control" id="kategori_id" name="kategori_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>