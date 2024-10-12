<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSheetsController extends Controller
{
    public function Index(){
        $rows = Sheets::spreadsheet('1gDUuTGHFezURp1U5Jrt7eU9j49j-uTmaj16W4VCcjCA')->sheet('demo')->get();
        $header = $rows->pull(0);
        $values = Sheets::collection(header: $header, rows: $rows);
        $values = array_values($values->toArray());
        return view('sheets',compact('values'));
    }


public function Create(){
    return view('create');

}

public function Store(Request $request){
    Sheets::spreadsheet('1gDUuTGHFezURp1U5Jrt7eU9j49j-uTmaj16W4VCcjCA')
        ->sheet('demo')
        ->append([['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone]]);
    return redirect()->route('sheet');
}

}

