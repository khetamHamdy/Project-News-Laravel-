<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::OrderBy('updated_at', 'desc')->paginate(14);
        return view('admin.Users.users', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Users.add-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'max:50|min:6|unique:posts',
            'password' => 'integer',
            'email' => 'email|required',
        ];
        $messages = [
            'title.required' => ' The Title Required inputed ......',
        ];
        $Validator = Validator::make($request->all(), $rules, $messages);
        if ($Validator->fails()) {
            return redirect()->back()->withErrors($Validator->errors())->withInput();
        }

        $user = new User();
        $user->name = $request->fname . ' ' . $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->pass);
        $user->save();
        return redirect()->route('users.index')->with('success', 'The category Added Successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $enc = decrypt($user->password);
        $dec = encrypt($user->password);

        //  Crypt::encrypt($request->secret);
        return view('admin.Users.update-user', compact('user', 'dec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->f_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->pass);
        $user->save();
        return redirect()->route('users.index')->with('update', 'The category Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('delete', 'deleted successfully');
    }
}
