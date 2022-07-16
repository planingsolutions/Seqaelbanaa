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

class AboutUsMainController extends Controller
{
    //

    public function ShowAboutUsMain(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','updated_at')->where('section_id', 11);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.aboutMain')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.indexpage.aboutusMain');  
    }

    public function storeAboutUsMain(Request $request)
    { 
        $ContentsId = $request->id;
       
            $contents= Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    public function editAboutUsMain(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }

}
