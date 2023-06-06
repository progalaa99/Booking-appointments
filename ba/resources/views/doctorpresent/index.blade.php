<h1> {{ $days }} </h1>
<h1>{{ $start_time++ }}</h1>
<form method="POST" action="/save-time">
    @csrf
    <label for="time">Enter Time:</label>
    <input type="time" name="time" id="time" required>
    <button type="submit">Save</button>
</form>
