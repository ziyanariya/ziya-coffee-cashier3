<div class="mt-4">
    <table class="table table-striped rounded overflow-hidden" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>nama produk</th>
                <th>nama supplier</th>
                <th>harga beli</th>
                <th>harga jual</th>
                <th>stok</th>
                <th>keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produktitipan as $index => $s)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $s->nama_produk }}</td>
                <td>{{ $s->nama_supplier }}</td>
                <td>{{ $s->harga_beli}}</td>
                <td>{{ $s->harga_jual}}</td>
                <td>{{ $s->stok}}</td>
                <td>{{ $s->keterangan}}</td>
                <td>
                    <button type="button" class="btn btn-success btn-size" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{ $s->id }}" data-nama_produk="{{ $s->nama_produk}}" data-nama_supplier="{{ $s->nama_supplier}}" data-harga_beli="{{ $s->harga_beli }}" data-harga_jual="{{ $s->harga_jual }}" data-stok="{{ $s->stok }}" data-keterangan="{{ $s->keterangan }}" >
                        <i class="fas fa-edit"></i> 
                    </button>
                    <form action="{{ route('produktitipan.destroy', $s->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger delete-data btn-size" data-id="{{ $s->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
