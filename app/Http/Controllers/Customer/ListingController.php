<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ListingRequest;
use App\Model\Category;
use App\Model\SubCategory;
// use App\SubCategory;
class ListingController extends Controller
{
    
    public function index()
    {
        //
    }

     public function getCategories(Request $request)
    {   
        return $request->all();
          // $categories = Category::where($category);
      //   return SubCategory::where('categories_id',$category_id)->get();
        //return response()->json($category);
        // return view('customer.listing.category',compact('categories','subCategories'));
        
    }
     public function category()
    {
        $categories = Category::all();
        $subCategories = "ss";
        return view('customer.listing.category',compact('categories','subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('customer.listing.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
