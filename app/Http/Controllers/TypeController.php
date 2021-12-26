<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    public function creatType(){
    	return view('admin.type.creatType');
    }
    public function storeType(Request $request){
    	//return $request->all();
    	$type= new Type();
    	$type->typeName=$request->typeName;
		$type->typeDescription=$request->typeDescription;
    	$type->status=$request->status;
    	$type->save();
    	return redirect('/type/add')->with('message','Type Info Save Succesfully');

    }
    public function manageType(){
    	$types= Type::all();
    	return view('admin.type.manageType',['types'=>$types]);
    }
    public function editType($id){
        $typeById=Type::where('id',$id)->first();
        return view('admin.type.editType',['typeById'=>$typeById]);
    }
    public function updateType(Request $request){
        //return $request->all();
        $type= Type::find($request->typeId);
        $type->typeName=$request->typeName;
        $type->typeDescription=$request->typeDescription;
        $type->status=$request->status;
        $type->save();
        return redirect('/type/manage')->with('message','Type Info Update Succesfully');

    }
    public function deleteType($id){
        $type=Type::find($id);
        $type->delete();
        return redirect('/type/manage')->with('message','Delete Type Succesfully');

    }
}
