<?php

namespace App\Http\Controllers;

use App\Models\admain;
use App\Http\Requests\StoreadmainRequest;
use App\Http\Requests\UpdateadmainRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Crypt;
use  App\Models\images;
use App\Models\time;

class AdmainController extends BaseController
{
    public function Add(Request $req)
    {
        // $req->validate([
        //     'image1' => 'required',
        //     'image2' => 'required',
        //     'image3' => 'required',
        //     'image4' => 'required',
        //     'tool1' => 'required',
        //     'tool2' => 'required',
        //     'tool3' => 'required',
        //     'tool4' => 'required',
        //     'describtion' => 'required',

        // ]);

        $images = new images();
        if ($req->hasFile('image1')) {
            $image1 = $req->file('image1')->Move('img', $req->image1->getClientOriginalName());
            $images->image1 = $image1;
        }
        if ($req->hasFile('image2')) {
            $image2 = $req->file('image2')->Move('img', $req->image2->getClientOriginalName());
            $images->image2 = $image2;
        }
        if ($req->hasFile('image3')) {
            $image3 = $req->file('image3')->Move('img', $req->image3->getClientOriginalName());
            $images->image3 = $image3;
        }
        if ($req->hasFile('image4')) {
            $image4 = $req->file('image4')->Move('img', $req->image4->getClientOriginalName());
            $images->image4 = $image4;
        }
        if ($req->hasFile('tool1')) {
            $tool1 = $req->file('tool1')->Move('img', $req->tool1->getClientOriginalName());
            $images->tool1 = $tool1;
        }
        if ($req->hasFile('tool2')) {
            $tool2 = $req->file('tool2')->Move('img', $req->tool2->getClientOriginalName());
            $images->tool2 = $tool2;
        }

        if ($req->hasFile('tool3')) {
            $tool3 = $req->file('tool3')->Move('img', $req->tool3->getClientOriginalName());
            $images->tool3 = $tool3;
        }
        if ($req->hasFile('tool4')) {
            $tool4 = $req->file('tool4')->Move('img', $req->tool4->getClientOriginalName());
            $images->tool4 = $tool4;
        }

        $images->describtion = $req->describtion;
        $images->user_id = 1;
        $images->save();
        return redirect("/tools")->with('success', 'Tools has been added successfully');
    }

    public function Time(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'day' => 'required',
            'hour' => 'required',
            'price' => 'required',
        ]);

        $time = new time();
        $time->date = $req->date;
        $time->day = $req->day;
        $time->hour = $req->hour;
        $time->price = $req->price;
        $time->user_id = 1;
        $time->save();
        return redirect("time")->with('success', 'Time has been added successfully');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreadmainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadmainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admain  $admain
     * @return \Illuminate\Http\Response
     */
    public function show(admain $admain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admain  $admain
     * @return \Illuminate\Http\Response
     */
    public function edit(admain $admain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateadmainRequest  $request
     * @param  \App\Models\admain  $admain
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateadmainRequest $request, admain $admain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admain  $admain
     * @return \Illuminate\Http\Response
     */
    public function destroy(admain $admain)
    {
        //
    }
}
