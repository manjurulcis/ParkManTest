<?php

namespace App\Http\Controllers;

use App\Garage;
use App\Owner;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function index()
    {
        $garages = Garage::with('Owner')->get();
        return view("welcome");
        //return response()->json(array('result'=>'true','garages'=>$garages));
    }

    /**
     * Show all the garage list with onwer information.
     * Parameter is optional, if garagename is provided, a filter list of garages will show matching that garage name.
     *
     * @param  string  $garagename
     * @return Response(Json)
     */
    public function searchbygarage($garagename="")
    {


        if(isset($garagename) && $garagename == ""){
            $garages = Garage::with('Owner')->get();
            return response()->json(array('result'=>'true','garages'=>$garages));
        }

        //get all the garage by matching the provided garage name
        $garages = Garage::with('Owner')->where('garage_name','LIKE','%'.$garagename.'%')->get();
        return response()->json(array('result'=>'true','garages'=>$garages));

    }


    /**
     * Show all garage list by provided country. For testing purpose 'Finland' is default value for it.
     *
     * @param  string  $country
     * @return Response
     */
    public function searchbycountry($country="Finland")
    {
        //Check if parameter is supplied or not
        if(isset($country) && $country == ""){
            $garages = Garage::with('Owner')->get();
            return response()->json(array('result'=>'true','garages'=>$garages));
        }

        //get all the garage by matching the provided country name
        $garages = Garage::with('Owner')->where('country','LIKE','%'.$country.'%')->get();
        return response()->json(array('result'=>'true','garages'=>$garages));

    }


    /**
     * Show a garage list for a specific owner name or by matching owner name.
     *
     * @param  string  $ownername
     * @return Response
     */
    public function searchbyowner($ownername="")
    {

        //$garages = Garage::with('Owner')->where('country','LIKE','%'.$country.'%')->get();
        if(isset($ownername) && $ownername == ""){
            $owners = Owner::with('Garage')->get();
            return response()->json(array('result'=>'true','owners'=>$owners));
        }
        $owners = Owner::with('Garage')->where('owner_name','LIKE','%'.$ownername.'%')->orWhere('contact_email','LIKE','%'.$ownername.'%')->get();

        return response()->json(array('result'=>'true','owners'=>$owners));

    }

    /**
     * Show a garage list for a specific email address or by matching email.Default shows all owners
     *
     * @param  string  $email
     * @return Response
     */
    public function searchbyemail($email="")
    {

        if(isset($email) && $email == ""){
            $owners = Owner::with('Garage')->get();
            return response()->json(array('result'=>'true','owners'=>$owners));
        }
        $owners = Owner::with('Garage')->where('contact_email','LIKE','%'.$email.'%')->get();
        return response()->json(array('result'=>'true','owners'=>$owners));

    }


    /**
     * Show the profile for the given lat or lon. Default shows all garages
     *
     * @param  string  $latlon
     * @return Response
     */
    public function searchbylocation($latlon="")
    {
        //Check if parameter is supplied or not
        if(isset($country) && $country == ""){
            $garages = Garage::with('Owner')->get();
            return response()->json(array('result'=>'true','garages'=>$garages));
        }

        //get all the garage by matching the provided lat or lon
        $garages = Garage::with('Owner')->where('center_coordinate','LIKE','%'.$latlon.'%')->get();
        return response()->json(array('result'=>'true','garages'=>$garages));

    }
}