<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use App\Models\Latest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use File;

class AdminController extends Controller
{
    //
    public function login(LoginRequest $request){
        $admin = Admin::all()->first();
        if  ( $request->email != $admin->email && !Hash::check($request->password,$admin->password) ) 
        {
            return redirect()->back()->with('status','Both email and password is invalid!');
        }elseif($request->email != $admin->email)
        {
            return redirect()->back()->with('status','Invalid Email !');

        }elseif (!Hash::check($request->password,$admin->password))
        {
            return redirect()->back()->with('status','Invalid password');
        }else{
            $request->session()->put('admin',$admin);
            $name = Session::get('admin')['name'];
            return view('admin.dashboard',compact('name'));
           
        }
    }

    public function dashboard(){
           
            return view('admin.dashboard');
    }

    public function news(){
        $latests = Latest::all();
        return view('admin.new.new',compact('latests'));
    }

    public function newsCreate(){
        return view('admin.new.create');
    }

    public function newsPublish(Request $request){
        $request->validate([
            'title' => ['required'],
            'image' => ['required','image'],
            'description' => ['required']
        ],[
            'title.required' => 'Please enter the title field',
            'description.required' => 'Please enter the description field'
        ]);

        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('/news',$fileName);
      
        $latest = new Latest();
        $latest->title = $request->title;
        $latest->image = 'storage/'.$filePath;
        $latest->description = $request->description;
        $latest->save();
        return redirect()->route('news')->with('status','Successfully published');
    }

    public function deleteNews($id){
        $latest = Latest::findOrFail($id);
        $latest->delete();
        return redirect()->back()->with('status','Successfully deleted');
    }

    public function deleteNewsPermanent($id){
        $latest = Latest::onlyTrashed()->findOrFail($id);
        File::delete(public_path($latest->image));
        $latest->forceDelete();
        return redirect()->back()->with('status','Removed from Bin');
    }

    public function newsTrash(){
        $latests = Latest::onlyTrashed()->get();
        return view('admin.new.trash',compact('latests'));
    }

    public function restoreNews($id){
        $latest = Latest::onlyTrashed()->findOrFail($id);
        $latest->restore();
        return redirect()->back()->with('status','Successfully restored!');
    }

    
    public function editNews($id){
        $latest = Latest::findOrFail($id);
        return view('admin.new.edit',compact('latest'));
    }

    public function newsUpdate(Request $request, $id){

        $latest = Latest::findOrFail($id);
        
        $request->validate([
            'title' => ['required'],
            'image' => ['required','image'],
            'description' => ['required']
        ],[
            'title.required' => 'Please enter the title field',
            'description.required' => 'Please enter the description field'
        ]);

        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('/news',$fileName);
        File::delete(public_path($latest->image));
        $latest->image = 'storage/'.$filePath;
      
        $latest->title = $request->title;
        $latest->description = $request->description;
        $latest->save();
        return redirect()->route('news')->with('status','Successfully updated !');
    }
}
