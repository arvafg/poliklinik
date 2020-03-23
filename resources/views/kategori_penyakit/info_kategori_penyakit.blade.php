@extends('layouts.master')

@section('konten')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="row-md-12">

                        @if(session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{session('sukses')}}
                        </div>
                        @endif

                        @if(session('delete'))
                        <div class="alert alert-danger " role="alert">
                            {{session('delete')}}
                        </div>
                        @endif

                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Kategori Penyakit</h3>
                                <div class="right">
                                    <button type="button" class="btn-lg" data-toggle="modal" data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle btn-lg" title="Tambah Data"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($data_kategori_penyakit as $kategori_penyakit)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$kategori_penyakit->nama}}</td>

                                            <td><a href="/kategori_penyakit/{{$kategori_penyakit->id}}/edit_kategori_penyakit" class='btn btn-warning btn-sm' >Edit</a>
                                            <a href="/kategori_penyakit/{{$kategori_penyakit->id}}/delete" class='btn btn-danger btn-sm'
                                            onclick="return confirm('Are You Sure ?')" ><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"/>
                                            <path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"/>
                                            </svg></a>
                                        </td>
                                        </tr>
                                        @php
                                            $no++;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- MODAL INPUT DATA --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data kategori_penyakit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/kategori_penyakit/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="nama" class="form-control" id="nama"
                    aria-describedby="emailHelp" placeholder="Nama" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
            </form>
@stop


