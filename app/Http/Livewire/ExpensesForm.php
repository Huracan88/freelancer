<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use Livewire\Component;

class ExpensesForm extends Component
{

    public $client_id;
    public $date;
    public $description;
    public $comments;
    public $status;
    public $amount;

    public $expense;
    public $clients;

    public $successMessage;

    protected $rules = [
        'client_id' => 'nullable',
        'description' => 'required',
        'date' => 'required|date-format:Y-m-d',
        'comments' => 'nullable',
        'amount' => 'required|numeric',
        'status' => 'required',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount($expense){
        if($expense == null) {
            $this->date = \Carbon\Carbon::today()->format('Y-m-d');
            $this->status = 'paid';
            $this->client_id = "";
        }
    }


    public function render()
    {
        return view('livewire.expenses-form');
    }


    public function submitForm(){

        $this->validate();

        if($this->client_id == "") $this->client_id = null;

        $record = new Expense();
        $record->client_id = $this->client_id;
        $record->description = $this->description;
        $record->amount = $this->amount;
        $record->date = $this->date;
        $record->comments = $this->comments;
        $record->status = $this->status;

        $record->save();

        $this->resetForm();
        $this->successMessage = 'El registro de agregó a la base de datos';

        return redirect('expenses');
    }

    public function clearSuccessMessage(){
        $this->successMessage = null;
    }



    private function resetForm(){
        $this->client_id = '';
        $this->date = \Carbon\Carbon::now()->format('Y-m-d');;
        $this->description = '';
        $this->comments = '';
        $this->status = 'paid';
        $this->amount = '';
    }





}
