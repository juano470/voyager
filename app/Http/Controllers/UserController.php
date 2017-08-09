<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all(); //todos los usuarios
        // dd($users);
        // var_dump($usr);
        $users = User::paginate(2); //paginar
        return view('users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //dd($request);
        // guardar todo los datos de la request en la base de datos
        // User::create(request()->all());

        // return redirect('/');

        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('photos'), $file);
        }

        $usr = new User;
        $usr->name = $request->get('name');
        $usr->email = $request->get('email');
        $usr->password = bcrypt($request->get('password'));
        $usr->role =$request->get('role');
        $usr->image = $file;

        if($usr->save()){
            return redirect('/')
            ->with('status', 'Usuario <strong>'. $usr->name . '</strong> Adicionado con exito');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usr = User::find($id);
        return view('users.show')->with('usr', $usr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usr = User::find($id);
        return view('users.edit')->with('usr', $usr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->old_image);

        Storage::delete($request->old_image);

        $usr = User::find($id);
        $usr->name = $request->get('name');
        $usr->email = $request->get('email');
        $usr->role =$request->get('role');
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('photos'), $file);
            $usr->image = $file;
         }

        if($usr->save()){
            return redirect('user')
            ->with('status', 'Usuario <strong>'. $usr->name . '</strong> Modificado con exito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usr = User::find($id);
        if ($usr->delete()) {
            return redirect('user')->with('status', 'Usuario <strong>'.$usr->name.'</strong>'.'Eliminado con exito!');
         } 
    }
}
