@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <div class="table-responsive">
                <h2 class="fw-bolder text-primary">Data Kompetensi Keahlian</h2>
                <a href="{{ route('dashboard.kompetensi.create') }}" class="btn btn-success my-4"><i class="ti ti-plus"></i>
                    Tambah Data</a>
                <table class="table table-bordered" id="tabel">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Kompetensi</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value => $item)
                            <tr class="my-auto">
                                <td scope="row">{{ $value + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td><img src="{{ asset('storage/' . $item->foto_kompetensi) }}" style="width:5rem"
                                        alt=""></td>
                                <td>
                                    <div class="d-flex gap-2 h-100">
                                        <div class="col-auto">
                                            <a href="{{route('dashboard.kompetensi.show', $item->id)}}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Detail"><i class="ti ti-eye fw-bolder"></i></a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('dashboard.kompetensi.edit', $item->id)}}" class="btn btn-warning btn-sm"><i class="ti ti-edit fw-bolder"></i></a>
                                        </div>
                                        <div class="col-auto">
                                            <form action="{{ route('dashboard.kompetensi.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm"><i class="ti ti-trash fw-bolder"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
