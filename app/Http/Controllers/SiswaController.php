<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        //search data
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('nama_depan', 'LIKE', '%'. $request->cari.'%')->paginate(5);
        }else{
            $data_siswa = \App\Siswa::orderby('id','desc')->paginate(10);
        }   
        return view('siswa.index', compact('data_siswa'));
        //menampilkan data dari database
        /* $products = \App\Product::orderBy('id', 'desc')->paginate(5);
        return view('admin.product.index', compact('products')); *//* where('name','baju 5')
                                    ->orderBy('stock', 'desc')
                                    ->get(); */
        
    }
    public function create(Request $request)
    {   
        //menambahkan data 
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }
    public function update(Request $request,$id)
    {
        /* $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Data berhasil di update'); */

        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)         
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil di delete');
    }
}
