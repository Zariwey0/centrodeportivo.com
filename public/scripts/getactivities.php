<?php

use App\Activity;
//$activities = Activity::all();
$activities = DB::table('activities')->pluck('id', 'name');

return Response::json(array('activities' => $activities));
	    //$data = $request->all(); // This will get all the request data.
//dd(Response::json(array('activities' => $activities)));
//dd($activities); // This will dump and die

?>