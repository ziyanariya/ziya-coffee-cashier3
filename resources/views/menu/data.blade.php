<div class="mt-4">
    <table class="table table-striped rounded overflow-hidden" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>nama_menu</th>
                <th>harga</th>
                <th>image</th>
                <th>deskripsi</th>
                <th>jenis_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $index => $s)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $s->nama_menu }}</td>
                <td>{{ $s->harga }}</td>
                <td>{{ $s->image}}</td>
                <td>{{ $s->deskripsi}}</td>
                <td>{{ $s->jenis_id }}</td>
                <td>
                    <button type="button" class="btn btn-success btn-size" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{ $s->id }}" data-nama_menu="{{ $s->nama_menu }}" data-harga="{{ $s->harga }}" data-image="{{ $s->image }}" data-deskripsi="{{ $s->deskripsi }}" data-jenis_id="{{ $s->jenis_id }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('menu.destroy', $s->id) }}" method="post" class="d-inline">
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
