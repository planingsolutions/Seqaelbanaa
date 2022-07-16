<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class Servdep3 extends Controller
{
   
    public function ShowServiceeThree(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','Paragraph1')->where('section_id', 4);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.serv3')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.servdeprt1.serv3');  
    }


    public function storeServiceeThree(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->hasFile('Images') && $request->MainTitlle == '' )
        {
        
                $image=$request->file('Images');
                $text =time().".".$image->clientExtension();
                $image ->storeAs('img/',$text);
            
           
                $contents= Contents::find($ContentsId);
                $contents->Paragraph1=$request->paragraph;
                $contents->Images=$text;  
                $contents->save(); 
    
            

        }
        elseif ($request->hasFile('Images')  && $request->MainTitlle !== '')
        {
                $image=$request->file('Images');
                $text =time().".".$image->clientExtension();
                $image ->storeAs('img/',$text);
           
                $contents= Contents::find($ContentsId);
                $contents->Paragraph1=$request->paragraph;
                $contents->Tittle=$request->MainTitlle;
                $contents->Images=$text;  
                $contents->save(); 
        }
        elseif ($request->hasFile('Images') == false  && $request->MainTitlle == '')
        {
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' , $ContentsId)->get();
            $val=$arr[0];
            $contents->Paragraph1=$request->paragraph;
            $contents->Images=$val['Images'];
            $contents->save(); 
        }
        else{
       
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' , $ContentsId)->get();
            $val=$arr[0];
            $contents->Paragraph1=$request->paragraph;
            $contents->Tittle=$request->MainTitlle;

            $contents->Images=$val['Images'];
            $contents->save(); 
        }
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    public function editServiceeThree(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }
   

}
