<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller
{
    public function index(){
    	$data['employees'] = Employee::all();
    	return view('index', $data);
    }
}
