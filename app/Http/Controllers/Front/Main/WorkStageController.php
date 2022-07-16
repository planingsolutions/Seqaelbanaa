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


class WorkStageController extends Controller
{
 
    public function ShowWorkStage(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','Paragraph1','Paragraphh')->where('section_id', 14);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.workStage')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.indexpage.workStage');  
    }

    public function storeWorkStage(Request $request)
    { 
        $ContentsId = $request->id;

        $contents   =   Contents::find($ContentsId);
        $contents->Tittle=$request->paragraphOne;
        $contents->Paragraph1=$request->paragraphTwo;

        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editWorkStage(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }
}
