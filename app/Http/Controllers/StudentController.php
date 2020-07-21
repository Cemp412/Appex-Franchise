<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Franchise;
use DB;
use App\Fee;
use Auth;

class StudentController extends Controller
{
    public function studentform(){
    	// echo "string";

    	return view('Student.StudentForm');
    }

    public function saveStudent(Request $request){

    	$file=$request->file('image');
    	$filename='image'.time().'.'.$request->image->extension();
    	$destination=storage_path('../public/upload');
    	$file->move($destination,$filename);
    	$path="/".$filename;

        $obj=new User;
        $obj->name=$request->student_name;
        $obj->email=$request->student_email;
        $obj->password=bcrypt($request->student_password);
        $obj->type=2;
        $obj->save();

    	$data=new Student;
        $data->user_id=$obj->id;
    	$data->student_name=$request->student_name;
    	$data->father_name=$request->father_name;
    	$data->dob=$request->dob;
    	$data->course=$request->course;
    	$data->contact_number=$request->contact_number;
    	$data->student_email=$request->student_email;
    	$data->student_password=$request->student_password;
    	$data->course_fee=$request->course_fee;
    	$data->submitted_fee=$request->submitted_fee;
    	$data->payment_remark=$request->payment_remark;
        $data->payment_method=$request->payment_method;
    	$data->registration_date=$request->registration_date;
    	$data->image=$path;

        $data->franchise_name=$request->franchise_name;
        $is_saved=$data->save();

    	$data->save();

        if($is_saved){

            $num_padded=sprintf("%04s",$data->id);
            DB::table('students')
            ->where('id',$data->id)
            ->update(['regno'=>"Ape2020".$num_padded]);

            $reg=new fee;
            $reg->regno="Ape2020".$num_padded;
            $reg->course_fee=$request->course_fee;
            $reg->submitted_fee=$request->submitted_fee;
            $reg->payment_method=$request->payment_method;
            $reg->payment_remark=$request->payment_remark;
            $reg->franchise_name=$request->franchise_name;
            $reg->save();

            // return back()->with('success',1);
        }

        

        if($data){

            // return redirect('addStudent')->with('message','Succesfully Submited!');

            return redirect('addStudent')->with('success', 'Submited Succesfully!');
        }
    }

    public function viewStudent(){

        $curds=Student::where('franchise_name', Auth::user()->name)->orderBy('id', 'desc')->get();
        return view('Student.viewStudent',compact('curds'));
    }

    public function displayStudent($id){

        $post=Student::find($id);

        return view('Student.displayStudent',compact('post'));
    }

    public function allStudent(){

         $datas=DB::table('students')->get();

         return view('Student.showAll',compact('datas'));
    }

    public function editStudent($id){

        $get=Student::find($id);
        return view('Student.updateStudent',compact('get'));

    }

    public function upadteStudent(Request $request){

         if($request->hasFile('image'))
            { 
                $file=$request->file('image');
        $filename='image'.time().'.'.$request->image->extension();
        $destination=storage_path('../public/upload');
        $file->move($destination,$filename);
        $path="/".$filename; 

        $error=Student::find($request->id);

        $error->student_name=$request->student_name;
        $error->father_name=$request->father_name;
        $error->dob=$request->dob;
        $error->course=$request->course;
        $error->contact_number=$request->contact_number;
        $error->student_email=$request->student_email;
        $error->student_password=$request->student_password;
        $error->course_fee=$request->course_fee;
        $error->submitted_fee=$request->submitted_fee;
        $error->payment_remark=$request->payment_remark;
        $error->payment_method=$request->payment_method;
        $error->registration_date=$request->registration_date;
        $error->image=$path;

        $updated=$error->update();

            User::where('id',$request->user_id)->update([

                'name'=>$request->student_name,
                'email'=>$request->student_email,
                'password'=>bcrypt($request->student_password),

            ]);

            Fee::where('regno',$request->regno)->update([

                'submitted_fee'=>$request->submitted_fee,
                'payment_method'=>$request->payment_method,
                'payment_remark'=>$request->payment_remark,
                'course_fee'=>$request->course_fee,

            ]);

        }
        else
        {
        $error=Student::find($request->id);

        $error->student_name=$request->student_name;
        $error->father_name=$request->father_name;
        $error->dob=$request->dob;
        $error->course=$request->course;
        $error->contact_number=$request->contact_number;
        $error->student_email=$request->student_email;
        $error->student_password=$request->student_password;
        $error->course_fee=$request->course_fee;
        $error->submitted_fee=$request->submitted_fee;
        $error->payment_remark=$request->payment_remark;
        $error->payment_method=$request->payment_method;
        $error->registration_date=$request->registration_date;

        $updated=$error->update();

            User::where('id',$request->user_id)->update([

                'name'=>$request->student_name,
                'email'=>$request->student_email,
                'password'=>bcrypt($request->student_password),

            ]);

            Fee::where('regno',$request->regno)->update([

                'submitted_fee'=>$request->submitted_fee,
                'payment_method'=>$request->payment_method,
                'payment_remark'=>$request->payment_remark,
                'course_fee'=>$request->course_fee,

            ]);

        }

        

        if($updated){
            return redirect('viewStudent')->with('success','Succesfully Updated!');
        }
    }

   public function deleteStudent($id){

        $method=Student::find($id);
        $deleted=$method->delete();

        if($deleted){

            return redirect('viewStudent')->with('success','Succesfully Deleted!');
        }
   }

   public function studentProfile(){

        $profile=Student::where('student_email',Auth::user()->email)->first();

        return view('Student.studentProfile',compact('profile'));
   }

  
    
}
