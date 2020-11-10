<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;
use App\SubCategory;
use Illuminate\Pagination\Paginator;

class FrontendController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(8);
        $items = Item::all();
        $randomItems = $items->random(4);
        $discountItems = Item::where('discount', '!=', 0)->paginate(4);
        $covidItems = Item::where('subcategory_id', '8')->paginate(4);
        return view('frontend.mainpage', compact('randomItems', 'discountItems', 'covidItems', 'brands'));
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.register');
    }
    public function itemDetail($id)
    {
        $brands = Brand::all();
        $subcategories = SubCategory::all();
        $item = Item::find($id);
        return view('frontend.item_detail', compact('item', 'brands', 'subcategories'));
    }

    public function itemsBySubCategory($id)
    {
        $subcategory = SubCategory::find($id);
        $categories = Category::all();
        return view('frontend.itemsBySubCategory', compact('subcategory'));
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function success()
    {
        return view('order.accept');
    }
}
