<?php


namespace App\Http\Controllers;

use App\Models\Diary;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }

    public function show(Diary $diary) {
        return view("diaries.show", compact("diary"));
      }

      public function create(Diary $diary) {
        return view("diaries.create", compact("diary"));
      }

      public function edit(Diary $diary) {
        return view("diaries.edit", compact("diary"));
      }

    public function store(Request $request) {
        
        $validated = $request->validate([
            "title" => ["required", "max:255"],
            "body" => ["required", "max:255"],
            "date" => ["required"]
          ]);
        
        Diary::create([
            "title" => $request->title,
            "body" => $request->body,
            "date" => $request->date
          ]);
        
        return redirect("/diaries");
    }


    public function update(Request $request, Diary $diary) {

      $validated = $request->validate([
        "title" => ["required", "max:255"],
        "body" => ["required"],
        "date" => ["required" ,"date"]
      ]);

      $diary->title = $validated["title"];
      $diary->body = $validated["body"];
      $diary->date = $validated["date"];
      $diary->save();
      return redirect("/diaries");
    }



}
