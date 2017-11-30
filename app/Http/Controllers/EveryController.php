<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EveryController extends Controller
{
    private $data = array(
        array(
            "id" => 1,
            "name" => "Kapil Dahal",
            "percent" => 55.11
        ),
        array(
            "id" => 2,
            "name" => "Abhilash Poudel",
            "percent" => 52.11
        ),
    );
    public function home($ajax="") {
        if($ajax=="ajax"){
            return view('home',["ajax"=>true]);
        }
        return view('home');
    }
    public function homeData() {
        return "This is a special text area where data comes from <b>Pichwada bata aako chij.</b>";
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function view($ajax="")
    {
        if($ajax=="ajax"){
            return view('view',["ajax"=>true,"data"=>$this->data]);
        }
        return view('view',["data"=>$this->data]);
    }

    public function viewData(){
        return response()->json($this->data);
    }
}
