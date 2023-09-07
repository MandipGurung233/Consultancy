<?php

namespace App\Http\Controllers;

use App\Events\queryAnswer;
use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function contact(Request $request){
            $request->validate([
                'name'=>['required'],
                'number' =>['required','digits:10','numeric'],
                'email' => ['required'],
                'textarea' => ['required']
            ],
            [
                'name.required' => 'Please enter your name',
                'number.required' => 'Please enter your number',
                'number.regex' => 'Please enter 10 digit number',
                'email.required' => 'Please enter your email',
                'textarea.required' => 'Please enter your queries' 
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->number = $request->number;
            $contact->email = $request->email;
            $contact->textarea = $request->textarea;
            $contact->save();
            return redirect()->back()->with('status','Your queries has been recieved');
    }

    public function adminContact(){
        //$contacts = Contact::onlyTrashed()->get();
        $contacts = Contact::all();
        return view ('admin.contact',compact('contacts'));
    }

    public function reply($id){
        $contact = Contact::findOrFail($id);
        $email = $contact->email;      
        $query = $contact->textarea;
        $reply = $contact->answer;
        return view('admin.contactReply',compact('email','query','reply', 'id'));
    }

    public function replyContact(Request $request, $id){

        $contact = Contact::findOrFail($id);
        $contact->answer = $request->input('answer');
        $contact->update();

        $email = $contact->email;
        $answer = $contact->answer;
        $subject = $request->subject;
        event(new queryAnswer($email,$answer,$subject));
        
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        
        return redirect('adminContact')->with('status','Your reply has been mailed!');
       
    }

    public  function trash(){
        $contacts = Contact::onlyTrashed()->get();
        return view ('admin.trash',compact('contacts'));
    }

    public function restoreContact($id){
        $contact = Contact::onlyTrashed()->findOrFail($id);
        $contact->restore();
        return redirect()->back()->with('status','Restored !');
    }

    public function deletePermanent($id){
        $contact = Contact::onlyTrashed()->findOrFail($id);
        $contact->forceDelete();
        return redirect()->back()->with('status','Deleted Permanently !');
    }
}
