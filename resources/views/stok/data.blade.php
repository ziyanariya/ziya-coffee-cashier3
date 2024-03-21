<div class="mt-4">
    <table class="table table-striped rounded overflow-hidden" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>menu_id</th>
                <th>jumlah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stok as $index => $s)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $s->menu_id }}</td>
                <td>{{ $s->jumlah }}</td>
                <td>
                    <button type="button" class="btn btn-success btn-size" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{ $s->id }}" data-menu_id="{{ $s->menu_id }}" data-jumlah="{{ $s->jumlah }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('stok.destroy', $s->id) }}" method="post" class="d-inline">
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
