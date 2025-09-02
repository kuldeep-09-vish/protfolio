<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminData;
use App\Models\AdminAbout;
use App\Models\AdminSkill;


class AdminDataController extends Controller
{

/* Admin Data */

    public function AdminData(){
        $admins = AdminData::all();
        return view('admin.admindata', compact('admins'));
    }

    public function AdminDataForm(){
        return view('admin.admindataform');
    }

    public function AdminDataSubmit(Request $request){
        $validation = $request->validate([
            'name'       => 'required|string',
            'position'   => 'required|string',
            'birthday'   => 'required|date',
            'phone'      => 'required|string|max:20',
            'email'      => 'required|email|max:255',
            'age'        => 'required|integer|min:18|max:80',
            'website'    => 'nullable|url',
            'degree'     => 'required|string',
            'city'       => 'required|string',
            'freelance'  => 'required|in:available,not available',
            'fb'         => 'nullable|url',
            'insta'      => 'nullable|url',
            'skype'      => 'nullable|string',
            'linkedin'   => 'nullable|url',
            'twitter'    => 'nullable|url',
        ]);

        
        $data = AdminData::create($validation);

        if($data){
            return redirect()->route('admindata')->with('success', 'Data Submit Successfully');
        }
        return redirect()->route('admindataform')->with('error', 'Data Submition fiald');

    }


    public function AdminDataUpdateForm($id){
        $admin = AdminData::findOrFail($id);
        return view('admin.admindataupdate', compact('admin'));
    }
    
    public function AdminDataUpdateSubmit(Request $request, $id){
        $admin = AdminData::findOrFail($id);
        
        $validation = $request->validate([
            'name'       => 'required|string',
            'position'   => 'required|string',
            'birthday'   => 'required|date',
            'phone'      => 'required|string|max:20',
            'email'      => 'required|email|max:255',
            'age'        => 'required|integer|min:18|max:80',
            'website'    => 'nullable|url',
            'degree'     => 'required|string',
            'city'       => 'required|string',
            'freelance'  => 'required|in:available,not available',
            'fb'         => 'nullable|url',
            'insta'      => 'nullable|url',
            'skype'      => 'nullable|string',
            'linkedin'   => 'nullable|url',
            'twitter'    => 'nullable|url',
        ]);

        $data = $admin->update($validation);
        
        if($data){
            return redirect()->route('admindata')
                     ->with('success', 'Admin data updated successfully!');
        }
        return redirect()->route('admindata.update.form', $id)->with('error', 'Admin data updated error!');

    }

/* Admin About */

    public function AboutData(){
        $about = AdminAbout::first();
        return view('admin.about', compact('about'));
    }

    public function AboutDataCreate(){
        return view('admin.aboutform');
    } 

 
    
    public function AboutDataSubmit(Request $request)
    {
 
        $validated = $request->validate([
        'about_heading'   => 'required|string',
        'about_desc'      => 'required|string',
        'dev_heading'     => 'required|string',
        'dev_desc'        => 'required|string',
        'last_desc'       => 'required|string',
        'happy_clients'   => 'required|integer|min:0',
        'projects'        => 'required|integer|min:0',
        'reviews'         => 'required|integer|min:0',
        'skills'          => 'required|integer|min:0',
        'about_image'    => 'nullable|image',
        ]);

        if($request->hasFile('about_image')) {
        $image = $request->file('about_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/about_images'), $imageName);

        // Add image name to validated data
        $validated['about_image'] = $imageName;
        }

        $aboutdata = AdminAbout::create($validated);


        if ($aboutdata) {
        return redirect()->route('admin.about')
                         ->with('success', 'About data created successfully.');
        }

        return redirect()->route('admin.about.form')
                     ->with('error', 'Failed to create About data.');
    }



    public function AboutDataUpdate(){

        $adminAbout = AdminAbout::first();
       
        return view('admin.aboutupdateform', compact('adminAbout'));
    } 
    
    public function AboutDataUpdateSubmit(Request $request, $id)
    {

       
        $adminAbout = AdminAbout::findOrFail($id);

        $validated = $request->validate([
        'about_heading'   => 'required|string',
        'about_desc'      => 'required|string',
        'dev_heading'     => 'required|string',
        'dev_desc'        => 'required|string',
        'last_desc'       => 'required|string',
        'happy_clients'   => 'required|integer|min:0',
        'projects'        => 'required|integer|min:0',
        'reviews'         => 'required|integer|min:0',
        'skills'          => 'required|integer|min:0',
        'about_image'     => 'nullable|image',
        ]);

        if ($request->hasFile('about_image')) {
            // Delete old image if exists
            if ($adminAbout->about_image && file_exists(public_path('uploads/about_images/' . $adminAbout->about_image))) {
            unlink(public_path('uploads/about_images/' . $adminAbout->about_image));
            }

            // Upload new image
            $image = $request->file('about_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/about_images'), $imageName);

            // Add new image name to validated data
            $validated['about_image'] = $imageName;
        }

        // Update database      
        $aboutdata = $adminAbout->update($validated);


        if ($aboutdata) {
        return redirect()->route('admin.about')
                         ->with('success', 'About data created successfully.');
        }

        return redirect()->route('admin.about.form')
                     ->with('error', 'Failed to create About data.');
    
    }
/* Admin skills */
    public function AdminSkill(){
        $skills = AdminSkill::all();
        return view('admin.skill', compact('skills'));
    }

    public function AdminSkillCreate(){
        
        return view('admin.skillcreate');
    }

    public function AdminSkillSubmit(Request $request){
        // return $request;
        $validation = $request->validate([
            'skill_name'    => 'required|string|max:255',
            'skill_percent' => 'required|numeric|min:0|max:100',
            'skill_rank'    => 'required|numeric|min:0|max:100',
        ]);

        $SkillData = AdminSkill::create($validation);

        if($SkillData){
            return redirect()->route('admin.skill')->with('success', 'Skill create sucessfully');
        }
        return redirect()->route('admin.skill.create')->with('error', 'Skill Not created');
    }

    public function SkillDelete(Request $request, $id){
        $skill = AdminSkill::find($id);

        if (!$skill) {
            return redirect()->route('admin.skill')->with('error', 'Skill not found');
        }

        $skill->delete();

        return redirect()->route('admin.skill')->with('success', 'Skill deleted successfully');
    }
}