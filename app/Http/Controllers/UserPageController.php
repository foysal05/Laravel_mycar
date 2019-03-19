<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class UserPageController extends Controller
{
   public function index()
    {
      return view('users.pages.index');
    }
   public function earn()
    {
      return view('users.pages.earn');
    }
   public function driver()
    {
      return view('users.pages.driver');
    }
   public function cost()
    {
      return view('users.pages.cost');
    }
   public function car()
    {
      $cars = Car::orderBy('id', 'desc')->get();
      return view('users.pages.cars')->with('cars', $cars);
    }
   public function report()
    {
      return view('users.pages.report');
    }
   public function new_car()
    {
      return view('users.pages.new_car');
    }
   public function cars()
    {
      return view('users.pages.cars');
    }
}
