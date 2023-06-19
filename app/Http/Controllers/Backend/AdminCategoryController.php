<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AdminSubcatmodel;
use App\Http\Controllers\Controller;
use App\Models\AdminCategoriesModel;

class AdminCategoryController extends Controller
{
    //
    public function index()
    {
        $data = AdminCategoriesModel::all();
        return view('admin.category.manage_category',compact('data'));
    }

    public function store (Request $request)
    {
        AdminCategoriesModel::insert([
            'category_name' => $request->cat_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully', 
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }

    public function edit_index($id)
    {
        $data = AdminCategoriesModel::findOrFail($id);
        return view('admin.category.edit_category',compact('data'));
    }

    public function update_index(Request $request,$id)
    {
        AdminCategoriesModel::findOrFail($id)->update([
            
            'category_name' => $request->cat_name,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Category Updated Successfully', 
            'alert-type' => 'success'
        );
    
        return redirect()->route('manage.categories')->with($notification);
    }

    public function delete_index($id)
    {
        $data = admincategoriesmodel::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully', 
            'alert-type' => 'warning'
        );
    
        return redirect()->route('manage.categories')->with($notification);
    }

    public function index_subcat()
    {
      
            $data = AdminCategoriesModel::all();
            $data2= AdminSubcatmodel::all();
            return view('admin.category.manage_subcat',compact('data','data2'));
        
    }

    public function store_subcat (Request $request)
    {
        AdminSubcatmodel::insert([
            'cat_id' => $request->cat_id,
            'subcat_name' => $request->subcat_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully', 
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }


    public function edit_subcat($id)
    {
        $data = AdminCategoriesModel::all();
        $data2= AdminSubcatmodel::findOrFail($id);
        return view('admin.category.edit_subcat',compact('data','data2'));
    }

    public function update_subcat(Request $request,$id)
    {
        AdminSubcatmodel::findOrFail($id)->update([
            'cat_id' => $request->cat_id,
            'subcat_name' => $request->subcat_name,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'SubCategory Updated Successfully', 
            'alert-type' => 'success'
        );
    
        return redirect()->route('manage.sub_cat')->with($notification);
    }

    public function delete_subcat($id)
    {
        $data = AdminSubcatmodel::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'SubCategory Deleted Successfully', 
            'alert-type' => 'warning'
        );
    
        return redirect()->back()->with($notification);
    }
}
