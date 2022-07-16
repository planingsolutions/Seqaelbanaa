<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\contactsus;
use Illuminate\Http\Request;

class ContactContrller extends Controller
{
    //
    
    /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function contactshow(MainsectionRequest $request)
    {
        $query=contactsus::select('id','First_Name','Last_Name','phonenumber','email','message','created_at');
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.Form-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.contact.ContactForm');  
    }

       
    public function postcontact(Request $request)
    {
        $User = contactsus::create([
            'First_Name'=>$request->fname,
            'Last_Name'=>$request->lname,
            'email'=>$request->email,
            'phonenumber'=>$request->mobile,
            'message'=>$request->message,
        ]);
        return redirect()->back()->with(['success' => ' سيتم التواصل معكم للرد علي استفسارتكم']);

    }


  
   
    public function contactdelete(Request $request)
    {
        $contents = contactsus::where('id',$request->id)->delete();
      
        return Response()->json($contents);
    }

}
