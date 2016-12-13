<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

    public function __construct()
    {
      $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this-> validate($request,[
        'username' => 'required|max:255|unique:users',
        'firstname' => 'required|max:255',
        'lastname' => 'required|max:255',
        'sex' => 'required',
        'birthday' => 'required',
        'address' => 'required',
        'contactnumber' => 'required',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',

      ]);
      User :: create($request->all());
      return redirect('announcements/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $id = Auth::id();
      $user = User :: find($id);
      return view('/user/show') -> with ('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $user = User :: find($id);
      return view('user/edit') -> with ('user', $user);
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
      $this-> validate($request,[

        'firstname' => 'required|max:255',
        'lastname' => 'required|max:255',
        'sex' => 'required',
        'birthday' => 'required',
        'address' => 'required',
        'contactnumber' => 'required',



      ]);

      $user = User :: find($id);
      $user->lastname = $request->input('lastname');
      $user->firstname = $request->input('firstname');
      $user->sex= $request->input('sex');
      $user->birthday= $request->input('birthday');
      $user->contactnumber= $request->input('contactnumber');
      $user->address= $request->input('address');

      $user->save();
      return view('user/show')-> with ('user',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
