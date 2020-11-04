<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Receivable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class ReceivableController extends Controller
{
    public function index()
    {
    }


    public function accountByClient(Client $client){

        $view_data = [
            'client'  => $client,
            'records' => Receivable::with(['project','project.client','budget'])
                            ->whereHas('project',function(Builder $query) use ($client){
                                $query->where('client_id',$client->id);
                            })->orderBy('date','asc')->get(),
        ];

        return view('receivable.account_by_client')->with($view_data);

    }

    public function accountByProject(Project $project){

    }


    public function newRecordForm(Client $client = null){


        $view_data = [
            'url_send_form'=> action('ReceivableController@doInsert'),
            'client' => $client,
            'receivable'=> null,
            'projects' => Project::whereClientId($client->id)->get()->pluck('name', 'id')->toArray(),
        ];

        return view('receivable.form')->with($view_data);

    }

    public function editRecordForm(Client $client, Receivable $receivable){


        $view_data = [
            'url_send_form'=> action('ReceivableController@doEdit'),
            'client' => $client,
            'receivable'=>$receivable,
            'projects' => Project::whereClientId($client->id)->get()->pluck('name', 'id')->toArray(),
        ];

        return view('receivable.form')->with($view_data);

    }


    public function doInsert(Request $request){

        $receivable = new Receivable();
        $receivable->type = $request->get('type');
        $receivable->project_id = $request->get('project_id');
        $receivable->date = $request->get('date');
        $receivable->amount = $request->get('amount');
        $receivable->comments = $request->get('comments');

        $receivable->save();

        return redirect('account/client/'.$receivable->project->client_id);

    }

    public function doEdit(Request $request){

        $receivable = Receivable::findOrFail($request->id);

        $receivable->type = $request->get('type');
        $receivable->project_id = $request->get('project_id');
        $receivable->date = $request->get('date');
        $receivable->amount = $request->get('amount');
        $receivable->comments = $request->get('comments');

        $receivable->save();

        return redirect('account/client/'.$receivable->project->client_id);

    }

    public function doDelete(Receivable $receivable){

        $receivable->delete();

        return redirect('account/client/'.$receivable->project->client_id);

    }

}
