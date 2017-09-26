<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	$all = Customer::all();
    	return $all;
    }

    public function store(Request $data)
    { 
    	 $t = new Customer();

         $t->customer_name = $data->customer_name;
         $t->customer_id = $data->customer_id;
         $t->email = $data->email;
         $t->address = $data->address;
         $t->phone = $data->phone;
         if($t->save())
         {
         	return 'saved';
         }
         else 
         {
         	return 'Error';
         }

    }

    public function edit(Request $data)
    {
        try{
             $t = Customer::findOrFail($data->require_id);
         }
        catch(\Exception $e)
        {
            'This id Doesnot exist';
        }

        if(isset($data->customer_name))
        {
            $t->customer_name = $data->customer_name;
        }
        if(isset($data->customer_id))
        {
            $t->customer_id = $data->customer_id;
        }
        if(isset($data->email))
        {
            $t->email = $data->email;
        }
        if(isset($data->address))
        {
            $t->address = $data->address;
        }
        if(isset($data->phone))
        {
            $t->phone = $data->phone;
        }

        if($t->save())
        {
            return 'saved succesfully';
        }
        else
        {
            return 'something Wrong';
        }

    }

    public function delete()
    {
        try
        {
            $t = Customer::findOrFail($data->require_id);

        }
        catch(\Exception $e)
        {
            return 'this data not exist';
        }


        if($t->customer_id == $data->customer_id)
        {

            Todo::destroy($t->require_id);
            return 'Deleted';
        }
        else
        {
            return 'No access';
        }

    }
}
