<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    //index untuk search 
    public function index(Request $request)
    {
        $search = $request->input('search');
        $data = User::where('nama', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('alamat', 'like', "%$search%")
                    ->orWhere('notlp', 'like', "%$search%")
                    ->get();

    return view('tampil.dashboard', compact('data'));
    }

    //view dashboard  
    public Function dashboard () 
    {
        return view('tampil.dashboard');
    }

    // view data
    public function viewdata ($id)
    {
        $data = User::find($id);

        return view('tampil.view', compact('data'));
    }

    //view create
    public Function create () 
    {
        return view('tampil.create');
    }

    public function updateview(Request $request)
{
    $id = $request->id;
    $user = user::find($id);

    if (!$user) {
        return redirect('/dashboard')->with('error', 'Data tidak ditemukan');
    }

    return view('tampil.update', compact('user'));
}
    
    public function view ()
    {
        $data=user::all();
    return view("tampil.dashboard",["data"=>$data]);
    }

    //untuk mengirimkan data ke db
    public function simpandata(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama'      => 'required',
            'email'     => 'required',
            'alamat'    => 'required',
            'tlp'       => 'required', 
            'foto'      => 'image|mimes:jpeg,png,jpg,gif|max:1024', // tambahkan validasi untuk foto
        ]);
 
        if ($validator->fails()) {
            session()->flash('gagal', 'Data berhasil Disimpan');
            return redirect('/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data=[
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notlp' => $request->tlp,
            // tambahkan kolom lainnya jika ada
        ];
        // Mengelola upload foto
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto'); // Menyimpan foto ke folder 'storage/app/public/foto'
            $data['foto'] = basename($fotoPath);
        }

        // Membuat record baru
        User::create($data);
        session()->flash('success', 'Data berhasil Disimpan');
        return redirect('/create');
    }


    //edit data atau update
    public function update(Request $request, $id)
    {
    $request->validate([
        'nama'   => 'required',
        'email'  => 'required',
        'alamat' => 'required',
        'tlp'    => 'required',
    ]);

    $user = user::find($id);

    if (!$user) {
        return redirect('/dashboard')->with('error', 'Data tidak ditemukan');
    }

    $user->update([
        'nama'   => $request->nama,
        'email'  => $request->email,
        'alamat' => $request->alamat,
        'notlp'  => $request->tlp,
        // tambahkan kolom lainnya jika ada
    ]);

    return redirect('/dashboard')->with('success', 'Data berhasil diperbarui');
    }

    // delete
    public function delete($id)
    {
        $user = user::find($id);
        if (!$user) {
            return redirect('/dashboard')->with('error', 'Data tidak ditemukan');
        }
        $user->delete();
        return redirect('/dashboard')->with('success', 'Data berhasil dihapus');
    }
}
