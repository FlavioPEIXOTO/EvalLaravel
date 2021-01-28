<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User as User;
use App\Models\Storypost as Storypost;

class AccountController extends Controller
{
    public function compte(){
        $user = auth()->user();
        // $id = $user->id;

        //$stories = Storypost::where('user_id', $id)->firstOrFail();
        return view('compte/dashboard', compact('user'));
    }

    public function ajoutStory(){
        $user = auth()->user();

        $result = request()->validate([
            'title'=>['required'],
            'post_date'=>['required'],
            'story'=>['required'],
        ]);

        $story = new Storypost;
        $story->title = request('title');
        $story->user_id = $user->id;
        $story->post_date = request('post_date');
        $story->story = request('story');
        $story->save();
        return view ('compte/dashboard', compact('user'));
    }

    public function Storyboard(){
        $user_id = request('id');
        $stories = Storypost::where('id',$user_id)->firstOrFail();

        return view('compte/Storyboard', compact('user_id', 'stories'));
    }


    public function modifStory(){
        $story_id = request('id');

        return view('compte/modifStory', compact('story_id'));
    }

    public function postModifStory(){
        $result = request()->validate([
            'title'=>['required'],
            'post_date'=>['required'],
            'story'=>['required'],
        ]);

        $story = new Storypost;
        $story->title = request('title');
        $story->post_date = request('post_date');
        $story->story = request('story');
        $story->save();
        return view ('compte/dashboard');


    }

    public function history(){
        $story = Storypost::all();
        return view('index', compact('story'));
    }

    public function deconnexion(){
        auth()->logout();

        return view('utilisateurs/connexion');
    }
}
