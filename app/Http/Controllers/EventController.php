<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Type;
use App\Event;
use DB;

class EventController extends Controller
{
    public function creatEvent(){
		$categories=Category::where('status',0)->get();
		$types=Type::where('status',0)->get();
		return view('admin.event.creatEvent',['categories'=>$categories,'types'=>$types]);
	}
	public function storeEvent(Request $request){
		 $this-> validate($request, [
			'eventName'=>'required',
			'eventDate'=>'required',
			'eventLocation'=>'required',
			'eventImage'=>'required',
			'status'=>'required',
		]);
		 $eventImage=$request->file('eventImage');
		 $name=$eventImage->getClientOriginalName();
		 $uploadPath='eventImage/';
		 $eventImage->move($uploadPath,$name);
		 $imageUrl=$uploadPath.$name;
		 $this->saveEventInfo($request,$imageUrl);
		return redirect('/event/add')->with('message','Event Info Save Succesfully');
	}
	protected function saveEventInfo($request,$imageUrl){
		$event=new Event();
		$event->eventName=$request->eventName;
		$event->categoryId=$request->categoryId;
		$event->typeId=$request->typeId;
		$event->eventDate=$request->eventDate;
		$event->eventLocation=$request->eventLocation;
		$event->eventShortDescription=$request->eventShortDescription;
		$event->eventDescription=$request->eventDescription;
		$event->eventImage=$imageUrl;
		$event->status=$request->status;
		$event->save();
	}
	public function manageEvent(){
		$events=DB::table('events')
			->join('categories', 'categories.id', '=', 'events.categoryId')
			->join('types', 'types.id', '=', 'events.typeId')
			->select('events.*','categories.categoryName', 'types.typeName')
			->get();
		 return view('admin.event.manageEvent',['events'=>$events]);
	}
	public function viewEvent($id){
		$eventByid=DB::table('events')
			->join('categories', 'categories.id', '=', 'events.categoryId')
			->join('types', 'types.id', '=', 'events.typeId')
			->select('events.*','categories.categoryName', 'types.typeName')
			->where('events.id',$id)
			->first();
			// echo '<pre>';
			// print_r($products);
			// exit();
		return view('admin.event.viewEvent',['eventByid'=>$eventByid]);
	}
	public function editEvent($id){
		$categories=Category::where('status',0)->get();
		$types=Type::where('status',0)->get();
        $eventByid=Event::where('id',$id)->first();
        return view('admin.event.editEvent',['eventByid'=>$eventByid,'categories'=>$categories,'types'=>$types]);
    }
    public function updateEvent(Request $request){
    	$imageUrl=$this->imageExistStatus($request);
    	$event= Event::find($request->eventId);
        $event->eventName=$request->eventName;
		$event->categoryId=$request->categoryId;
		$event->typeId=$request->typeId;
		$event->eventDate=$request->eventDate;
		$event->eventLocation=$request->eventLocation;
		$event->eventShortDescription=$request->eventShortDescription;
		$event->eventDescription=$request->eventDescription;
		$event->eventImage=$imageUrl;
		$event->status=$request->status;
		$event->save();
        return redirect('/event/manage')->with('message','Event Info Update Succesfully');

    }
    private function imageExistStatus($request){
    	$eventByid=Event::where('id',$request->eventId)->first();
    	$eventImage=$request->file('eventImage');
    	if ($eventImage) {
    		unlink($eventByid->eventImage);
    		$name=$eventImage->getClientOriginalName();
		 	$uploadPath='eventImage/';
		 	$eventImage->move($uploadPath,$name);
		 	$imageUrl=$uploadPath.$name;
    	
    	}else{
    		$imageUrl=$eventByid->eventImage;
    	}
    	return $imageUrl;

    }
    public function deleteEvent($id){
        $event=Event::find($id);
        $event->delete();
        return redirect('/event/manage')->with('message','Delete Event Succesfully');

    }
}
