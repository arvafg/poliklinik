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
                                <form action="/dokter/{{$dokter->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp"
                                        placeholder="Nama" required value="{{$dokter->nama}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="spesialis">Spesialis</label>
                                        <input name="spesialis" type="text" class="form-control" id="spesialis" aria-describedby="emailHelp"
                                        placeholder="spesialis" required value="{{$dokter->spesialis}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" >
                                        <option value="L" @if($dokter->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                        <option value="P" @if($dokter->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp"
                                        placeholder="alamat" required value="{{$dokter->alamat}}">
                                    </div>


                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <a href="/dokter">
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
        <a href="/dokter">
        <button type="button" class="btn btn-secondary">Close</button>
        </a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
@stop
