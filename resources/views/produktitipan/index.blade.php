@extends('templates.layout')

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormProduktitipan">
                <i class="fas fa-plus"></i> Tambah Produk titipan
            </button>
            @include('produktitipan.data')
        </div>
    </div>
</section>
@endsection

@include('produktitipan.form')
@include('produktitipan.edit')

@push('script')
<script>
    $('.alert-success').fadeTo(2000, 500).slideUp(500, function() {
        $('.alert-success').slideUp(500)
    })

    $('.alert-danger').fadeTo(2000, 500).slideUp(500, function() {
        $('.alert-danger').slideUp(500)
    })

    $(function() {
        // dialog hapus data
        $('.delete-data').on('click', function(e) {
            const nama = $(this).closest('tr').find('td:eq(1)').text();
            // console.log('nama')
            Swal.fire({
                icon: 'error',
                title: 'Hapus Data',
                html: `Apakah data <b>${nama}</b> akan di hapus?`,
                confirmButtonText: 'Ya',
                denyButtonText: 'Tidak',
                'showDenyButton': true,
                focusConfirm: false
            }).then((result) => {
                if (result.isConfirmed)
                    $(e.target).closest('form').submit()
                else swal.close()
            })
        })

        $('#modalEdit').on('show.bs.modal', function(e) {
            let button = $(e.relatedTarget)
            let id = $(button).data('id')
            let nama_produk = $(button).data('nama_produk')
            let nama_supplier = $(button).data('nama_supplier')
            let harga_beli = $(button).data('harga_beli')
            let harga_jual = $(button).data('harga_jual')
            let stok = $(button).data('stok')
            let keterangan = $(button).data('keterangan')

            $(this).find('#nama_produk').val(nama_produk)
            $(this).find('#nama_supplier').val(nama_supplier)
            $(this).find('#harga_beli').val(harga_beli)
            $(this).find('#harga_jual').val(harga_jual)
            $(this).find('#stok').val(stok)
            $(this).find('#keterangan').val(keterangan)


            $('.form-edit').attr('action', `/produktitipan/${id}`)
        })
    })
</script>
@endpush