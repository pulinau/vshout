<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Support\Facades\Auth;
use App\SystemUser;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show posts on the page
        $posts = Post::orderBy('updated_at','DESC')->paginate(5);
        return view('admin_panel.show_posts')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $this->validate($request,[
            'title'=>'required|string|max:191',
            'post_body'=>'required|string',
        ]);

        $post = new Post;
        $post ->title = $request ->title;
        $post ->post_body =$request ->post_body;

    //send a email about the general post
        if($post ->save()) {
            $data = [
                'post_body'=>$request->post_body,
                'title'=>$request->title,
            ];
            Mail::send('email.generalNews', $data, function ($post_body) use ($request, $data) {
                $current_user = Auth::user();

                $system_user = SystemUser::where("role_id", "==", $current_user->role_id)->orWhere("role_id", 2)->get();

                foreach ($system_user as $su) {
                    $post = new Post;
                    $post ->title = $request ->title;
                    $post_body->bcc($su->email); //for hide others email addresses
                    $post_body->subject($post->title);
                }
            });
            Session::flash('msgpst', 'Post Created Successfully!');
        }
        return redirect()->back();
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
    public function edit(Request $request, $id)
    {
        $post_find =Post::findOrFail($id);
        $post_find ->title =$request ->title;
        $post_find ->post_body =$request ->post_body;
        $post_find ->save();
        $data = [
            'post_body'=>$request->post_body,
            'title'=>$request->title,
        ];
        //send mail after updating
        Mail::send('email.generalNews', $data, function ($post_body) use ($request, $data) {
            $current_user = Auth::user();

            $system_user = SystemUser::where("role_id", "==", $current_user->role_id)->orWhere("role_id", 2)->get();

            foreach ($system_user as $su) {
                $post = new Post;
                $post ->title = $request ->title;
                $post_body->bcc($su->email); //for hide others email addresses
                $post_body->subject($post->title);
            }
        });

        Session::flash('msgupdt', 'Post Updated Successfully!');
        return redirect('admin/show_posts');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post_find = Post::findOrFail($id);
        return view('admin_panel.post_update',['post'=>$post_find]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_find = Post::findOrFail($id);
        $post_find->delete();
        Session::flash('message', 'Post Deleted Successfully!');
        return redirect()->back();
    }
}
