<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
   

    public function index()
    {
        $total_admins = count(Admin::select('id')->get());
        return view('backend.pages.dashboard.index', compact('total_admins'));
    }
}
