<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Mail\Soukatu;
use App\Goal;
use App\Log;
use App\Check;

class SoukatuController extends Controller
{
    
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
    
      return redirect('soukatu/goal')->with('flash_message', '新規目標を作成しました');
  } 
  
   public function edit(Request $request)
  {
      $goal = Goal::find($request->id);
      if (empty($goal)) {
        abort(404);    
      }
      return view('goal_edit',['goal_form' => $goal]);
  }


  public function update(Request $request)
  {
      $goal = Goal::find($request->id);
      $this->validate($request, Goal::$rules);
      $form = $request->all();
      $goal->fill($form)->save();
      return redirect('soukatu/show')->with('flash_message', '目標情報を更新しました');
  }

  public function delete(Request $request)
  {
     
      $goal = Goal::find($request->id);
      $goal_id =$request->id;
      $log = Log::where('goal_id',$goal_id)->get();
      $check =Check::where('goal_id',$goal_id)->get();
      $goal->delete();
      $log->delete();
      $check->delete();
      return redirect('soukatu/show');
  }  
  
  public function show(Request $request)
  {
      $user_id = Auth::id();
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Goal::where('title','LIKE', "%$cond_title%")->where('user_id',$user_id)->get();
      } else {
          $posts = Goal::where('user_id',$user_id)->get();
      }
      return view('show', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  
  public function log()
  {
    $user_id = Auth::id();
    $posts = Goal::where('user_id',$user_id)->get();
      return view('log',['posts' => $posts]);
  }
  
  
  public function createlog(Request $request)
  {
    $this->validate($request, Log::$rules);
    $log = new Log;
    $log->user_id = Auth::id();
    $form = $request->all();
    $log=$log->fill($form);
    $log->selectgoal=Goal::find($log->goal_id)->title; 
    $log->save();
    
      return redirect('soukatu/log')->with('flash_message', '新規活動記録を作成しました');
  } 
  
   public function show_log(Request $request)
  {
    $goal_id=$request->id;
    $title=Goal::find($goal_id)->title;
    $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Log::where('title', $cond_title)->where('goal_id',$goal_id)->get();
      } else {
          $posts = Log::where('goal_id',$goal_id)->get();
      }
      return view('show_log', ['posts' => $posts, 'cond_title' => $cond_title,'title'=> $title]);
  }
  
    public function check()
  {
    $user_id = Auth::id();
    $posts = Goal::where('user_id',$user_id)->get();
      return view('check',['posts' => $posts]);
  }
  
    public function createcheck(Request $request)
  {
    $this->validate($request, Check::$rules);
    $check = new Check;
    $check->user_id = Auth::id();
    $form = $request->all();
    $check=$check->fill($form);
    $check->selectgoal=Goal::find($check->goal_id)->title; 
    $check->save();
    
      return redirect('soukatu/check')->with('flash_message', '活動総括を作成しました');
  } 
  
     public function show_check(Request $request)
  {
    $goal_id=$request->id;
    $title=Goal::find($goal_id)->title;
    $posts = Check::where('goal_id',$goal_id)->get();
      return view('show_check', ['posts' => $posts,'title'=> $title]);
  }

     public function useredit(Request $request)
  {
    $user = User::find(Auth::id());
      return view('user_config',['user' => $user]);
  }
  
       public function userupdate(Request $request)
  {
      $user = User::find(Auth::id());
      $this->validate($request, User::$rules);
      $form = $request->all();
      $user->fill($form)->save();
      return redirect('soukatu/user')->with('flash_message', 'ユーザー情報を更新しました');
  }
   
}
