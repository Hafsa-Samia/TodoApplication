<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Todo;

class TodoController extends Controller
{
	public function index()
	{
		$all = Todo::all();

		return $all;
	}
    

    public function store(Request $data)
    {
    	$t = new Todo();
    	$t['event_name'] = $data->event_name;
    	$t->user_id = $data->user_id;
    	$t->time = $data->time;
    	if($t->save())
    	{
    		return 'Saved Successfully';
    	}
    	else
    	{
    		return 'ERROR';
    	}

    }

    public function edit(Request $data)
    {

    	// $t = Todo::where('id', $data->todo_id)->first();

    	try{
    		$t = Todo::findOrFail($data->todo_id);
    	}
    	catch(\Exception $e)
    	{
    		return 'Ei namer ID nai!!!';
    	}


    	if(isset($data->event_name))
    	{
    		$t->event_name = $data->event_name;
    	}

    	$t->user_id = $data->user_id;
    	$t->time = $data->time;

    	if($t->save())
    	{
    		return 'updated successfully';
    	}
    	else 
    	{
    		return 'error';
    	}



    	return $t;
    }

    public function deleted(Request $data)
    {

    	//return $data;
    	try
    	{
    		$t = Todo::findOrFail($data->todo_id);

    	}
    	catch(\Exception $e)
    	{
    		return 'this data not exist';
    	}


    	if($t->user_id == $data->user_id)
        {

    		Todo::destroy($data->todo_id);
    		return 'deleted';
        }
        else
        {
        	return 'no access';
        }
    
    }


}



//$t->destroy();



// fhskldmv

// switch (db2_field_scale(do {
// 	# code...
// } while (

// 	stats_dens_f(
// 		switch (dfr1s
// 			session_decode(fscanf(apd_get_active_symbols(ad), format))) {
// 			case 'value':
// 				# code...
// 				break;
			
// 			default:
// 				# code...
// 				break;
// 		}, dfr1, dfr2));, column)) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }