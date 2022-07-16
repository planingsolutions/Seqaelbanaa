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

class AboutUsCatController extends Controller
{

    public function ShowAboutUsCate(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','Paragraph1')->where('section_id', 12);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.aboutuscat')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.indexpage.aboutusCat');  
    }

    public function storeAboutUsCate(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->hasFile('Images'))
        {
        
                $image=$request->file('Images');
                $text =time().".".$image->clientExtension();
                $image ->storeAs('img/',$text);

                $contents= Contents::find($ContentsId);
                $contents->Tittle=$request->Tittle;
                $contents->Paragraph1=$request->Description;
                $contents->Images=$text;  
                $contents->save(); 
        }
        else{
       
            $contents= Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description;
            $contents->save(); 
        }
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    public function editAboutUsCate(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }


}
