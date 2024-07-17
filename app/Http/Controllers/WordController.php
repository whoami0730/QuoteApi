<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\Quote;
use Illuminate\Http\Request;

class WordController extends Controller
{
    //
    public function add_word(Request $req)
    {
        $req->validate([
            'text' => 'required',
            'meaning' => 'required',
            'usage' => 'required',
        ]);

        $data = new Word();
        $data->text = $req->text;
        $data->meaning = $req->meaning;
        $data->usage = $req->usage;
        $result = $data->save();

        if ($result) {
            return redirect()->back()->with('success', 'Data Added successfully');
        } else {
            return redirect()->back()->with('error', 'Data Not Added.......!');
        }
    }

    public function show_word()
    {
        $data = Word::all();
        return view('admin/show_word', compact('data'));
    }

    public function edit_word(Request $req, $id)
    {
        $req->validate([
            'text' => 'required',
            'meaning' => 'required',
            'usage' => 'required',
        ]);

        $data = Word::where('id', $id)->first();

        $data->text = $req->text;
        $data->meaning = $req->meaning;
        $data->usage = $req->usage;

        $result = $data->save();
        if ($result) {
            return redirect()->back()->with('success', 'Data Updated successfully');
        } else {
            return redirect()->back()->with('error', 'Data Not Added.......!');
        }
    }

    // Delete Start Here
    public function delete_word($id)
    {

        $count = word::count();
        if ($count >= 2) {
            $data = word::find($id);
            if ($data) {
                $data->delete();
                return redirect()->back()->with('success', 'Data Deleted Successfully');
            } else {

                return redirect()->back()->with('error', 'Data Not Found........!');
            }
        } else {
            return redirect()->back()->with('error', 'Add Atleast One Category Before Delete');
        }
    }

    // -----------------------------------API OF ALL WORDS OF DAYS-----------------------------------------------//
    function APIALLWORS()
    {
        $all = Word::all();
        if ($all) {

            return ["Success" => True, "Msg" => "Data List", 'data' => $all,];
        } else {
            return ["Success" => False, "Msg" => "Data not found"];
        }
    }

    //-------------------API Show both word and Quotes---------------------------//
    function API()
    {
        $quote = Quote::all();
        $word = Word::all();
        $both = compact('quote', 'word');
        if ($both) {

            return ["Success" => True, "Msg" => "Data List", 'data' => $both,];
        } else {
            return ["Success" => False, "Msg" => "Data not found"];
        }
    }
}
