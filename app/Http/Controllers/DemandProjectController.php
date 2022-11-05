<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand_Project;
use Response;
use App\Notifications\subscriptionMail;

use Carbon\Carbon;
class DemandProjectController extends Controller
{
    
    public function DemandProject(Request $request){
        
        if($request->ajax()){ 
            $message="";
            $project_image="no image";
            if($request->hasFile('project_image')){
                $project_image = time() . '.' . $request->project_image->extension();
                $request->project_image->move(public_path('images'), $project_image);
                // save uploaded image filename here to your database
                // return response()->json([
                //     'message' => 'Image uploaded successfully.',
                // // 'image' => 'images/' . $project_image
                // ], 200);
                $message="Image uploaded successfully";
              
            }
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|unique:subscribers|max:255',
                'description' => 'required',
                'project'=>"required",
            ]);
           
            $susbcriber=Demand_Project::create([
               
                "name"=>$request->name,
                "email"=>$request->email,
                "message"=>$request->message,
                "project"=>$request->project,
                "description"=>$request->description,
                "project_img"=>$project_image,
                "demande_project_date"=>Carbon::now()
            ]);
        }
        $user = Demand_Project::latest()->first(); //3 is the id of The Accountant role
        \Notification::send($user, new subscriptionMail());
        Newsletter::subscribe($user);
             return response()->json([
                    'message' => $message,
                     // 'image' => 'images/' . $project_image
                     'demande_devis'=>'vous avez demandé un devis'
                ], 200);

    }
}
