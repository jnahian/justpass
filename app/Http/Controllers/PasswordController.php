<?php

namespace App\Http\Controllers;

use App\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "List of Passwords";
        $search = $request->search;
        $passwords = Password::SearchByKeyword($search)->orderBy('site_name')->paginate(15);
        return view('passwords.index', compact('title', 'passwords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add New Password";
//        $site_names = Password::distinct()->get(['site_name'])->pluck('site_name');
        return view('passwords.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'site_name' => 'required|max:255',
            'url' => 'required|url',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $encrypted_password = Password::encrypt_password($request->password);

        $password = new Password;

        $password->user_id = Auth::user()->id;
        $password->site_name = $request->site_name;
        $password->account_name = $request->account_name;
        $password->category = $request->category;
        $password->url = $request->url;
        $password->email = $request->email;
        $password->username = $request->username;
        $password->password = $encrypted_password;
        $password->phone = $request->phone;
        $password->extra = $request->extra;

        $status = $password->save();

        if ($status) {
            $request->session()->flash('type', 'success');
            $request->session()->flash('msg', 'Password Added Successfully!');
        } else {
            $request->session()->flash('type', 'danger');
            $request->session()->flash('msg', 'Password cannot be Added!');
        }

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Password $password
     * @return \Illuminate\Http\Response
     */
    public function show(Password $password)
    {
        $title = "Password Details";
        return view('passwords.show', compact('title', 'password'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Password $password
     * @return \Illuminate\Http\Response
     */
    public function edit(Password $password)
    {
        $title = "Edit Password";
        return view('passwords.edit', compact('title', 'password'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Password $password
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Password $password)
    {
        $request->validate([
            'site_name' => 'required|max:255',
            'url' => 'required|url',
            'email' => 'required|email',
        ]);


//        $password->user_id = Auth::user()->id;
        $password->site_name = $request->site_name;
        $password->account_name = $request->account_name;
        $password->category = $request->category;
        $password->url = $request->url;
        $password->email = $request->email;
        $password->username = $request->username;

        if ($request->password) {
            $encrypted_password = Password::encrypt_password($request->password);
            $password->password = $encrypted_password;
        }

        $password->phone = $request->phone;
        $password->extra = $request->extra;

        $status = $password->save();

        if ($status) {
            $request->session()->flash('type', 'success');
            $request->session()->flash('msg', 'Password Updated Successfully!');
        } else {
            $request->session()->flash('type', 'danger');
            $request->session()->flash('msg', 'Password cannot be Updated!');
        }

        return redirect()->route('password.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Password $password
     * @return \Illuminate\Http\Response
     */
    public function destroy(Password $password, Request $request)
    {
        $password->delete();
        $request->session()->flash('type', 'success');
        $request->session()->flash('msg', 'Password Deleted Successfully!');
        return redirect()->route('password.index');
    }
}
