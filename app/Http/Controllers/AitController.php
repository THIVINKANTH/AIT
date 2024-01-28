<?php

namespace App\Http\Controllers;

use App\Models\AitModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AitController extends Controller
{
    public function insert_form()
    {
        return view('insert_form');
    }

    public function fileupload($file,$destinationPath,$dir)
    {
        $file->move($destinationPath,$file->getClientOriginalName());
        return asset('public/'.$dir.'/'.$file->getClientOriginalName());
    }
    public function insert(Request $request)
    {
        $photo = $request->file('photo');

        $photo = $this->fileupload($photo,public_path('/photo'),'photo');

        $list = DB::table('aittable')->insert([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'photo' => $photo

        ]);
        return redirect('/list');
    }

    public function list()
    {
        $list = AitModel::all();
        return view('list',compact('list'));
    }

    public function edit($id)
    {
        $edits = AitModel::find($id);
        return view('update',compact('edits'));
    }
    public function update(Request $request,$id)
    {
        $photo = $request->file('photo');
        $photo = $this->fileupload($photo,public_path('/photo'),'photo');

        $name = $request->input('uname');
        $password = $request->input('upassword');
        $email = $request->input('uemail');
        $photos = $photo;

        DB::update('update aittable set name=?,password=?,email=?,photo=? where id=?',[$name,$password,$email,$photos,$id]);
        return redirect('list')->with('message','updated');
    }

    public function delete($id)
    {
        DB::delete('delete from aittable where id=?',[$id]);
        return redirect('list')->with('message','deleted');
    }
}
