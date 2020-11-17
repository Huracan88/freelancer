<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use Livewire\Component;

class ExpensesForm extends Component
{
    public $expense;
    public $clients;

    public $client_id;
    public $date;
    public $description;
    public $comments;
    public $status;
    public $amount;

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
        if($this->expense == null) {
            $this->expense = New Expense();
            $this->date = \Carbon\Carbon::today()->format('Y-m-d');
            $this->status = 'paid';
            $this->client_id = "";
        }

        if($this->expense->exists){
            $this->client_id = $expense->client_id ;
            $this->date= $expense->date;
            $this->description= $expense->description;
            $this->comments= $expense->comments;
            $this->status= $expense->status;
            $this->amount= $expense->amount;
        }

    }


    public function render()
    {
        return view('livewire.expenses-form');
    }


    public function submitForm(){

        $this->validate();

        if($this->client_id == "") $this->client_id = null;

        $record = $this->expense;
        $record->client_id = $this->client_id;
        $record->description = $this->description;
        $record->amount = $this->amount;
        $record->date = $this->date;
        $record->comments = $this->comments;
        $record->status = $this->status;

        $record->save();

        $this->resetForm();
        $this->successMessage = $this->expense->exists ? 'Record edited' : 'Record added';

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
