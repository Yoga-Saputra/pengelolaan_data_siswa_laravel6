@extends('layout.master')
@section('title','HOME')

@section('content')
<div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                
                    <div class="p-1">    
                            @if(session('sukses'))
                                <div class="alert alert-success text-center alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="fa fa-check-circle"></i>
                                    {{ session('sukses') }}
                                </div>
                            @endif
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel panel-heading">
                                <h3 class="panel-heading">Data Siswa</h3>
                                <div class="right panel-heading">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary  btn-md "  data-toggle="modal" data-target="#exampleModal">
                                        Tambah data siswa
                                    </button>  
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center panel-title">Id</th>
                                            <th class="text-center panel-title">Nama Depan</th>
                                            <th class="text-center panel-title">Nama Belakang</th>
                                            <th class="text-center panel-title">Jenis Kelamin</th>
                                            <th class="text-center panel-title">Agaman</th>
                                            <th class="text-center panel-title">Alamat</th>
                                            <th class="text-center panel-title">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($data_siswa as $siswa)
                                            <tr>
                                                <td class="text-center"> {{$siswa->id }} </td>
                                                <td class="text-center"> {{$siswa->nama_depan }} </td>
                                                <td class="text-center"> {{ $siswa->nama_belakang }} </td>
                                                <td class="text-center"> {{ $siswa->jenis_kelamin }} </td>
                                                <td class="text-center"> {{ $siswa->agama }} </td>
                                                <td class="text-center"> {{ $siswa->alamat }} </td>
                                                <td class="text-center">
                                                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                                                    <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach 
                                    </tbody>
                                </table>
                                {{ $data_siswa->links() }}
                            </div>
                        </div>
                        <!-- END TABLE HOVER -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title " id="exampleModalLabel">Tambah Data Siswa</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/siswa/create" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_depan">Nama Depan</label>
                                    <input type="text" class="form-control" id="nama_depan" name="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan">
                                </div>
                                <div class="form-group">
                                        <label for="nama_belakang">Nama Belakang</label>
                                        <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
                                </div>
                                <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama" aria-describedby="emailHelp" placeholder="Agama">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                </div>        
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection

