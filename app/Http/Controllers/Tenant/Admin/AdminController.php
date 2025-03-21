<?php

namespace App\Http\Controllers\Tenant\Admin;


use App\Http\Controllers\Controller;
use App\Models\Central\Tenant;
use App\Models\Central\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function TenantDashboard()
    {
        return view('Tenant.Admin.Dashboard.index');
    }

}
