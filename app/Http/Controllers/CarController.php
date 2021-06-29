<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('color', 'brand', 'category')->orderBy('DESC');

        return view('index', compact('cars'));
    }

    public function carslist()
    {
        $cars = Car::with('color', 'brand', 'category')->orderBy('DESC');

        return view('index', compact('cars'));
    }
}
