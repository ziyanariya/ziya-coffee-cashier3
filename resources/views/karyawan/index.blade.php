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

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormKaryawan">
                <i class="fas fa-plus"></i> Tambah karyawan
            </button>
            <a href="{{ route('export-karyawan') }}" class="btn btn-success">
                <i class="fa fa-file-excel"></i> Export
            </a>
            @include('karyawan.data')
        </div>
    </div>
</section>
@endsection

@include('karyawan.form')
@include('karyawan.edit')

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
            let nip = $(button).data('nip')
            let nik = $(button).data('nik')
            let nama = $(button).data('nama')
            let jenis_kelamin = $(button).data('jenis_kelamin')
            let tempat_lahir = $(button).data('tempat_lahir')
            let tanggal_lahir = $(button).data('tanggal_lahir')
            let telepon = $(button).data('telepon')
            let agama = $(button).data('agama')
            let status_nikah = $(button).data('status_nikah')
            let alamat = $(button).data('alamat')
            let foto = $(button).data('foto')

            $(this).find('#nip').val(nip)
            $(this).find('#nik').val(nik)
            $(this).find('#nama').val(nama)
            $(this).find('#jenis_kelamin').val(jenis_kelamin)
            $(this).find('#tempat_lahir').val(tempat_lahir)
            $(this).find('#tanggal_lahir').val(tanggal_lahir)
            $(this).find('#telepon').val(telepon)
            $(this).find('#agama').val(agama)
            $(this).find('#status_nikah').val(status_nikah)
            $(this).find('#alamat').val(alamat)
            $(this).find('#foto').val(foto)

            $('.form-edit').attr('action', `/karyawan/${id}`)
        })
    })
</script>
@endpush