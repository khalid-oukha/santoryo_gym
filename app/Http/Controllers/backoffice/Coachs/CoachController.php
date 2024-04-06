<?php

namespace App\Http\Controllers\backoffice\Coachs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coash\CoachUpdateRequest;
use App\Http\Requests\Coash\StoreCoashRequest;
use App\Models\Coach;
use App\Models\User;
use App\Repositories\Interfaces\CoachRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CoachController extends Controller
{
    protected $coachRepository;

    public function __construct(CoachRepositoryInterface $coachRepository)
    {
        $this->coachRepository = $coachRepository;
    }
    public function index()
    {
        $coashes = $this->coachRepository->paginate();
        $nbr_coachs = Coach::count();
        return view("admin/coach/index", compact("coashes", "nbr_coachs"));
    }

    public function create()
    {
        return view("admin/coach/create");
    }

    public function store(StoreCoashRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $data['lastname'] . '.' . $image->getClientOriginalExtension();

            $imagePath = $image->storeAs('public/images/uploads', $imageName);

            if ($imagePath) {
                $user->image = $imageName;
                $user->save();
            } else {
                $user->delete();
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

        if ($coach) {
            return redirect()->route('coach.index')->with('success', 'Coach created successfully.');
        } else {
            $user->delete();
            return redirect()->route('coach.index')->with('success', 'Coach created successfully.');
        }
    }

    public function destroy(Coach $coach)
    {
        $coach = $this->coachRepository->delete($coach->id);
        if ($coach) {
            return redirect()->route('coach.index')->with('success', 'Coach deleted successfully ');
        }
        return redirect()->back()->with('error', 'there is an error deleteing the coach');
    }


    public function edit(Coach $coach)
    {
        return view('admin.coach.edit', compact('coach'));
    }

    public function update(CoachUpdateRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        $coach = Coach::find($data['id']);
        $user = User::find($data['id']);
        $user->update([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $data['lastname'] . '.' . $image->getClientOriginalExtension();

            $imagePath = $image->storeAs('public/images/uploads', $imageName);

            if ($imagePath) {
                $user->image = $imageName;
                $user->save();
            } else {
                $user->delete();
                return back()->with('error', 'Failed to upload image.');
            }
        }
        $coach->update(
            [
                'cin' => $data['cin'],
                'specialization' => $data['specialization'],
                'description' => $data['description'],
            ]
        );

        return redirect()->route('coach.index')->with('success', 'coach updated');
    }
}
