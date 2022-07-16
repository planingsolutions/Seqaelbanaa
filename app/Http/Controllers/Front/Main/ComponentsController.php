<?php

namespace App\Http\Controllers\Front\Main;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use App\Models\images;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{

    public function ShowComponents(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','updated_at')->where('section_id', 9);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.category')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.indexpage.component');  
    }

    public function storeComponents(Request $request)
    { 
            $ContentsId = $request->id; 
            $contents= Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->save(); 
        

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editComponents(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }



    // Servicess Main


    public function ShowServicesMain(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','updated_at')->where('section_id', 16);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.servicessMain')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.indexpage.servM');  
    }

    public function storeServicesMain(Request $request)
    { 
            $ContentsId = $request->id; 
            $contents= Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->save(); 
        

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editServicesMain(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }


}
