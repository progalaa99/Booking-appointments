@foreach ($schedules as $schedule)
    <h1>{{$schedule->name}}</h1>
    <h1>{{$schedule->email}}</h1>
    <h1>{{$schedule->days}}</h1>
    <h1>{{$schedule->time}}</h1>
    <a href="{{route('edit.s',['id'=>$schedule->id])}}">edit</a>
    <a href="{{route('destroy.s',['id'=>$schedule->id])}}">delet</a>
@endforeach