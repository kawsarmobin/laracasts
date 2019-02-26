<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function home()
   {
      $tasks = [
         'go to the store',
         'go to the market',
      ];
      return view('welcome', [
         'tasks' => $tasks,
         'foo' => 'foober',
      ]);
   }

   public function about()
   {
      return view('about');
   }

   public function contact()
   {
      return view('contact');
   }
}
