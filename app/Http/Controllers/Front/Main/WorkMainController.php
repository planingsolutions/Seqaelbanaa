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

class WorkMainController extends Controller
{

    public function ShowWeWorkMain(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','updated_at')->where('section_id', 13);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.workMain')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.indexpage.workMain');  
    }

    public function storeWeWorkMain(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->hasFile('Images'))
        {
        
                $image=$request->file('Images');
                $text =time().".".$image->clientExtension();
                $image ->storeAs('img/',$text);

                $contents= Contents::find($ContentsId);
                $contents->Tittle=$request->Tittle;
                $contents->Images=$text;  
                $contents->save(); 
        }
        else{
       
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' , $ContentsId)->get();
            $val=$arr[0];
            $contents->Tittle=$request->Tittle;
            $contents->Images=$val['Images'];
            $contents->save(); 
        }
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    public function editWeWorkMain(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }


}
