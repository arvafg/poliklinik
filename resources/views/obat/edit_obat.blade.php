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

                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Data</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/obat/{{$obat->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="nama">Nama Obat</label>
                                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp"
                                        placeholder="Nama" required value="{{$obat->nama}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input name="harga" type="number" class="form-control"
                                        id="harga" placeholder="Harga" required value="{{$pasien->harga}}">
                                    </div>


                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <a href="/obat">
                                    <button type="button" class="btn btn-secondary">Close</button>
                                    </a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </div>
                            </div>
                            </div>

                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <a href="/obat">
        <button type="button" class="btn btn-secondary">Close</button>
        </a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
@stop