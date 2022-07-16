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

class SectionTwo extends Controller
{
   
    public function ShowAboutUssTwo(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','Paragraph1','Paragraphh','vedio')->where('section_id', 18);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.aboutusSectwo')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.aboutus.sectionTwo');  
    }


    public function storeAboutUssTwo(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->hasFile('vedio'))
        {
           
            $image=$request->file('vedio');
            $text =time().".".$image->clientExtension();
            $image ->storeAs('img/',$text);

            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->SecTittle;
            $contents->Paragraph1=$request->Tittle;
            $contents->Paragraphh=$request->Description;
            $contents->vedio=$text;
            $contents->save();       
        }
        else{
            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->SecTittle;
            $contents->Paragraph1=$request->Tittle;
            $contents->Paragraphh=$request->Description;
            $contents->save();
        }
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editAboutUssTwo(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }


}
