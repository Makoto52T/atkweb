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
        return view('home');
    }

    public function LinkIncome()
    {
        return view();
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
    
    public function football487()
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

    public function barcarat()
    {
        return view('game/barcarat');
    }

    public function activeMenu($input)
    {
        if ($input == 'home') {
            # code...
        } else {
            # code...
        }
        
        return view('game/barcarat');
    }
}