<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Goal;
use App\Log;

class SoukatuController extends Controller
{
  
  public function __construct()
    {
        $this->middleware('auth');
    }
  public function about()
  {
      return view('soukatu_about');
  }
  
    public function start()
  {
      return view('start');
  }
  
  
     public function goal()
  {
      return view('goal');
  }
  
  
    public function create(Request $request)
  {
    $this->validate($request, Goal::$rules);
    
    $goal = new Goal;
    $goal->user_id = $request->user()->id;
    $form = $request->all();
    
    $goal->fill($form)->save();
    
      return redirect('soukatu/goal');
  } 


  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Goal::where('title', $cond_title)->get();
      } else {
          $posts = Goal::all();
      }
      return view('index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  
  public function log()
  {
    $posts = Goal::all();
      return view('log',['posts' => $posts]);
      
  }
  
  
  public function createlog(Request $request)
  {
    $this->validate($request, Log::$rules);
    
    $log = new Log;
    $form = $request->all();
    
    $log->fill($form)->save();
    
      return redirect('soukatu/log');
  } 
  
  
  public function activitylog()
  {
    $posts = Goal::where('title')->get();
      return view('activitylog',['posts' => $posts]);
  }
  
  
    public function check()
  {
    $posts = Goal::all();
      return view('check',['posts' => $posts]);
  }
  
  
}
