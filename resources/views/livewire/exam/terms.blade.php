

@section('title', 'Attend Quiz')
<!-- Bootstrap Icons CDN -->    
<style>
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Prevent horizontal scrolling */
    }
    .container-full {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        overflow-x: hidden; /* Prevent horizontal scrolling */
    }
    .card {
        flex: 1;
        display: flex;
        flex-direction: column;
        margin: 0;
        overflow-x: hidden; /* Prevent horizontal scrolling */
    }
    .card-body {
        flex: 1;
        overflow-y: auto;
        padding: 10px;
    }
    .table {
        margin: 0; /* Remove default margin */
        width: 100%; /* Ensure full width */
    }
    .question-number {
        width: 30px;
        text-align: right;
    }
    .question-text {
        padding-left: 10px;
        font-size: 1.25rem;
        font-weight: bold;
        /* Disable text selection */
        user-select: none;
    }
    .form-check {
        width: 100%;
    }
    .form-check-input {
        margin-right: 10px;
    }
    .form-check-label {
        display: block;
        width: 100%;
        padding: 30px 15px;
        border: 1px solid #dee2e6;
        margin-bottom: 10px;
        background-color: #f8f9fa;
        font-size: 1.1rem;
        border-radius: 5px;
    }
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .form-check-label {
            padding: 20px 10px;
            font-size: 1rem;
        }
    }
</style>
<div class="container-full">
    <div class="card">
        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <div>
                <i class="bi bi-question-circle-fill"></i> <strong>Quiz Questions</strong>
            </div>
            <div>
                <button wire:click="setFilter('Subjective')" class="btn btn-info btn-sm">
                    <i class="bi bi-fonts"></i> Subjective
                </button>
                <button wire:click="setFilter('Objective')" class="btn btn-info btn-sm">
                    <i class="bi bi-check-circle"></i> Objective
                </button>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Question</th>
                </tr>
            </thead>
            <tbody>
                @if($question)
                    <tr>
                        <td class="question-number">{{ $question['question_no'] }}</td>
                        <td class="question-text">
                            <p><strong>{{ucfirst($question['title']) }}</strong></p>
                            @if($question['question_category'] === 'Objective')
                                <div class="row">
                                    @php
                                        $optionLabel = ['a', 'b', 'c', 'd'];
                                    @endphp
                                    @foreach($question['options'] as $optionIndex => $option)
                                        <div class="col-12 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question{{ $question['id'] }}" value="{{ $option['id'] }}" id="q{{ $question['id'] }}option{{ $option['id'] }}">
                                                <label class="form-check-label" for="q{{ $question['id'] }}option{{ $option['id'] }}">
                                                    {{ $optionLabel[$optionIndex] }}. {{ $option['title'] }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if($question['question_category'] === 'Subjective')
                                <div class="form-group">
                                    <textarea class="form-control" name="question{{ $question['id'] }}" rows="3"></textarea>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
        
        <div class="card-footer d-flex justify-content-between">
            <button class="btn btn-info btn-sm"><i class="bi bi-hand-thumbs-up"></i> Mark Completed</button>
            <div>
                <button wire:click="previousQuestion" class="btn btn-success btn-sm" {{ $currentQuestionIndex === 0 ? 'disabled' : '' }}>
                    <i class="bi bi-arrow-left"></i> Previous
                </button>
                <button wire:click="nextQuestion" class="btn btn-danger btn-sm">
                    <i class="bi bi-arrow-right"></i> Next
                </button>
            </div>
        </div>
    </div>
</div>
