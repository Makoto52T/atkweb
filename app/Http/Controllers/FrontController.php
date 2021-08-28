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
        return view();
    }
    
    public function football()
    {
        return view('game/football');
    }
    
    public function slot()
    {
        return view('game/slot');
    }
    
    public function heilo()
    {
        return view('game/heilo');
    }
}