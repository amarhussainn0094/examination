

@section('title', 'Examination Center')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div>
    <!-- Quiz Table -->
    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <i class="fa fa-table"></i> <strong>Available Quizzes</strong>
        </div>
        <div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th><i class="fas fa-list"></i> Available Quizzes</th>
                        <th><i class="fas fa-cogs"></i> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quizzes as $index => $quiz)
                    <tr>
                        <td>
                            <span class="badge badge-danger">Quiz {{ $index + 1 }}</span>
                            {{ $quiz->title }}
                        </td>
                        <td>
                        <a href="{{ route('student.term', ['quiz_id' => $quiz->id]) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-play-circle"></i> Attend Quiz
                            </a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

