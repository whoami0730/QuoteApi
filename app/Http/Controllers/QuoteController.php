<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\Quote;
use Illuminate\Http\Request;
use App\Models\QuoteCategory;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    public function show_category(){
        $data = QuoteCategory::all();
        return view('admin/add_quote',compact('data'));

    }
    //
    public function add_quote(Request $req){

        $req->validate([     
            'category_id' => 'required',     
            'text' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

            //upload image
            $imageName = time().'.'.$req->image->extension();
            $req->image->storeAs('public/QuoteImage',$imageName);
            $data = new Quote();
            $data->category_id =$req->category_id;
            $data->text = $req->text;
            $data->image=$imageName;
            $result = $data->save();
            
        if($result){
            return redirect()->back()->with('success', 'Data Added successfully');

        }else{
            return redirect()->back()->with('error','Data Not Added.......!');
        }
    }

    public function show_quote(){
         $data = DB::table("quotes")
        ->join('quote_categories','quotes.category_id','=','quote_categories.category_id')->select('quote_categories.*','quotes.*')->get();
        
        return view('admin/show_quote',compact('data'));
    

    }

    public function edit_quote(Request $req, $id)
    {   
        $req->validate([
            'text' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            
        ]);

        $data=Quote::where('id',$id)->first();


        if(isset($req->image)){
            //upload image
            $imageName = time().'.'.$req->image->extension();
            $req->image->storeAs('public/QuoteImage',$imageName);
            $data->image=$imageName;
        }
        $data->text = $req->text;

        $result = $data->save();
        if($result){
            return redirect()->back()->with('success', 'Data Updated successfully');

        }else{
            return redirect()->back()->with('error','Data Not Added.......!');
        }
    }

    // Delete Start Here
    public function delete_quote($id)
    {
        $count = Quote::count();
        if($count >= 2)
        {
            $data = Quote::find($id);
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

        // -----------------------------------API OF ALL Qoutes OF DAYS-----------------------------------------------//
        function APIQUOTES()
        {
        $all =  DB::table('quotes')
            ->join('quote_categories', 'quotes.category_id', '=', 'quote_categories.category_id')           
            ->select('quotes.*','quote_categories.category_name')
            ->get();
            if($all)
            {
            
            return ["Success"=>True,"Msg"=>"Data List",'data'=>$all,];
            
            }
            else{
            return["Success"=>False,"Msg"=>"Data not found"];   
            }
        }

        //---------------------Quotes s Categoires----------------------------//
        function get_id(Request $req)
        {
            $category_id =$req->category_id;

            $table=Quote::where('category_id','=',$category_id)
            ->get();

            if(!($table->isEmpty()))
            {
                return["Success"=>True,"Msg"=>"Quote List", "data"=>  $table];
            }
            else{
                return["Success"=>False,"Msg"=>"Data not found"];   
            }
        }

        // --------------------API Word and Quote of Today --------------------------------------//
        function today()       
        {
            $quote =  DB::table('quotes')
            ->join('quote_categories', 'quotes.category_id', '=', 'quote_categories.category_id')           
            ->select('quotes.*','quote_categories.category_name')
            ->latest('id')
            ->first();
        
            if ($quote === null) {
                $quote= Quote::whereRaw('id = (select max(`id`) from quotes)')
                
                ->get();
            
            }  
            $word = DB::table('words') ->latest('id')
            ->limit(1)
            ->first();

            if ($word === null) {
                $word= Word::whereRaw('id = (select max(`id`) from words)')->get();
            
            }  
            $both = compact('quote','word');

            if($both)
            {
            
            return ["Success"=>True,"Msg"=>"Data List",'data'=>$both,];
            
            }
            else{
            return["Success"=>False,"Msg"=>"Data not found"];   
            }
        }

}
