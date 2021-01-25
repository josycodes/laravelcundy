<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  

   function __construct()
   {
       $this->middleware('auth',['except'=>['ViewAllBlogs','BlogDetail']]);
   }

   function blogPage(){
       return view('cundy.newposts');
   }
   function postblogDB(Request $request){

    if(!empty($request->file('blogimg'))){
        $filePath = $request->file('blogimg')->store('public/blog/img'); 
    }else{
        $filePath = " ";
    }
      
       $imgName = explode('/' , $filePath);
       
       $blog = new Blog;
       $blog->blog_title=$request->blogtitle;
       $blog->blog_post=$request->blogpost;
       $blog->image= end($imgName);
       if($blog->save()){
        return redirect()->route('newposts')->with('status', 'Blog Post has been Sucessfully Added');
       }
       
      
   }
   
   function ShowBlog(){
    $data = Blog::all();
    return view('cundy.allpost', ['allblogs'=>$data]);
   }
   
   function EditBlog($id){
    $data = Blog::find($id); 
    return view('cundy.editpost', ['postedit'=>$data]);    
   }
   
   function UpdateBlog(Request $req){
    if(!empty($req->file('blogimg'))){
        $filePath = $req->file('blogimg')->store('public/blog/img');
        $imgName = end(explode('/' , $filePath));
    }else{
        $imgName = " ";
    }
    
       $data = Blog::find($req->id);
       $data -> blog_title = $req->blogtitle;
       $data -> blog_post = $req->blogpost;
       $data -> image = $imgName;
       
       if($data->save()){
           return redirect()->route('allpost')->with('status', 'Blog Post has been Successfully Edited');
       }
   
   }
   
   function DeleteBlog($id){
        Blog::find($id)->delete();
        return redirect()->route('allpost')->with('status', 'Blog Post Deleted!!!!');
   }
   function ViewAllBlogs(){
    $data = Blog::all();
    return view('cundysmithpub.blog_grid', ['allblogs'=>$data]);
   }

   function BlogDetail($id){
    $data = Blog::find($id); 
    $data1 = Blog::all();
    return view('cundysmithpub.blog_detail', ['posteddet'=>$data],['allPosts'=>$data1]);    
   }
  
   
}
