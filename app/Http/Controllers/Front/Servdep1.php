<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class Servdep1 extends Controller
{
   
    public function ShowServicess(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','Paragraph1','Paragraphh','Paragraph3')->where('section_id', 1);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.serv1')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.servdeprt1.show');  
    }


  

    public function storeServicess(Request $request)
    { 
        $ContentsId = $request->id;
        // if ($request->hasFile('Images'))
        // {
        //     foreach($request->file('Images') as $image)
        //     {
        //         $text =time().".".$image->clientExtension();
        //         $image ->storeAs('img/',$text);
        //         $Images[]= $text;
        //     }
        //     $contents   =   Contents::find($ContentsId);
        //     $contents->Tittle=$request->Tittle;
        //     $contents->Paragraph1=$request->component;
        //     $contents->Paragraph2=$request->componentTittle;
        //     $contents->Images=$Images;         
        // }
        // else{
        //     $contents= Contents::find($ContentsId);
        //     $arr = Contents::select('Images')->where('id' , 69)->get();
        //     $val=$arr[0];
        //     $contents->Tittle=$request->Tittle;
        //     $contents->Paragraph1=$request->component;
        //     $contents->Paragraph2=$request->componentTittle;
        //     $contents->Images=$val['Images'];
            
        // }

        if($request->MainTitlle == '')
        {
            $contents= Contents::find($ContentsId);
          
            $contents->Paragraph1=$request->Tittle;
            $contents->Paragraphh=$request->Description;
            $contents->save(); 

        }
        else{

            $contents= Contents::find($ContentsId);
            $contents->Paragraph1=$request->Tittle;
            $contents->Paragraphh=$request->Description;
            $contents->save(); 

            $maintittle= Contents::where('section_id',1)->get();
            foreach ($maintittle as $maintittle) {

                $maintittle->Tittle= $request->MainTitlle;
                $maintittle->save();
            }
          

        }
      


        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editServicess(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }


}
