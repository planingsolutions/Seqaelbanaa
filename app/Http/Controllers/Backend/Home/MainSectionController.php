<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Repositories\Backend\MainsectionRepo;
use Illuminate\Support\Facades\View;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class MainSectionController extends Controller
{
   /**
     * @var \App\Repositories\Backend\MainsectionRepo
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\MainsectionRepo $repository
     */
    public function __construct(MainsectionRepo $repository)
    {
        $this->repository = $repository;
        View::share('js', ['Main-section']);
    }
    
  
    /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function index(MainsectionRequest $request)
    {
        
        $query=Contents::select('id','Images','Tittle','Paragraph1','updated_at','created_at')->where('section_id', 1);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'main-action')
            // ->addColumn('actions', function ($Contents) {
            //     return $Contents->action_buttons;
            // })
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.Home.index');

     
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {
        //


        if ($request->hasFile('Images'))
        {
            $file =$request->file('Images');
            $text =time().".".$file->clientExtension();
            $file ->storeAs('img/',$text);

            $contents   =   Contents::Create(
            [
                'section_id'=>'1',
                'Tittle' => ['ar'=>$request->Tittle , 'en'=>$request->Tittle], 
                'Paragraph1' =>['en'=>$request->Description,'ar'=>$request->Description],
                'Paragraph2'=>'',
                'Paragraph3'=>'',
                'vedios'=>'',
                'Images' => $text
             ]);           
        }else{
            $contents   =   Contents::Create(
                [
                    'section_id'=>'1',
                    'Tittle' => ['ar'=>$request->Tittle , 'en'=>$request->Tittle], 
                    'Paragraph1' =>['en'=>$request->Description,'ar'=>$request->Description],
                    'Paragraph2'=>'',
                    'Paragraph3'=>'',
                    'vedios'=>'',
                    'Images' => ''
                ]);           
            }
            $contents->save();
        return redirect()->back()->with(['success' => 'User deleted successfully !']);

    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $ContentsId = $request->id;
        if ($request->hasFile('images'))
        {
            $file =$request->file('images');
            $text =time().".".$file->clientExtension();
            $file ->storeAs('img/',$text);
            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description;
            $contents->Images=$text;
          
        }
        else{
            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description;
            $contents->Images='';
    
        }
        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

   
   
    /**
     * @param \App\Models\Contents $contents
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return \App\Http\Responses\Backend\MainHome\EditResponse
     */
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::where($where)->first();
      
        return Response()->json($company);
    }

   
    /**
     * @param \App\Models\Contents $Contents
     * @param \App\Http\Requests\Backend\Home\UpdateMain $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Contents $contents , UpdateMain $request )
    {
        //
        $this->repository->update($contents, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.mainsection.index'), ['flash_success' => __('alerts.backend.blog-category.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param \App\Http\Requests\Backend\Home\DeleteMainsection $request

     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contents = contents::where('id',$request->id)->delete();
      
        return Response()->json($contents);
    }


}
