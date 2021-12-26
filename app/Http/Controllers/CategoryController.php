<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function creatCategory(){
    	return view('admin.category.creatCategory');
    }
    public function storeCategory(Request $request){
    	//return $request->all();
    	$category= new Category();
    	$category->categoryName=$request->categoryName;
		$category->categoryDescription=$request->categoryDescription;
    	$category->status=$request->status;
    	$category->save();
    	return redirect('/category/add')->with('message','Category Info Save Succesfully');

    }
    public function manageCategory(){
    	$categories= Category::all();
    	return view('admin.category.manageCategory',['categories'=>$categories]);
    }
    public function editCategory($id){
        $categoyById=Category::where('id',$id)->first();
        return view('admin.category.editCategory',['categoyById'=>$categoyById]);
    }
    public function updateCategory(Request $request){
        //return $request->all();
        $category= Category::find($request->categoryId);
        $category->categoryName=$request->categoryName;
        $category->categoryDescription=$request->categoryDescription;
        $category->status=$request->status;
        $category->save();
        return redirect('/category/manage')->with('message','Category Info Update Succesfully');

    }
    public function deleteCategory($id){
        $categoy=Category::find($id);
        $categoy->delete();
        return redirect('/category/manage')->with('message','Delete Category Succesfully');

    }
}
