<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('welcome');
    }

    public function LinkIncome()
    {
        return view('linkincome');
    }
    
    public function article()
    {
        return view('article');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function Game()
    {
        return view('game');
    }
    
    public function football()
    {
        return view('football');
    }
    
    public function slot()
    {
        return view('slot');
    }
    
    public function heilo()
    {
        return view('heilo');
    }
}