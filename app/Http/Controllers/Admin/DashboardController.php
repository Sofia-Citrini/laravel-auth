<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home(){
        $user = Auth::user();

       
        $projects = Project::all()->count();

        // @dd($projects);
        
        return view('admin.dashboard', [
            "projects" => $projects
        ]);
    }
}
