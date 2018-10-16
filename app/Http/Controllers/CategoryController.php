<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    
    /**
     * Get List category
     * 
     * @return type Description
     */
    public function index()
    {
        $modelCategory = new Category();
        $listCategory = $modelCategory->listAllCategory(false)->paginate(15);
        return view('category.index', ['listCategory' => $listCategory]);
    }
}
