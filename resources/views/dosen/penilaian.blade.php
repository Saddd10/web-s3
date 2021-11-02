@extends('layouts.dosen_app')

@section('content')
<div class="card">
<h5 class="card-header">Ujian yang sedang berlangsung : </h5>
  <div class="card-body">
    <form>
        <div class="mb-3">
            <label for="inputNameMhs" class="form-label">Nama Lengkap</label>
            <select id="inputNameMhs" class="select2bs4 form-control ">
                <option>--Pilih Nama Mahasiswa--</option>
                <option>Mahasiswa 1</option>
                <option>Mahasiswa 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="inputNRP" class="form-label">NRP</label>
            <select id="inputNRPMhs" class="select2bs4 form-control ">
                <option>--Pilih NRP Mahasiswa--</option>
                <option>Mahasiswa 1</option>
                <option>Mahasiswa 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPromotor">Promotor</label>
            <select id="inputPromotor" class="select2bs4 form-control ">
                <option>--Pilih Promotor--</option>
                <option>DOsen 1</option>
                <option>Dosen 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputCopromotor">Co-Promotor</label>
            <select id="inputCopromotor" class="select2bs4 form-control ">
                <option>--Pilih Co-Promotor--</option>
                <option>DOsen 1</option>
                <option>Dosen 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPenguji1">Penguji 1</label>
            <select id="inputPenguji1" class="select2bs4 form-control ">
                <option>--Pilih Penguji 1--</option>
                <option>Dosen 1</option>
                <option>Dosen 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPenguji2">Penguji 2</label>
            <select id="inputPenguji2" class="select2bs4 form-control ">
                <option>--Pilih Penguji 2--</option>
                <option>Dosen 1</option>
                <option>Dosen 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="inputRevisi" class="form-label">Revisi</label>
            <input type="text" class="form-control" id="inputRevisi">
        </div>
        <div class="mb-3">
            <label for="inputNilai1" class="form-label">Nilai Penguasaan Metodologi Penelitian</label>
            <input type="text" class="form-control" id="inputNilai1">
        </div>
        <div class="mb-3">
            <label for="inputNilai2" class="form-label">Nilai Kemampuan merumuskan hasil penelitian disertasi secara sistematis (progress)</label>
            <input type="text" class="form-control" id="inputNilai2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection