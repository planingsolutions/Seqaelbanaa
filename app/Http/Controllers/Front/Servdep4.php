<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class Servdep4 extends Controller
{
   
    
    public function ShowServiceeFMain(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','Paragraph1','Paragraphh')->where('section_id', 6);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.serv4M')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.servdeprt1.serv3M');  
    }


  

    public function storeServiceeFMain(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->MainTitlle == '')
        {
            $contents   =   Contents::find($ContentsId);
            $contents->Paragraph1=$request->paragraphOne;
            $contents->Paragraphh=$request->paragraphTwo;
        }
        else{
            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->MainTitlle;
            $contents->Paragraph1=$request->paragraphOne;
            $contents->Paragraphh=$request->paragraphTwo;
        }
        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editServiceeFMain(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }



    // cateogryy


     
    public function ShowServiceeFCategory(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','Paragraph1','Paragraphh')->where('section_id', 7);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.serv4C')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.servdeprt1.serv3C');  
    }

    public function storeServiceeFCategory(Request $request)
    { 
        $ContentsId = $request->id;

        $contents   =   Contents::find($ContentsId);
        $contents->Paragraph1=$request->paragraphOne;
        $contents->Paragraphh=$request->paragraphTwo;
        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editServiceeFCategory(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }


}
