<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
  public function index($userId)
  {
    $user = User::find($userId);

    return view('home', [
      'user' => $user
    ]);
  }
}
