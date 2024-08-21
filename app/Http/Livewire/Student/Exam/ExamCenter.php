<?php

namespace App\Http\Livewire\Student\Exam;

use Livewire\Component;
use App\Models\quiz; // Add this import statement

class ExamCenter extends Component
{
    public $quizzes;

    public function mount()
    {
        // Fetch quizzes from the database
        $this->quizzes = quiz::all();
    }

    public function render()
    {
        return view('livewire.student.exam.exam-center', [
            'quizzes' => $this->quizzes,
        ])->layout('layouts.app');
    }
}
