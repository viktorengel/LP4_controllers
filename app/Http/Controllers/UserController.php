<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        /* $users = User::where('age','>=', 10)->orWhere('zip_code',246810)->get(); */
        /* $users = User::where('age','>=', 1)->orderBy('age','asc')->get(); */
        /* $users = User::where('age','>=', 1)->orderBy('age','desc')->limit(5, 10)->get(); */
        /* $users = User::where('age','>=', 1)->first(); */
        /* $users = User::find(1); */
        /* $users = User::findOrFail(1); */

        return view('user.index',compact('users'));
    }

    public function create(){
        $user = new User;
        $user->name     = 'Viktor';
        $user->email    = 'vik@rengel.com';
        $user->password = Hash::make('12345');
        $user->age      = 25;
        $user->address  = 'Calle ML 363';
        $user->zip_code = '254678';
        $user->save();

        User::create([
            'name' => 'Emilia',
            'email' => 'Emilia@rengel.com',
            'password' => Hash::make('1234'),
            'age' => '3',
            'address' => 'Pusuqui',
            'zip_code' => '246810'
        ]);

        User::create([
            'name' => 'JuanD',
            'email' => 'Juan@rengel.com',
            'password' => Hash::make('123'),
            'age' => '1',
            'address' => 'Pusuqui C',
            'zip_code' => '13579'
        ]);

        return redirect()->route('user.index');
    }

}
