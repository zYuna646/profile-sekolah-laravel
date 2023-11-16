@extends('template-dashboard')

@section('content')

<div class="card shadow">
    <div class="card-body p-4">
        <div class="table-responsive">
            <h2 class="fw-bolder text-primary">Data Struktur Organisasi</h2>
            <a href="{{route('dashboard.kompetensi.create')}}" class="btn btn-success my-4"><i class="ti ti-plus"></i> Tambah Data</a>
            <table class="table" id="tabel">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
    
@endsection