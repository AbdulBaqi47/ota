<?php

namespace App\Http\Controllers\Tenant\Admin;


use App\Http\Controllers\Controller;
use App\Models\Tenant\NewsAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewsAlertController extends Controller
{
    public function view(){
        $newsAlerts = NewsAlert::get();
        return view('Tenant.Admin.Dashboard.news.view')->with('newsAlerts', $newsAlerts);

    }
    public function create(){
        return view('Tenant.Admin.Dashboard.news.create');
    }
    public function store(Request $request)
    {
        $newsAlert = NewsAlert::create([
            'title' => $request->title,
            'message' => $request->title,
            'type' => $request->title,
            'meta' => json_encode(['source' => 'BBC', 'category' => 'World']),
            'is_featured' => $request->is_featured,
            'expired_at' => $request->expired_at,
        ]);
        return redirect()->route('TenantDashboard')->with('success', 'News Alert created successfully!');}
}
