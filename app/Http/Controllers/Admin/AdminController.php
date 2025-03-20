<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Central\Tenant;
use App\Models\Central\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function centralDasboard()
    {
        return view('Central.Dashboard.index');
    }
    public function createTenant()
    {
        return view('Central.Dashboard.tenant.create');
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
        // dd($tenant->tenancy_db_name);

        $tenant->domains()->create(['domain' => $domainName]);

        // Create the tenant user
        tenancy()->initialize($tenant);

        $user = new User;
        // $user->setConnection($tenant->tenancy_db_name);
        $user->name =  $request->name;
        $user->email =  $request->tenant_email;
        $user->role =  'su_admin';
        $user->password = Hash::make($request->tenant_password);
        $user->save();

        tenancy()->end();

        return redirect()->route('centralDasboard')->with('success', 'Tenant and user created successfully!');
    }
    public function showTenants(){
        $tenants = Tenant::with('domains')->get();
        return view('Central.Dashboard.tenant.view')->with('tenants', $tenants);
    }
}
