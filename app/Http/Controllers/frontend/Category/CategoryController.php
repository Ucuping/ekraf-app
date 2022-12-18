<?php
 
namespace App\Http\Controllers\frontend\Category;
 
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
class CategoryController extends Controller
{
    // /**
    //  * Show the profile for a given user.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\View\View
    //  */
    public function detail()
    {
        $data = Company::all();
        return view('frontend.detailcategory', compact('data'));
    }
}