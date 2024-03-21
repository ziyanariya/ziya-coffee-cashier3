<div class="mt-4">
    <table class="table table-striped rounded overflow-hidden" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>nama</th>
                <th>email</th>
                <th>nomor_telepon</th>
                <th>alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $index => $s)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->email }}</td>
                <td>{{ $s->nomor_telepon}}</td>
                <td>{{ $s->alamat}}</td>
                <td>
                    <button type="button" class="btn btn-success btn-size" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit" data-id="{{ $s->id }}" data-nama="{{ $s->nama}}" data-email="{{ $s->email}}" data-nomor_telepon="{{ $s->nomor_telepon }}" data-alamat="{{ $s->alamat }}" >
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('pelanggan.destroy', $s->id) }}" method="post" class="d-inline">
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
