<!-- <table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr class = "text-sm">
            <th>meja_id</th>
            <th>tanggal_pemesanan</th>
            <th>jam_mulai</th>
            <th>jam_selesai</th>
            <th>nama_pemesan</th>
            <th>jumlah_pelanggan</th>
            <th>Action</th>
        </tr>
    </thead>
    </tbody>
          @foreach($Pemesanan as $p)
          <tr>
              <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
              <td>{{$p->meja_id}}</td>
              <td>{{$p->tanggal_pemesanan}}</td>
              <td>{{$p->jam_mulai}}</td>
              <td>{{$p->jam_selesai}}</td>
              <td>{{$p->nama_pemesan}}</td>
              <td>{{$p->jumlah_pelanggan}}</td>
             


              <td>
                <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#modalEdit" data-mode="edit"
                data-id = "{{ $p->id}}"
                data-meja_id = "{{ $p->meja_id}}"
                data-tanggal_pemesanan = "{{ $p->tanggal_pemesanan}}"
                data-jam_mulai = "{{ $p->jam_mulai}}"
                data-jam_selesai = "{{ $p->jam_selesai}}"
                data-nama_pemesan = "{{ $p->nama_pemesan}}"
                data-jumlah_pelanggan = "{{ $p->jumlah_pelanggan}}"
                >
                <i class="fas fa-edit"></i>
                   </button>
                <form action="{{ route('pemesanan.destroy', $p->id) }}" method="post" style="display: inline">
                      @csrf
                      @method('DELETE')
                    <button type="button" class="btn delete-data btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </td>

            </tr>
            @endforeach
      </tbody>
</table>
               
               -->