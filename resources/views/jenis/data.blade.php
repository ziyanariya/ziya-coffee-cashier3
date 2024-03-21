<div class="mt-4">
    <table class="table table-striped rounded overflow-hidden" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>nama_jenis</th>
                <th>kategori_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenis as $index => $s)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $s->nama_jenis }}</td>
                <td>{{ $s->kategori_id }}</td>
                <td>
                    <button type="button" class="btn btn-success btn-size" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{ $s->id }}" data-nama_jenis="{{ $s->nama_jenis }}" data-kategori_id="{{ $s->kategori_id }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('jenis.destroy', $s->id) }}" method="post" class="d-inline">
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
