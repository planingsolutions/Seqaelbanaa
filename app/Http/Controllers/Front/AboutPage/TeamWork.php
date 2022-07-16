<?php

namespace App\Http\Controllers\Front\AboutPage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use App\Models\images;
use Illuminate\Http\Request;

class TeamWork extends Controller
{
 
    public function ShowTeamWork(MainsectionRequest $request)
    {
            $query=Contents::select('id','Tittle','Paragraph1','Images','created_at')->where('section_id', 19);
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.teamwork')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.aboutus.teamwork');  
    }


   public function createTeamWork(Request $request)
   {
 
    $ContentsId = $request->id;
    $Images=[];

    if ($request->hasFile('Images'))
    {
        $image=$request->file('Images');
        $text=time().".".$image->clientExtension();
        $image->storeAs('img/',$text);

            $contents   =   Contents::Create(
                [
                    'section_id'=>'19',
                    'Tittle' => ['ar'=>$request->EName , 'en'=>$request->EName], 
                    'Paragraph1' =>['ar'=>$request->Ejob , 'en'=>$request->Ejob],
                    'Paragraphh'=>'',
                    'Paragraph4'=>'',
                    'Paragraph5'=>'',
                    'Paragraph3'=>'',
                    'Images'=>$text,
                    'imagess' => '',
                    'vedio'=>'',
                ]);  
                $contents->save();
    }
    return redirect()->back()->with(['success' => 'User deleted successfully !']);

   }

   public function storeTeamWork(Request $request)
   { 
        $ContentsId = $request->id;

        if ($request->hasFile('Images'))
        {
            $image=$request->file('Images');
            $text=time().".".$image->clientExtension();
            $image->storeAs('img/',$text);

            $contents = Contents::find($ContentsId);
            $contents->Tittle=$request->EName;
            $contents->Paragraph1=$request->Ejob;
            $contents->Images=$text;
            $contents->save();
        }
        else{
       
            $contents = Contents::find($ContentsId);
            $contents->Tittle=$request->EName;
            $contents->Paragraph1=$request->Ejob;
            $contents->save();
        }

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editTeamWork(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Contents::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroyTeamWork(Request $request)
   {
       $contents = contents::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }

}