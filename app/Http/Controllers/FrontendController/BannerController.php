<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::all();
        return view('AdminDashboard.Banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.Banner.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $imageExtension=$request->image->getClientOriginalExtension();
        $image=$request->name.'.'.$imageExtension;

    $request->image->move('bannerImages',$image);

 // $imageName=$request->images->getClientOriginalExtension();
 //         $image=$request->brand_name.'.'.$imageName;
 //        $request->images->move('brandImages',$image);

       $data=[
            'name'=>$request->name,
            'image'=>$image,
       ];

       Banner::firstOrCreate($data);
       return redirect()->route('banner.index')->with('message','Brand Added Successfully');;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   

 $n_image = $request->file('new_image');

    


 $banners=DB::table('banners')->select('*')
         ->where('banners.banner_id','=',$id)
        ->get(); 
    
            if($banners->isNotEmpty()){

            $data=[
            'name'=>$request->name,
            
       ];

             Banner::where('banner_id','=',$id)->Update($data);
    
                
                
                $banners=Banner::where('banner_id','=',$id)->get();


                if($n_image != ""){

            unlink('bannerImages/'.$request->image);

             $imageName=$n_image->getClientOriginalExtension();
         $image=$request->name.'.'.$imageName;
        $n_image->move('bannerImages',$image);

            
        $media=[

                    
                        'image'=>$image,
                ];

                Banner::where('banner_id','=',$id)->Update($media);

         
            
        }else{

            

$media=[

                    
                        'image'=>$image,
                ];

                Banner::where('banner_id','=',$id)->Update($media);

        }
                 return  redirect()->back()->with('message','Banner Updated Successfully');
}
else{
    return $request->redirect()->back()->with('message','No Banner is available');
}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $banner->delete();
    }
}
