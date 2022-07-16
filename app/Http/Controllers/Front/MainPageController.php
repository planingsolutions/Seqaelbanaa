<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use App\Models\Footers;
use App\Models\images;
use App\Models\Lists;
use View;
use stdClass;

use Illuminate\Http\Request;
use Noodlehaus\FileParser\Php;
use Spatie\Html\Elements\Select;
use Illuminate\Support\Collection;


class MainPageController extends Controller
{
    
    public function index(){
        $query=Contents::select('Tittle')->where('section_id', 1)->where('Paragraph3' , 1)->get();
        $serv2=Contents::select('Tittle')->where('section_id', 2)->where('id' , 142)->get();
        $serv3=Contents::select('Tittle')->where('section_id', 4)->where('id' , 145)->get();
        $serv4=Contents::select('Tittle')->where('section_id', 6)->where('id' , 146)->get();
        $slider= images::join('content', 'content.id', '=', 'images.id')
        ->where('images.section_id', 8)->get(['content.Tittle','images.Images']);
        $sliderT= Contents::select('Tittle')->where('section_id', 8)->get();
        $aboutM=Contents::select('Tittle')->where('section_id', 11)->get();
        $servM=Contents::select('Tittle')->where('section_id', 16)->get();
        $aboutCat=Contents::select('Images','Tittle','Paragraph1')->where('section_id', 12)->get();
        $project=Contents::select('id','imagess','Tittle','Paragraph1','Paragraphh')->where('section_id', 15)->get();

        $component=Contents::select('Tittle','Paragraph1')->where('section_id', 9)->get();
        $vision=Contents::select('Images','Tittle')->where('section_id', 10)->get();
        $workMain=Contents::select('Images','Tittle')->where('section_id', 13)->get();
        $workStage1=Contents::select('Tittle','Paragraph1')->where('section_id', 14)->where('id',155)->get();
        $workStage2=Contents::select('Tittle','Paragraph1')->where('section_id', 14)->where('id',156)->get();
        $workStage3=Contents::select('Tittle','Paragraph1')->where('section_id', 14)->where('id',157)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();


        return view('Frontweb.page1', compact('query','serv2','serv3','serv4','slider','sliderT','component','vision','aboutM','aboutCat','servM','project','workMain','workStage1','workStage2','workStage3','Footerdetails'));
    }

    public function serviceDep1(){
        $query=Contents::select('Tittle')->where('section_id', 1)->where('Paragraph3' , 1)->get();

        $stage1=Contents::select('Paragraph1','Paragraphh','Paragraph3')->where('section_id', 1)->where('Paragraph3' , 1)->get();
        $stage2=Contents::select('Paragraph1','Paragraphh','Paragraph3')->where('section_id', 1)->where('Paragraph3' , 2)->get();
        $stage3=Contents::select('Paragraph1','Paragraphh','Paragraph3')->where('section_id', 1)->where('Paragraph3' , 3)->get();
        $stage4=Contents::select('Paragraph1','Paragraphh','Paragraph3')->where('section_id', 1)->where('Paragraph3' , 4)->get();
        $stage5=Contents::select('Paragraph1','Paragraphh','Paragraph3')->where('section_id', 1)->where('Paragraph3' , 5)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();

        return view('Frontweb.servicepage1' ,compact('stage1','stage2','stage3','stage4','stage5','query','Footerdetails'));
    }


    public function serviceDep2(){

        $query=Contents::select('Tittle')->where('section_id', 2)->where('id' , 142)->get();
        $Mainsection=Contents::select('Tittle','Paragraph1','Images')->where('section_id', 2)->get();
        $cat1=Contents::select('id','Tittle','Paragraph1')->where('section_id', 3)->where('id', 115)->get();
        $cat2=Contents::select('id','Tittle','Paragraph1')->where('section_id', 3)->where('id', 143)->get();
        $cat3=Contents::select('id','Tittle','Paragraph1')->where('section_id', 3)->where('id', 144)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();

        return view('Frontweb.servicepage2', compact('query','Mainsection','cat1','cat2','cat3','Footerdetails'));
    }


    public function serviceDep3(){

        $query=Contents::select('Tittle')->where('section_id', 4)->where('id' , 145)->get();
        $serv3=Contents::select('id','Images','Tittle','Paragraph1')->where('section_id', 4)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();


        return view('Frontweb.servicepage3', compact('query','serv3','Footerdetails'));

    }
    public function serviceDep4(){

        $query=Contents::select('Tittle')->where('section_id', 6)->where('id' , 146)->get();
        $serv4M=Contents::select('id','Tittle','Paragraph1','Paragraphh')->where('section_id', 6)->get();
        $serv4C=Contents::select('Tittle','Paragraph1','Paragraphh','Paragraph3')->where('section_id', 7)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();

        return view('Frontweb.servicepage4', compact('query','serv4M','serv4C','Footerdetails'));

    }


    public function contactus(){
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();

        return view('Frontweb.contactus',compact('Footerdetails'));
    }
    public function AllProject(){
      
        $query=Contents::select('Tittle')->where('section_id', 1)->where('Paragraph3' , 1)->get();
        $project=Contents::select('id','imagess','Tittle','Paragraph1','Paragraphh')->where('section_id', 15)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();

        return view('Frontweb.projectMain', compact('query','project','Footerdetails'));
    }

    public function Projectdetailes($id){
        $idd=$id;
        $query=Contents::select('Tittle')->where('id', $idd)->get();
        $Projectdeta=Contents::select('Tittle','imagess','Paragraph1','Paragraphh','Paragraph4','Paragraph5')->where('id', $idd)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();

        return view('Frontweb.projectdetailes', compact('query','Projectdeta','Footerdetails'));

    }

    public function aboutus(){
        $sectionOne=Contents::select('id','Tittle','Paragraph1','Images')->where('section_id', 17)->get();
        $sectionTwo=Contents::select('id','Tittle','Paragraph1','Paragraphh','vedio')->where('section_id', 18)->get();
        $Teamwork=Contents::select('id','Tittle','Paragraph1','Images')->where('section_id', 19)->get();
        $Footerdetails=Footers::select('id','Images','Tittle','address','phone','email','facebook','whatsapp','instgram','twitter')->get();

        return view('Frontweb.page2', compact('sectionOne','sectionTwo','Teamwork','Footerdetails'));

    }

}
