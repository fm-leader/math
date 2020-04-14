<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitewebController extends Controller
{
    //





    public function accueil_site()
    {



        return view('welcome',compact('modeles'));
    }



    public function contact()
    {


        return view('contacts',compact('modeles'));
    }


    public function presentation()
    {


        return view('presentation',compact('modeles'));
    }

    public function formations()
    {


        return view('formations',compact('modeles'));
    }




}
