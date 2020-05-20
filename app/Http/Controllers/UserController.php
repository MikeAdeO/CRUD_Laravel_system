<?php

namespace App\Http\Controllers;

use App\PatientUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
      $users = PatientUser::all();
    return view('welcome', [
       'users'=>$users
    ]);
   }

   public function create(){
      return view('add-user');
     }

     public function store(Request $request){
      PatientUser::create($request->all());
         return redirect('/');
     }

     public function delete($id){
        $user = PatientUser::find($id);
        $user->delete();
        return back();
     }

     public function edit($id){
      $user = PatientUser::find($id);
      return view('edit-user',[
         'user'=>$user
      ]);
     }

     public function update(Request $request, $id){
      $user = PatientUser::find($id);

      $user->update($request->all());
      return redirect('/');
      
     }
}
