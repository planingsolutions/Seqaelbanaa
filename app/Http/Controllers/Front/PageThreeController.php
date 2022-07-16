<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class PageThreeController extends Controller
{
   
    /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function index(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','Paragraph1','Paragraph2')->where('section_id', 1);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.main-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.Page3.index');  
    }


    public function create(Request $request)
    {
        //
        
        $this->validate($request, [

            'Images' => 'required',
            'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
            

        ]);

        if ($request->hasFile('Images'))
        {


            foreach($request->file('Images') as $i =>$image)
            {

                $text =time().".".$image->clientExtension();
                $image ->storeAs('img/',$text);
                $Images[]= $text;
            }
            $contents   =   Contents::Create(
                [
                    'section_id'=>'2',
                    'Tittle' => ['ar'=>$request->Tittle , 'en'=>$request->Tittle], 
                    'Paragraph1' =>['en'=>$request->Description,'ar'=>$request->Description],
                    'Paragraph2'=>['en'=>$request->subDescription,'ar'=>$request->subDescription],
                    'Paragraph3'=>'',
                    'vedios'=>'',
                    'Images' => $Images
                 ]);     
        }  
        else{
            $contents   =   Contents::Create(
                [
                    'section_id'=>'2',
                    'Tittle' => ['ar'=>$request->Tittle , 'en'=>$request->Tittle], 
                    'Paragraph1' =>['ar'=>$request->Description,'en'=>$request->Description],
                    'Paragraph2'=>['ar'=>$request->subDescription,'en'=>$request->subDescription],
                    'Paragraph3'=>'',
                    'vedios'=>'',
                    'Images' => ''
                ]);           
            }
            $contents->save();
        return redirect()->back()->with(['success' => 'User deleted successfully !']);
    }
    public function store(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->hasFile('Images'))
        {
            foreach($request->file('Images') as $image)
            {
                $text =time().".".$image->clientExtension();
                $image ->storeAs('img/',$text);
                $Images[]= $text;
            }
            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->component;
            $contents->Paragraph2=$request->componentTittle;
            $contents->Images=$Images;         
        }
        else{
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' , 69)->get();
            $val=$arr[0];
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->component;
            $contents->Paragraph2=$request->componentTittle;
            $contents->Images=$val['Images'];
            
        }
        $contents->save(); 
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }

    public function destroy(Request $request)
    {
        $contents = contents::where('id',$request->id)->delete();
        return Response()->json($contents);
    }

}
