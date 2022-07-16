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

class ProjectsController extends Controller
{
 
    public function ShowMainProjects(MainsectionRequest $request)
    {
            $query=Contents::select('id','Tittle','Paragraph1','Paragraphh','imagess','created_at')->where('section_id', 15);
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.MainProject')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.indexpage.projects');  
    }


   public function createSMainProjects(Request $request)
   {
 
    $ContentsId = $request->id;
    $Images=[];

    if ($request->hasFile('Images'))
    {
        if(count($request->file('Images')) >= 2)
        {
            foreach($request->file('Images') as $image)
            {
                $name = time().rand(1,100).'.'.$image->extension();
                $image->move(public_path('img'), $name); 
                $Images[]=$name;
            }
            $contents   =   Contents::Create(
                [
                    'section_id'=>'15',
                    'Tittle' => ['ar'=>$request->Tittle , 'en'=>$request->Tittle], 
                    'Paragraph1' =>['ar'=>$request->Description , 'en'=>$request->Description],
                    'Paragraphh'=>['ar'=>$request->detalied , 'en'=>$request->detalied],
                    'Paragraph4'=>['ar'=>$request->descOne , 'en'=>$request->descOne],
                    'Paragraph5'=>['ar'=>$request->descTwo , 'en'=>$request->descTwo],
                    'Paragraph3'=>'',
                    'Images'=>'',
                    'imagess' => $Images,
                ]);  
                $contents->save();
        }
        else{
            $contents=Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description;
            $contents->Paragraphh=$request->detalied;             
            $contents->Paragraph4=$request->descOne;                    
            $contents->Paragraph5=$request->descTwo;
            $contents->save();
        }
    }
        
              
        
        $contents->save();
       return redirect()->back()->with(['success' => 'User deleted successfully !']);

   }

   public function storeMainProjects(Request $request)
   { 
        $ContentsId = $request->id;
        $Images=[];

        if ($request->hasFile('Images'))
        {
            if(count($request->file('Images')) >= 2)
            {
                foreach($request->file('Images') as $image)
                {
                    $name = time().rand(1,100).'.'.$image->extension();
                    $image->move(public_path('img'), $name); 
                    $Images[]=$name;
                }
                
                $contents= Contents::find($ContentsId);
                $contents->Tittle=$request->Tittle;
                $contents->Paragraph1=$request->Description;
                $contents->Paragraphh=$request->detalied;

                $contents->Paragraph4=$request->descOne;
                $contents->Paragraph5=$request->descTwo;
                $contents->imagess=$Images;  
                $contents->save(); 
            }
            else{
                $contents = Contents::find($ContentsId);
                $contents->Tittle=$request->Tittle;
                $contents->Paragraph1=$request->Description;
                $contents->Paragraphh=$request->detalied;
                $contents->Paragraph4=$request->descOne;
                $contents->Paragraph5=$request->descTwo;
                    
                $contents->save();
            }
        }
        else{
       
                $contents = Contents::find($ContentsId);
                $contents->Tittle=$request->Tittle;
                $contents->Paragraph1=$request->Description;
                $contents->Paragraphh=$request->detalied;  
                $contents->Paragraph4=$request->descOne;

                $contents->Paragraph5=$request->descTwo;
                  
                $contents->save();
        }

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editMainProjects(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Contents::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroyMainProjects(Request $request)
   {
       $contents = contents::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }

}
