<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function payment(){
        return view('payment');
    }

    public function shipment(){
        return view('shipment');
    }
    public function employee(){
        return view('employee');
    }
    public function vehicle(){
        return view('vehicle');
    }

    public function dashboardProfile(){
        return view('dashboard-profile');
    }

    public function addShipment(){
        return view('add-shipment');
    }
    public function addDriver(){
        return view('add-vehicle');
    }
    public function addEmployee(){
        return view('add-employee');
    }
    public function addPayment(){
        return view('add-payment');
    }
    public function dashboardAdmin(){
        return view('dashboard-admin');
    }

}
