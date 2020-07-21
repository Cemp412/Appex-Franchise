<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Franchise;
use App\Student;
use App\User;
use Auth;
use DB;

class FeeController extends Controller
{
    public function feeTable(){

    	$datas=Student::where('franchise_name',Auth::user()->name)->orderBy('id','desc')->get();
    	// $datas=DB::table('students')->get();
    	// echo $datas;

    	return view('fees.feeTable',compact('datas'));
    }

    public function addFee($id){

    	$data=Student::where('id',$id)->first();
    	// echo $data;

    	return view('fees.addFee',compact('data'));
    }

    public function storedata(Request $request){

    	$obj=new Fee;
    	$obj->regno=$request->regno;
    	$obj->submitted_fee=$request->submitted_fee;
    	$obj->payment_method=$request->payment_method;
    	$obj->payment_remark=$request->payment_remark;
    	$obj->course_fee=$request->course_fee;
    	$obj->franchise_name=$request->franchise_name;

    	$is_saved=$obj->save();

    	Student::where('regno',$request->regno)->increment('submitted_fee',$request->submitted_fee);

    	if($is_saved){

    		//  session()->flash("message","Fees added");
    		// return redirect('feeTable')->with('message','Fees Successfuly Submitteed!');
            return back()->with('success', 'Fees Successfuly submitted!');
    	}

    }

    public function showFee(){

    	$shows=DB::table('students')->get();

    	return view('fees.showFees',compact('shows'));
    }

    public function deleteFees($id){

       Fee::where('id', $id)->delete();
        return back()->with('success','Successfuly deleted!');
    }
}
