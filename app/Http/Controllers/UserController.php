<?php

namespace App\Http\Controllers;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Validator;
use Illuminate\Http\Request;
use App\Models\student;
use Excel;
use App\Imports\studentImport;


class UserController extends Controller
{
    public function index(){
        return view('form');
    }
    public function excel_import(Request $req){
        $validator = Validator::make($req->all(),[
            'doc'=> 'required|max:5000|mimes:xlsx,xls,csv'
        ]);
        if($validator->passes()){
            $dataTime = date('Ymd_His');
            $file =$req->file('doc');
            $fileName =$dataTime . '-' . $file->getClientOriginalName();
            $savePath= public_path('/upload/');
            $file->move($savePath, $fileName);
            return redirect()->back()->with(['success'=>'File Uploadesd Succescfully']);
        }else{
            return redirect()->back()->with(['errors'=>$validator->errors()->all()]);
        }
    }
}
