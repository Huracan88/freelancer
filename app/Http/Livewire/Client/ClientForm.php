<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class ClientForm extends Component
{

    public Client $client;

    public $successMessage;

    protected $rules = [
        'client.name' => 'required',
        'client.contact' => 'required',
        'client.email' => 'required|email',
        'client.phone_number' => 'required|regex:/^[0-9 ]+$/',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.client.client-form');
    }

    public function submitForm(){

        $this->validate();

        $this->client->save();

        $this->successMessage = 'Done!';

        return redirect('client');
    }

    public function clearSuccessMessage(){
        $this->successMessage = null;
    }


}
