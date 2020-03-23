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
                                <form action="/pasien/{{$pasien->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div>
                                    <label for="nama">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="nama"
                                        aria-describedby="emailHelp" placeholder="Nama" required
                                        value="{{$pasien->nama}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="janis_kellamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="janis_kellamin" >
                                        <option value="L" @if($pasien->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                        <option value="P" @if($pasien->jenis_kelamin == 'P') selected @endif>Perempuan</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" required
                                        value="{{$pasien->tanggal_lahir}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input name="alamat" type="alamat" class="form-control" id="alamat"
                                        aria-describedby="alamat" placeholder="Alamat" required
                                        value="{{$pasien->alamat}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="no_telp">No.Telp</label>
                                        <input name="no_telp" type="number" class="form-control"
                                        id="no_telp" placeholder="No.Telp" required value="{{$pasien->no_telp}}">
                                    </div>

                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <a href="/pasien">
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
        <a href="/poliklinik">
        <button type="button" class="btn btn-secondary">Close</button>
        </a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
@stop





@section('pasien')
            <h1>Edit Data pasien</h1>
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
            <div class='row'>
                <div class="col-12">

                <form action="/pasien/{{$pasien->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div>
                            <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama"
                                aria-describedby="emailHelp" placeholder="Nama" required
                                value="{{$pasien->nama}}">
                            </div>

                            <div class="form-group">
                                <label for="janis_kellamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="janis_kellamin" >
                                <option value="L" @if($pasien->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                <option value="P" @if($pasien->jenis_kelamin == 'P') selected @endif>Perempuan</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" required
                                value="{{$pasien->tanggal_lahir}}">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input name="alamat" type="alamat" class="form-control" id="alamat"
                                aria-describedby="alamat" placeholder="Alamat" required
                                value="{{$pasien->alamat}}">
                            </div>

                            <div class="form-group">
                                <label for="no_telp">No.Telp</label>
                                <input name="no_telp" type="number" class="form-control"
                                id="no_telp" placeholder="No.Telp" required value="{{$pasien->no_telp}}">
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="/pasien">
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

@endsection
