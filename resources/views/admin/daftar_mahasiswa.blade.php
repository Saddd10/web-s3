@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Mahasiswa S3</h1>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    Data berhasil diperbarui
</div>
@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div> -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telpon</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                    @foreach($data_mahasiswa as $mhs)
                    <tr>
                        <th>{{$mhs->id}}</th>
                        <th>{{$mhs->nama}}</th>
                        <th>{{$mhs->email}}</th>
                        <th>{{$mhs->nohp}}</th>
                        <th>{{$mhs->alamat}}</th>
                        <th><button href="/daftar_mhs/{$id}/edit" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Edit
                        </button></th>
                    </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Profil Mahasiswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1" value="{{$mhs->nama}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="e-mail" class="form-control" id="exampleFormControlInput1" value="{{$mhs->email}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">No. Telpon</label>
                                    <input type="nomerhp" class="form-control" id="exampleFormControlInput1" value="{{$mhs->nohp}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$mhs->alamat}}"></textarea>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary">Perbarui</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection