<?php
namespace App\Http\Livewire\Exam;

use Livewire\Component;
use App\Models\Quiz;

class Terms extends Component
{
    public $quiz;
    public $questions = [];
    public $currentQuestionIndex = 0;
    public $filter = 'Objective';
    public $question_noo = 1;

    public function mount($quiz_id)
    {
        $this->quiz = Quiz::find($quiz_id);
        $this->loadQuestions();
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
        $this->loadQuestions();
        $this->currentQuestionIndex = 0; // Reset to the first question
    }

    public function loadQuestions()
    {
        if ($this->quiz) {
            $this->questions = $this->quiz->questions()
                ->where('question_category', $this->filter)
                ->where('question_no',$this->question_noo)
                ->with('options')
                ->get()
                ->toArray();
        }
    }

    public function nextQuestion()
    {
        $this->question_noo +=1;
        dd($this->question_noo);
        // $this->questions = $this->quiz->questions()
        // ->where('question_category', $this->filter)
        // ->where('question_no',$this->question_noo)
        // ->with('options')
        // ->get()
        // ->toArray();
    }

    public function previousQuestion()
    {
        if ($this->currentQuestionIndex > 0) {
            $this->currentQuestionIndex--;
        }
    }

    public function render()
    {
        return view('livewire.exam.terms', [
            'question' => $this->questions[$this->currentQuestionIndex] ?? null
        ])->layout('layouts.app');
    }
}

