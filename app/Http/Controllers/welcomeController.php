<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Type;
use App\Category;

class welcomeController extends Controller
{
    
    public function index(){
        $publishedTypeProducts=Event::where('typeId','>',0)
        ->where('status',0)
        ->get();
        dd($publishedTypeProducts);
        return view('frontEnd.home.homeContent',['publishedTypeProducts'=>$publishedTypeProducts]);

    }

    public function event($id){
    	$publishedCategoryProducts=Event::where('categoryId',$id)
    	->where('status',0)
    	->get();
        $categoryByid=Category::where('id',$id)
        ->where('status',0)
        ->first();
    	return view('frontEnd.category.event.avilbleEvent',['publishedCategoryProducts'=>$publishedCategoryProducts,'categoryByid'=>$categoryByid]);

    }
    public function eventDetiles($id){
        $eventById= Event::where('id', $id)
        ->first();
        return view('frontEnd.event.eventContent',['eventById'=>$eventById]);

    }


}
