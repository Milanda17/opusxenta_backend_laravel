<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
   public function create(Request $request){

       $employee = new Employee();

       $employee->firstName = $request->input('firstName');
       $employee->lastName = $request->input('lastName');
       $employee->userName = $request->input('userName');
       $employee->state = $request->input('state');
       $employee->teleNo = $request->input('teleNo');

       $employee->save();

       return response()->json(['message'=> $employee],201);
   }

   public function getAll(){
       $employees = DB::table('employees')->get();
       return response()->json(['message'=> $employees],201);
   }
    public function getEmployee($id){
        $employee = DB::table('employees')->find($id);
        return response()->json(['message'=> $employee],201);
    }

    public function update(Request $request, $id){

       $employee = Employee::find($id);
       if(!$employee){
           return response()->json(['message'=>"Employee not found"],404);
       }
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->userName = $request->input('userName');
        $employee->state = $request->input('state');
        $employee->teleNo = $request->input('teleNo');

        $employee->save();

        return response()->json(['message'=> $employee],201);
    }


    public function delete($id){

       $employee = Employee::find($id);

       if(!$employee){
           return response()->json(['message'=>"Employee not found"],404);
       }
       $employee -> delete();
        return response()->json(['message'=>"Employee deleted successfully"],201);
    }

}
