<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Registrations;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;




class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regs=Registrations::paginate(5);

        return view('pages.index')->with('regs',$regs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        
        //store
        
        $reg=new Registrations();
        $reg->Index_Number=$request->input('Index_Number');
        $reg->Fingerprint_ID=$request->input('Fingerprint_Id');
        $reg->Name=$request->input('Name');
        $reg->Gender=$request->input('Gender');
        $reg->Class_Name=$request->input('Class_Name');
        $reg->Parent_Name=$request->input('Parent_Name');
        $reg->Telephone_No=$request->input('Telephone');
        if($request->hasFile('Image')){
            $file = $request->file('Image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/students/',$filename);
            $reg->image=$filename;
        }
        $reg->save();
        Session::flash('success','Data were entered successfully!');
        
        
        return redirect()->route('studentinfo.show',$reg->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reg=Registrations::find($id);
        return view('pages.show')->with('reg',$reg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reg=DB::table('registrations')->where('id',$id)->first();
        return view('pages.edit',compact('reg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('registrations')->where('id',$request->id)->update([
            'Fingerprint_Id'=>$request->Fingerprint_Id,
            'Name'=>$request->Name,
            'Gender'=>$request->Gender,
            'Class_Name'=>$request->Class_Name,
            'Parent_Name'=>$request->Parent_Name,
            'Telephone_No'=>$request->Telephone,
            'Image'=>$request->Image
            
        ]);
        
        //return back()->with('success','post has been updated successfully!');
        Session::flash('success','Details has been updated successfully!');
        return redirect('studentinfo');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg= DB::table('registrations')->where('id',$id)->delete();
        Session::flash('success','Data were deleted successfully!');
        //return view('pages.delete')->with('reg',$reg);
        return redirect('studentinfo');
        
    }
}
