<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\Quote;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\QuoteCategory;




class QuoteCategoryController extends Controller
{
     // Add Category 

    
    public function add_category(Request $req){

            $req->validate([
                'category_name' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg',
            ]);

        $imageName = time().'.'.$req->image->extension();
        $req->image->storeAs('public/CategoryImage',$imageName);
        
        $data = new QuoteCategory();
        $data->category_id = Str::uuid();
        $data->category_name = $req->category_name;
        $data->image=$imageName;
        $result = $data->save();
           
        if($result){
            return redirect()->back()->with('success', 'Data Added successfully');

        }else{
            return redirect()->back()->with('error','Data Not Added.......!');
        }
    }

    // Show Category

    public function show_category(){
        $data = QuoteCategory::all();
        return view('admin/show_category',compact('data'));

    }
    // Delete Start Here
    public function delete_category($id)
    {
        $count = QuoteCategory::count();
        if($count >= 2)
        {
            $data = QuoteCategory::find($id);
            if($data)
            {
                $data->delete();
                return redirect()->back()->with('success','Data Deleted Successfully');
            }else{
          
                return redirect()->back()->with('error','Data Not Found........!');
                }    
        }
        else{
            return redirect()->back()->with('error','Add Atleast One Category Before Delete');
        }
    }
    // Edit Start Here
    public function edit_category(Request $req, $id)
    {
        $req->validate([
            'category_name' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        $data=QuoteCategory::where('id',$id)->first();

        if(isset($req->image)){
            //upload image
            $imageName = time().'.'.$req->image->extension();
            $req->image->storeAs('public/CategoryImage',$imageName);
            $data->image=$imageName;
        }
        $data->category_name = $req->category_name;

        $result = $data->save();
        if($result){
            return redirect()->back()->with('success', 'Data Updated successfully');

        }else{
            return redirect()->back()->with('error','Data Not Added.......!');
        }
    }
    // Api Start Here
    function Categoires()
    {
        $category = QuoteCategory::all();
        if(!($category->isEmpty()))
        {
          
        return ["Success"=>True,"Msg"=>"Data List",'data'=>$category,];
          
        }
        else{
        return["Success"=>False,"Msg"=>"Data not found"];   
        }
    }
    
    public function showCount()
    {
        $QuoteCategory = QuoteCategory::count();
        $Quote=Quote::count();
        $Word=Word::count();
        return view('admin.dashboard',compact('QuoteCategory','Quote','Word'));

        
    }
   
}
