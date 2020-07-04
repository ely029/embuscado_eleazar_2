<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\job_order;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {







            
    // get the data from the jobs.csv
    $address = public_path('files/jobs.csv');
    Excel::load($address, function($reader) {
        $results = $reader->get();
        for($e = 1;$e<=34;$e++){

         if(isset($results[$e])){
              
              //insert data to table 'job_application'
              $insert = array(
                'title' => $results[$e]['job_title'],
                'location' => $results[$e]['location'],
                'description' => $results[$e]['job_description'],
                'applicants' => $results[$e]['applicants'],
                'date' => $results[$e]['date']);
              job_order::insert($insert);     
         }     

        }
        
    });
     
         
    
    //getting the data from the database.
    $results = DB::select( DB::raw("SELECT * FROM job_order") );

        return view('index', ['data' => $results]);
    }
}
