<h1>{{$schedule->name}}</h1>
    <h1>{{$schedule->email}}</h1>
    <h1>{{$schedule->days}}</h1>
    <h1>{{$schedule->time}}</h1>

    <form method="POST" action="{{route('store')}}" method="POST">
        @csrf
        <label for="">
            <select name="day" id="">
                
                 <option value="{{$schedule->days}}">{{$schedule->days}}</option>
                
        </select>
        </label>
        <label for="time">Enter Time:</label>
        <input type="time" value="{{$schedule->time}}" name="time" id="time-select" value="15:00" min="15:00" max="20:00" required>
        <input type="text" name="name" value="{{$schedule->name}}">
        <input type="email" name="email" value="{{$schedule->email}}">
        
        <button type="submit">Save</button>
    </form>