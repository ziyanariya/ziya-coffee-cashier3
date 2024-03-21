<div class="modal fade" id="modalFormProduktitipan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFormProduktitipanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormProduktitipanLabel">Tambah Data</h5>
                <button type="button" class="btn-close" style="font-size: 2rem;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="produktitipan" enctype="multipart/form-data">
                    @csrf
                    <div id="method"></div>
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama produk </label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="nama_supplier" class="form-label">nama_supplier</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
                    </div>
                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">harga_beli</label>
                        <input type="text" class="form-control" id="harga_beli" name="harga_beli">
                    </div>
                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">harga_jual</label>
                        <input type="text" class="form-control" id="harga_jual" name="harga_jual">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">stok</label>
                        <input type="text" class="form-control" id="stok" name="stok">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
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