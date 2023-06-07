<h1> {{ $days }} </h1>
<h1>{{ $start_time }}</h1>
<form method="POST" action="{{route('store')}}" method="POST">
    @csrf
    <label for="">
        <select name="day" id="">
            @foreach ($days as $day)
             <option value="{{$day->days}}">{{$day->days}}</option>
            @endforeach
    </select>
    </label>
    <label for="time">Enter Time:</label>
    <input type="time" name="time" id="time-select" value="15:00" min="15:00" max="20:00" required>
    
    <button type="submit">Save</button>
</form>

<script>
    // تحديد وقت البداية والنهاية المسموح بهما
var startTime = "20:00";
var endTime = "09:00";

// الحصول على عنصر select
var selectElement = document.getElementById("time-select");

// حلقة لتفعيل وتعطيل الخيارات بناءً على الوقت المحدد
for (var i = 0; i < selectElement.options.length; i++) {
  var option = selectElement.options[i];
  var optionTime = option.value;
  
  if (optionTime < startTime || optionTime > endTime) {
    option.disabled = true;
  }
}

</script>
