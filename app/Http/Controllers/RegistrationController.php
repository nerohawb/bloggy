<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create() {
      return view('registration.create');
    }

    public function store(RegistrationForm $form) {
      // $this->validate(request(), [
      //   'name' => 'required',
      //   'email' =>'required|email',
      //   'password' => 'required|confirmed'
      // ]);

      // $user = User::create(request(['name', 'email', 'password']));
      //
      // $user->fill([
      //      'password' => Hash::make($user->password)
      //  ])->save();
      //
      // auth()->login($user);
      //
      // \Mail::to($user)->send(new Welcome($user));

      $form->presist();

      session()->flash('message', 'Thanks so much for singning up!');

      return redirect()->home();

    }
}
