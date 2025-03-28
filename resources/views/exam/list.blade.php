@extends('layouts.app')
@section('content')
    <div class="container my-5" style="min-height: 80vh;">
        <div class="row bootstrap snippets bootdeys" id="store-list">
            <div class="d-flex flex-column align-items-center">
                <h1 class="text-lg sm:text-2xl lg:text-40px text-title text-center lg:text-start fw-bold mb-5">
                    Danh sách bài thi thử
                </h1>
            </div>
            @foreach ($exams as $exam)
                <div class="col-md-6 col-xs-12">
                    <div class="panel" style="background-color: #e4e4e4; border-radius: 10px; padding: 15px; margin-bottom: 20px;">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <a href="#"><img src="https://i0.wp.com/lawsblog.london.ac.uk/wp-content/uploads/2017/10/exam-paper.jpg?fit=3648%2C2736&ssl=1" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-7">
                                    <h4 class="title-store">
                                        <strong><a href="#">{{ $exam->name }}</a></strong>
                                    </h4>
                                    <hr>
                                    <p>Thời gian làm bài: {{ $exam->time }}p</p>
                                    <p>Tổng số câu hỏi: {{ $exam->total_questions }}</p>
                                    <p>
                                        <a href="#" class="btn btn-default" disabled="" data-original-title="" title="">Cấp độ: {{ $exam->level->name}}</a>
                                        <a href="{{ route('exam.detail', $exam->id) }}" class="btn btn-warning pull-right">Làm bài ngay</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
