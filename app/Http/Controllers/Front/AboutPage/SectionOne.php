<?php

namespace App\Http\Controllers\Front\AboutPage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class SectionOne extends Controller
{
   
    public function ShowAboutUss(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','Paragraph1','Images')->where('section_id', 17);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.aboutusSecone')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.aboutus.sectionone');  
    }


    public function storeAboutUss(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->hasFile('Images'))
        {
           
            $image=$request->file('Images');
            $text =time().".".$image->clientExtension();
            $image ->storeAs('img/',$text);

            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description;
            $contents->Images=$text;
            $contents->save();       
        }
        else{
            $contents=Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description;
            $contents->save();       

            
        }
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editAboutUss(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }


}
