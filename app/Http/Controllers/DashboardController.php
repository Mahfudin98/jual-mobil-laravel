<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarCategory;
use App\Models\CarColor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function products()
    {
        $cars = Car::with('brand', 'category', 'color')->orderBy('DESC')->paginate(10);
        return view('admin.products', compact('cars'));
    }

    public function other()
    {
        $brands     = CarBrand::all();
        $categories = CarCategory::all();
        $colors     = CarColor::all();
        return view('admin.other', compact('brands', 'categories', 'colors'));
    }

    public function addproducts()
    {
        $brands = CarBrand::all();
        $categories = CarCategory::all();
        $colors = CarColor::all();

        return view('admin.addproducts', compact('brands', 'categories', 'colors'));
    }
}
