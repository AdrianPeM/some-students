<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Career;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $careers = Career::all(['id', 'display_name']);

        return view('auth.register', compact('careers'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'career_id' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'career_id' => $request->career_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        //Generate subjects status
        $subjects = $user->subjects();

        if(count($subjects) > 0) {
            foreach($subjects as $subject) {
                $exists = DB::table('subject_status')
                    ->where('user_id', $user->id)
                    ->where('subject_id', $subject->id)
                    ->first();
    
                if(!($exists)) {
                    DB::table('subject_status')->insert(
                        ['user_id' => $user->id, 'subject_id' => $subject->id, 'status' => 'blocked']
                    );
                }
            }
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
