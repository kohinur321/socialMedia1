<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class CategoryController extends Controller
{

public function addCategory()
{
    return "Add Category page";

}

public function manageCategory()
{
    return "Manage Category page";
}

}
