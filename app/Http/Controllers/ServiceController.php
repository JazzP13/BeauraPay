<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    public function index()
    {
        // Service::all();
        return view('services-list', [
            'services' => Service::all()
        ]);
    }

    public function create()
    {
        return view('forms.add-service');
    }
}
