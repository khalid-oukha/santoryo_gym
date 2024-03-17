<?php

namespace App\Http\Controllers\backoffice\Coachs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coash\StoreCoashRequest;
use App\Models\Coach;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CoachController extends Controller
{
    public function index()
    {
        $coashes = Coach::paginate(10);
        return view("admin/coach/index", compact("coashes"));
    }

    public function create()
    {
        return view("admin/coach/create");
    }

    public function store(StoreCoashRequest $request)
    {
        $data = $request->validated();
    
        // Create the user
        $user = User::create([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $data['lastname'] . '.' . $image->getClientOriginalExtension();
            
            // Store the image
            $imagePath = $image->storeAs('public/images/uploads', $imageName);
    
            if ($imagePath) {
                // Update the user's image path
                $user->image = $imageName;
                $user->save();
            } else {
                // Handle error if image upload fails
                $user->delete(); // Rollback user creation
                return back()->with('error', 'Failed to upload image.');
            }
        }
    
        // Create the coach
        $coach = Coach::create([
            'id' => $user->id,
            'cin' => $data['cin'],
            'specialization' => $data['specialization'],
            'description' => $data['description'],
            'gender' => $data['gender'],
        ]);

        if($coach)
        {
            return redirect()->route('coach.index')->with('success', 'Coach created successfully.');

        }else{
            $user->delete();
            return redirect()->route('coach.index')->with('success', 'Coach created successfully.');

        }
    
        // Return a response or redirect as needed
    }
    
    public function destroy(Coach $coach){
        // $coach = Coach::findOrFail('user_id',$user_id);
        $coach->delete();
        if($coach)
        {
            redirect()->back()->with('success','Coach deleted successfully ');
        }
        redirect()->back()->with('error','there is an error deleteing the coach');
    }



    
}
