<div class="modal fade" id="modalFormMenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFormMenuLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormMenuLabel">Tambah Data</h5>
                <button type="button" class="btn-close" style="font-size: 2rem;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="menu" enctype="multipart/form-data">
                    @csrf
                    <div id="method"></div>
                    <div class="mb-3">
                        <label for="nama_menu" class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" id="nama_menu" name="nama_menu">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="text" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <input type="text" class="form-control" id="dskripsi" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_id" class="form-label">jenis_id</label>
                        <input type="text" class="form-control" id="jenis_id" name="jenis_id">
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