<x-app-layout>
    <x-slot name="header">
      Quziler
    </x-slot>
<div class="card-body">
  <h5 class="card-title"></h5>
    <a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Quiz Ekle</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Quiz</th>
          <th scope="col">Durum</th>
          <th scope="col">Bitiş Tarihi</th>
          <th scope="col">İşlemler</th>
        </tr>
      </thead>
      <tbody>
        @foreach($quizzes as $quiz)
        <tr>
          <th>{{$quiz->title}}</th>
          <td>{{$quiz->status}}</td>
          <td>{{$quiz->finishedAt}}</td>
          <td>
            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt "></i></a>
            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
          </td>
        </tr>
         @endforeach
      </tbody>
    </table>
  </div>
  {{$quizzes->links()}}


</x-app-layout>
