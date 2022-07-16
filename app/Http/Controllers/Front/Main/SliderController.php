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


class SliderController extends Controller
{
     //
    //
    /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function ShowMainSlider()
    {

      
        $query= Contents::select('content.id','content.Tittle','images.Images')
        ->join('images', 'images.id', '=', 'content.id')
        ->where('content.section_id', 8);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.Mainslider')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        
        return view('backend.indexpage.slider');  
    }

    // public function createtProjects(Request $request)
    // {

    //     $this->validate($request, [
 
    //         'Images' => 'required',
    //         'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
         
    //     ]);
        
    //     if ($request->hasFile('Images') AND $request->hasFile('Imagesb'))
    //     {
    //         $file1=$request->file('Images');
    //         $file2=$request->file('Imagesb');

    //         $name1 = time().rand(1,100).'.'.$file1->extension();
    //         $name2 = time().rand(1,100).'.'.$file2->extension();

    //         $file1->move(public_path('img'), $name1); 
    //         $file2->move(public_path('img'), $name2);    
            
    //         $contents   =   images::Create(
    //             [
    //                 'section_id'=>'16',
    //                 'images' => $name1,
    //                 'beforImg'=>$name2,
    //              ]);  
    //     }  
    //     else{
    //         return redirect()->back()->with(['success' => 'User deleted successfully !']);

    //     }
    
    //     $contents->save();
 
    // }

   public function storeMainSlider(Request $request)
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
                        
                        $contents = Contents::find($ContentsId);
                        $images = images::find($ContentsId);
                        $contents->Tittle=$request->Tittle;
                        $images->Images=$Images;
                        $contents->save();
                        $images->save();


                    }
                else{
                    $contents = Contents::find($ContentsId);
                    $contents->Tittle = $request->Tittle;
                    $contents->save();
                }
            }
            else{
                $contents = Contents::find($ContentsId);
                $contents->Tittle = $request->Tittle;
                $contents->save();
            }


    }

   public function editMainSlider(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }

    
    public function destroyProjects(Request $request)
    {
        $contents = images::where('id',$request->id)->delete();
        
        return Response()->json($contents);
    }
}
