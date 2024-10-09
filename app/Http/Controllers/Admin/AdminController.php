<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function centralDasboard()
    {
        return view('Dashboard.index');
    }
    public function createTenant()
    {
        return view('Dashboard.tenant.create');
    }
    public function storeTenant(Request $request)
    {

        $domainName = $request->tenant_name . '.' . config('tenancy.central_domains')[2];

        $request->validate([
            'tenant_name' => 'required|string|max:255|unique:tenants,id', // Use company name as tenant id
            'name' => 'required|string|max:255',
            'tenant_contact' => 'nullable|string|max:20',
            'tenant_email' => 'required|email|unique:users,email', // Ensure email is unique for users
            'tenant_password' => 'required|string|min:8',
            'tenant_address' => 'nullable|string',
            'tenant_status' => 'nullable',
        ]);
        // Create the tenant
        $tenant = Tenant::create([
            'id' => $request->tenant_name, // Company name as tenant ID
            'contact' => $request->tenant_contact,
            'email' => $request->tenant_email,
            'address' => $request->tenant_address,
            'status' => $request->tenant_status ? '1' : '0'

        ]);

        $tenant->domains()->create(['domain' => $domainName]);

        // Create the tenant user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->tenant_email,
            'password' => Hash::make($request->tenant_password),
            // 'tenant_id' => $tenant->id, // Associate user with tenant
        ]);
        return redirect()->route('centralDasboard')->with('success', 'Tenant and user created successfully!');
    }
    public function showTenants(){
        $tenants = Tenant::with('domains')->get();
        // dd($tenants);
        return view('Dashboard.tenant.view')->with('tenants', $tenants);
    }
}
