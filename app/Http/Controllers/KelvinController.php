<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class KelvinController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($user)
    {
        return view('greeting', [
            'name' => $user
        ]);
        //return View::make('my_view', ['name' => 'Kelvin Wong']);
    }
}