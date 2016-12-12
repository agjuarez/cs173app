<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AnnouncementController extends Controller
{
    public function __construct()
    {
      $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all announcements
        $announcements = Announcement :: all();
        return view('announcements.index') -> with ('announcements', $announcements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request,[
          'title' => 'required',
          'content' => 'required',

        ]);
        Announcement :: create($request->all());
        return redirect('announcements/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement :: find($id);
        return view('/announcements/show') -> with ('announcement', $announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = Announcement:: find($id);
        return view('announcements/edit') -> with ('announcement', $announcement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this-> validate($request,[
        'title' => 'required',
        'content' => 'required',

      ]);

      $announcement = Announcement::find($id);
      $announcement->title = $request->input('title');
      $announcement->content = $request->input('content');
      $announcement->save();
      return view('announcements/show')-> with ('announcement',$announcement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = Announcement:: find($id);

        $announcement ->delete();

        return redirect('announcements/');
    }
}
