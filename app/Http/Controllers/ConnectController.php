<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator, Illuminate\Support\Facades\Hash;
use App\Models\User;

class ConnectController extends Controller
{
    public function getLogin(){
        return view('connect.login');
    }

    public function getRegister(){
        return view('connect.register');
    }

    public function postRegister(Request $request){
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min:8 ',
            'rpassword' => 'required | min:8 | same:password'
        ];

        $messages = [
            'name.required' => 'Su nombre es requerido.',
            'lastname.required' => 'Su apellido es requerido.',
            'email.required' => 'Su correo electronico es requerido.',
            'email.email' => 'Su formato de correo electronico es invalido.',
            'email.unique' => 'Ya existe un usuario con este correo electronico.',
            'password.required' => 'Por favor escriba una contraseña.',
            'passsword.min' => 'La contraseña debe tener minimo 8 caracteres.',
            'rpassword.required' => 'Es necesario confirmar la contraseña.',
            'rpasssword.min' => 'La contraseña debe tener minimo 8 caracteres.',
            'rpassword.same' => 'La contraseña no coinciden.'
        ];

        $validator = Validator::make( $request->all(), $rules, $messages );
        
        if($validator->fails()){
            
            return back()->withErrors($validator)->with('message', 'Se ha producido un error');
        
        }else{
            $user = new User;
            $user->name = e($request->input('name'));
            $user->lastname = e($request->input('lastname'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));

            if($user->save()){
                return redirect('/login')->with('message', 'El usuario fue creado satisfactoriamente');
            }
        }   
    }
}
