<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 7/26/2018
 * Time: 8:20 AM
 */

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function getIndex(){

        # process variable data and params
        # talk to the model
        # recieve from the model
        # compile or process data from the model if needed
        # pass that data to the correct view

        return view('pages.welcome');

    }
     public function getAbout(){
         return view('pages/about');   //pages.about or pages/about :=> same



    }
     public function getContact(){
         return view('pages.contact');
    }

}