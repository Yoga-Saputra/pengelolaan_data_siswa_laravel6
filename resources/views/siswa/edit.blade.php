@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-heading">
                    <div class="panel-heading">
                        <h1 class="panel-title">Edit Data</h1>
                        {{-- alert sehabis sukses setelah berhasil input data --}}
                        @if(session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{ session('sukses') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                    <form action="/siswa/{{$siswa->id}}/update" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="nama_depan">Nama Depan</label>
                                            <input type="text" class="form-control" value=" {{ $siswa->nama_depan }} " id="nama_depan" name="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan">
                                        </div>
                                        <div class="form-group">
                                                <label for="nama_belakang">Nama Belakang</label>
                                                <input type="text" class="form-control" value="{{ $siswa->nama_belakang }}" id="nama_belakang" name="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                                    <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki' ) selected @endif>Laki-Laki</option>
                                                    <option value="Perempuan"@if($siswa->jenis_kelamin == 'Perempuan' ) selected @endif>Perempuan</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" id="agama" value="{{ $siswa->agama }}" name="agama" aria-describedby="emailHelp" placeholder="Agama">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $siswa->alamat }}</textarea>
                                        </div>        
                                        <button type="submit" class="btn btn-warning float-right">Update</button>
                                    </form>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
