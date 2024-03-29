<?php

namespace App\Http\Controllers;

use App\Http\Requests\Models\Lead\StoreLeadRequest;
use App\Http\Resources\LeadResource;
use App\Mail\InterestRegistered;
use App\Models\EmailLogin;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = array(
            "Content-type" => "text/csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $leads = Lead::latest()->get();
        
        $columns = array('ID', 'Email', 'Created At');

        $callback = function() use ($leads, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach($leads as $lead) {
                fputcsv($file, array($lead->id, $lead->email, $lead->created_at));
            }
            fclose($file);
        };

        return response()->streamDownload($callback, 'leads-' . date('d-m-Y-H:i:s') . '.csv', $headers);
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
    public function store(StoreLeadRequest $request)
    {
        $validated = $request->validated();

        $lead = Lead::firstOrCreate($validated);
        
        Mail::to($lead->email)
            ->queue(new InterestRegistered());

        return new LeadResource($lead);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();

        return redirect()->route('admin.dashboard');
    }
}
