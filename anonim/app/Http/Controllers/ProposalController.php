<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $proposals = Offer::where('status', 'на рассмотрении')->orderBy('created_at', 'desc')->get();
        return view('proposal.index', compact('proposals'));

    }
    public function accepted(){
        $proposals = Offer::where('status', 'принято')->orderBy('created_at', 'asc')->get();
        return view('proposal.accepted', compact('proposals'));
    }

    public function store(Request $request){
        $offer = new Offer();
        $offer->title = $request->title;
        $offer->content = $request->content;
        $offer->department = $request->department;
        $offer->status = 'на рассмотрении';
        $offer->save();
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $offer = Offer::find($id);
        $offer->status = 'принято';
        $offer->save();
        return redirect()->back();
    }
}
