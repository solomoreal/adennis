<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bio;
use Mail;
use Notification;
use App\Notifications\MailSent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['bio','checkStaff','postContact']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('admin');
    }
    
    public function checkStaff(Request $request){
        $id = $request->bio_id;
        $bio = Bio::where('bio_id', $id)->first();
        return view('userBio',compact('bio'));
    }

    public function bio(Request $request, $id){
        $bio = Bio::where('bio_id', $id)->first();
        return view('userBio',compact('bio'));
    }

    public function bios(){
        $bios = Bio::latest()->paginate(10);
        $count = 0;
        //dd($bios);
        return view('all_bios',compact('bios','count'));
    }

    public function storeBios(Request $request){
        //return $request->all();
        $this->validate($request,[

        ]);
        $bio = new Bio;
        $bio->age = $request->age;
        $bio->name = $request->name;
        $bio->address = $request->address;
        $bio->email = $request->email;
        $bio->sex = $request->sex;
        $bio->bio_id = uniqid(time());
        $bio->phone = $request->phone;
        $bio->nationality = $request->nationality;
        $bio->completed_contracts = $request->completed_contracts;
        $bio->ongoing_contracts = $request->ongoing_contracts;
        $bio->dispatchment_location = $request->dispatchment_location;
        $bio->employment_year = $request->employment_year;
        $bio->position = $request->position;
        $bio->save();

        if(isset($request->passport)){
            $bio->addMedia($request->passport)->toMediaCollection('passport');
        }

        if(isset($request->id_card)){
            $bio->addMedia($request->id_card)->toMediaCollection('id_card');
        }

        return redirect(route('bios'));

    }

    public function remove($id){
        $bio = Bio::findOrFail($id);
        $bio->delete();
        return back();
    }

    public function postContact(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'subject' => 'min:3',
            'body' => 'string',
            'name' => 'string'
        ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->body,
            'name' => $request->name
        ];

        Mail::send('email.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mail@mail.com');
            $message->subject($data['subject']);
        });

        Notification::route('mail', $request->email)
            ->notify(new MailSent());
            return back();
    }
}
