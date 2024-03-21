<div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditMejaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditMejaLabel">Edit Data</h5>
                <button type="button" class="btn-close" style="font-size: 2rem;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="meja" class="form-edit">
                    @csrf
                    @method('PUT')
                    {{-- <div id="method"></div> --}}
                    <div class="mb-3">
                        <label for="nomor_meja" class="form-label">Nomor meja</label>
                        <input type="text" class="form-control" id="nomor_meja" name="nomor_meja">
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">kapasitas</label>
                        <input type="text" class="form-control" id="kapasitas" name="kapasitas">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">status</label>
                        <input type="text" class="form-control" id="status" name="status">
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