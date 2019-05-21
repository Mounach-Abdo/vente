<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
    $staff = Staff::findOrFail(auth()->guard('staff')->user());
        return view('auth.staff.show',['staff'=>$staff]);
    }

    public function showmenu()
    {
        return view('staff.menu');
    }
}
