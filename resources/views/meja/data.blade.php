<div class="mt-4">
    <table class="table table-striped rounded overflow-hidden" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>nomor_meja</th>
                <th>kapasitas</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($meja as $index => $s)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $s->nomor_meja }}</td>
                <td>{{ $s->kapasitas }}</td>
                <td>{{ $s->status }}</td>
                <td>
                    <button type="button" class="btn btn-success btn-size" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{ $s->id }}" data-nomor_meja="{{ $s->nomor_meja }}" data-kapasitas="{{ $s->kapasitas }}" data-status="{{ $s->status }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('meja.destroy', $s->id) }}" method="post" class="d-inline">
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
