<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $title='welcome to SLRM';
        return view('pages.index', compact('title'));
    }
    public function hire(){
        return view('pages.hire');
    }
    public function rent(){
        return view('pages.rent');
    }
    public function reg(){
        return view('pages.reg');
    }
    public function reg_data(Request $request){
        // $data=array();
        // $data['name']=$request->name;
        // $data['email']=$request->email;
        // // echo "<pre>";
        // // print_r($data);

        // $st=DB::table('tbltest')->insert($data);
        // if ($st) {
        //   $notification=array(
        //      'messege'=>'data added successful',
        //       'alert-type'=>'success'
        //   );
        //   return Redirect()->back()->with($notification);
        //     # code...
        // }else{ 
        //     echo "oops not working";
        // }
            
        $post=new Post;
        $post->name=$request->name;
        $post->email=$request->email;
        $post->save();
        if ($post->save()) {
              $notification=array(
                  'messege'=>'data added successfully',
                  'alert-type'=>'success'
                 );
              return Redirect()->back()->with($notification);
                # code...
            }else{ 
                echo "oops not working";
            }

        }
        public function register(){
            return view('pages.register');
        }
        public function login(){
            return view('auth.login');
        }   
    
        public function hires(){
            return view('usersPages.hires');

        }  

        public function owners(){
            return view('usersPages.owners');
 
       }  
       
       
}
