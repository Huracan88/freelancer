<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class ClientForm extends Component
{

    public $client;

    public $name;
    public $contact;
    public $email;
    public $phone_number;

    public $successMessage;

    protected $rules = [
        'name' => 'required',
        'contact' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required|regex:/^[0-9 ]+$/',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount($client){

        if($this->client == null){
            $this->client = New Client();
        }

        if($this->client->exists){
            $this->name = $this->client->name;
            $this->contact = $this->client->contact;
            $this->email = $this->client->email;
            $this->phone_number = $this->client->phone_number   ;
        }
    }

    public function render()
    {
        return view('livewire.client.client-form');
    }

    public function submitForm(){

        $this->validate();

        $record = $this->client;
        $record->name = $this->name;
        $record->contact = $this->contact;
        $record->email = $this->email;
        $record->phone_number = $this->phone_number;

        $record->save();

        $this->resetForm();
        $this->successMessage = $this->client->exists ? 'Record edited' : 'Record added';

        return redirect('client');
    }

    public function clearSuccessMessage(){
        $this->successMessage = null;
    }

    private function resetForm(){
        $this->name = '';
        $this->contact = '';
        $this->email = '';
        $this->phone_number = '';
    }

}
