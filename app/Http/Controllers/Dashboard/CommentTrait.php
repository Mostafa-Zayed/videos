<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\Dashboard\Comments\Store;
use App\Models\Comment;

trait CommentTrait {

    public function commentStore(Store $request){

        $data = $request->all() + ['user_id' => auth()->user()->id];
        Comment::create($data);
        return redirect()->route('dashboard.videos.edit',['id'=>$data['video_id']]);
    }

    public function commentDelete($id){

        $row = Comment::findOrFail($id);
        $row->delete();
        return redirect()->route('dashboard.videos.edit',['id'=>$row->video_id]);

    }


    public function commentUpdate($id,Store $request){

        $row = Comment::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('dashboard.videos.edit',['id'=>$row->video_id]);

    }
	
}