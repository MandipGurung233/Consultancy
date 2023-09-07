<?php

namespace App\Http\Controllers\Admin;

use App\Events\emailSend;
use App\Events\queryAnswer;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use File;

class blogController extends Controller
{
    
    public function blog(){
        $blogs = Blog::all();
        return view('admin.blog.blog',compact('blogs'));
    }

    public function blogCreate(){
        return view('admin.blog.blogCreate');
    }

    public function blogPublish(Request $request){

        
        $request->validate([
            'blogTitle' => ['required'],
            'blogImage' => ['required','image'],
            'blogCompose' => ['required']
        ],[
            'blogTitle.required' => 'Please enter the blog title',
            'blogCompose.required' => 'Please enter the content field'
        ]);

        $fileName = time().'_'.$request->blogImage->getClientOriginalName();
        $filePath = $request->blogImage->storeAs('/blogs',$fileName);
      
        
        $blog = new Blog();
        $blog->blogTitle = $request->blogTitle;
        $blog->blogImage = 'storage/'.$filePath;
        $blog->blogCompose = $request->blogCompose;
        $blog->save();
        return redirect()->route('blog')->with('status','Successfully published');

    }

    public function deleteBlog($id){
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        return redirect()->back()->with('status','Successfully deleted');
    }

    public function deleteBlogPermanent($id){
        $blogs = Blog::onlyTrashed()->findOrFail($id);
        File::delete(public_path($blogs->blogImage));
        $blogs->forceDelete();
        return redirect()->back()->with('status','Removed from Bin');
    }

    public function blogTrash(){
        $blogs = Blog::onlyTrashed()->get();
        return view('admin.blog.trash',compact('blogs'));
    }

    public function restoreBlog($id){
        $blogs = Blog::onlyTrashed()->findOrFail($id);
        $blogs->restore();
        return redirect()->back()->with('status','Successfully restored!');
    }

    public function editBlog($id){
        $blogs = Blog::findOrFail($id);
        return view('admin.blog.blogEdit',compact('blogs'));
    }

    public function blogUpdate(Request $request, $id){

        $blog = Blog::findOrFail($id);
        
        $request->validate([
            'blogTitle' => ['required'],
            'blogImage' => ['required','image'],
            'blogCompose' => ['required']
        ],[
            'blogTitle.required' => 'Please enter the blog title',
            'blogCompose.required' => 'Please enter the content field'
        ]);

        $fileName = time().'_'.$request->blogImage->getClientOriginalName();
        $filePath = $request->blogImage->storeAs('/blogs',$fileName);
        File::delete(public_path($blog->blogImage));
        $blog->blogImage = 'storage/'.$filePath;
      
        $blog->blogTitle = $request->blogTitle;
        $blog->blogCompose = $request->blogCompose;
        $blog->save();

        return redirect()->route('blog')->with('status','Successfully updated !');
    }

    public function viewBlog(){
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }

    public function blogDetails($id){
        $bloged = Blog::findOrFail($id);
        $blogView = $bloged->blogView;
        $blogViews = $blogView + 1;
        $bloged->blogView = $blogViews;
        $bloged->save();

        $blogs = Blog::findOrFail($id);
        return view('blogDetails',compact('blogs'));
    }

    public function blogLike($id){
        $blogs = Blog::findOrFail($id);
        $blogLike = $blogs->blogLike;
        $blogLikes = $blogLike + 1;
        $blogs->blogLike = $blogLikes;
        $blogs->save();
        return redirect()->route('viewBlog');
    }

    public function sendMail(){
        return view('admin.sendMail');
    }

    public function send_Mail(Request $request){
        $email = $request->email;
        $subject = $request->subject;
        $answer = $request->answer;
        event(new emailSend($email,$subject,$answer));
        return redirect()->back()->with('status','Successfully Mailed!');
    }
}