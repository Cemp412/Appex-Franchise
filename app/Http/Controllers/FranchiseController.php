<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Franchise;
use App\Student;
use App\User;
use Auth;
use DB;

class FranchiseController extends Controller
{
    public function add(){

    	// echo "string";

    	return view('add');
    }

    public function save(Request $request){

        $obj=new user;
       
        $obj->name=$request->franchise_name;
        $obj->email=$request->franchise_email;
        $obj->password=bcrypt($request->franchise_password);
        $obj->type=0;

        $obj->save();

    	$data=new Franchise;
        $data->user_id=$obj->id;
    	$data->franchise_name=$request->franchise_name;
    	$data->franchise_code=$request->franchise_code;
    	$data->franchise_password=$request->franchise_password;
    	$data->franchise_email=$request->franchise_email;
    	$data->contact_name=$request->contact_name;
    	$data->contact_number=$request->contact_number;
    	$data->address=$request->address;
    	$data->account_number=$request->account_number;
    	$data->ifsc_code=$request->ifsc_code;

    	$data->account_holder=$request->account_holder;
    	$data->bank_name=$request->bank_name;
    	
    	$data->save();

        
        
        


    	if($data){

    		return redirect('add')->with('good','Sucessfully submited!');
    	}

    }

    public function view(){

        $curds=Franchise::all();
        return view('view',compact('curds'));
    }

    public function display($id){

        $post=Franchise::find($id);
        return view('display',compact('post'));
    }

    public function edit($id){

        $get=Franchise::find($id);
        return view('edit',compact('get'));
    }

    public function update(Request $request){

        $error=Franchise::find($request->id);

        $error->franchise_name=$request->franchise_name;
        $error->franchise_code=$request->franchise_code;
        $error->franchise_password=$request->franchise_password;
        $error->franchise_email=$request->franchise_email;
        $error->contact_name=$request->contact_name;
        $error->contact_number=$request->contact_number;
        $error->address=$request->address;
        $error->account_number=$request->account_number;
        $error->ifsc_code=$request->ifsc_code;

        $error->account_holder=$request->account_holder;
        $error->bank_name=$request->bank_name;
        
        $updated=$error->update();

        User::where('id',$request->user_id)->update([

            'name'=>$request->franchise_name,
            'email'=>$request->franchise_email,
            'password'=>bcrypt($request->password),
        ]);

        if($updated){

            return redirect('view')->with('message','Sucessfully updated!');
        }
    }

    public function delete($id){

        $del=Franchise::find($id);


        $deleted=$del->delete();

        if($deleted){

            return redirect('view')->with('delete','Sucessfully Deleted');
        }
    }

     public function addCertificate(){

    $datas=Student::all();

    return view('certificate.addCertificate',compact('datas'));
   }

   public function editCertificate($id){

    $pass=Student::find($id);

    return view('certificate.editCertificate',compact('pass'));
    
   }

   public function saveCertificate(Request $request){

        if($request->hasfile('certificate'))
        {

            $file=$request->file('certificate');
            $filename='certificate'.time().'.'.$request->certificate->extension();
            $destination=storage_path('../public/upload/');
            $file->move($destination,$filename);
            $path="/".$filename;

            $obj=student::find($request->id);
            $obj->certificate=$filename;

            $updated=$obj->save();
        }
        return back()->with('success','Sucessfully submitted!');
   }

   public function viewCertificate(){

    $data=Student::where('student_email',Auth::user()->email)->first();

    

    // echo $data;
     return view('certificate.viewCertificate',compact('data'));
   }
}
