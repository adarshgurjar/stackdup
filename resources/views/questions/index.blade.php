@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Questions</div>

                <div class="panel-body">
                   @foreach($questions as $question)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">{{ $question->title }}</h3>
                                {{ str_limit($question->body, 250) }}
                            </div>
                        </div>
                        <hr>
                   @endforeach
                   <div class="text-center">
                        {{ $questions->links() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
