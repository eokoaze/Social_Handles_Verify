<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;




class VerificationController extends Controller
{ 
    //Add new Link/Handle for Verification
    public function add(Request $request){
        
        //Input validation
        $validated = $request->validate([
            'platform' => 'required',
            'handle' => 'required'
        ],
        [
            'platform.required' => 'Please select from the underlisted platforms',
        ]);

        //Insert Transaction data
        $data = array();
        $data['type'] = $request->platform;
        $data['handle'] = $request->handle;
        $data['created_at'] = now();
        
        DB::table('verification')->insert($data);        
        return Redirect()->back()->with('success','Data Updated!');
    }

    //View All Transactions.
    public function view(){
        $handles = DB::table('verification')->latest()->paginate(5);
 
         return view('admin', compact('handles'));
     }

     //Verify Link/Handle
     public function verify(Request $request){

         //Input validation
        $validated = $request->validate([
            'platform' => 'required',
            'handle' => 'required'
        ],
        [
            'platform.required' => 'Please select from the underlisted platforms',
            'handle.required' => 'Please enter the link/handle to verify'
        ]);
        //Assign values from post request to var.
        $platform = $request->platform;
        $handle = $request->handle;
        
        $result = DB::table('verification')
        ->where('handle', $handle)
        ->where('type',$platform)
        ->value('handle');
        
        if ($result){
            return view('resultok', compact('result'));
        }
        else {
            return view('resultbad', compact('handle'));
        }

    }
}
