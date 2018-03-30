<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'email' =>'required|email',
          'password' => 'required|confirmed'
        ];
    }

    public function presist() {

      $user = User::create($this->only(['name', 'email', 'password']));

      $user->fill([
           'password' => Hash::make($user->password)
       ])->save();

      auth()->login($user);

      Mail::to($user)->send(new Welcome($user));

    }

}
