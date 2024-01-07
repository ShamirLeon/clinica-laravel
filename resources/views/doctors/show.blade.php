<h1>{{ $doctor->middle_name . ' ' . $doctor->surname }}</h1>
<span>Code: {{ $doctor->code }}</span><br>
<span>Birth date: {{ $doctor->birth_date }}</span><br>
<span>Address: {{ $doctor->address }}</span>
{{-- @dump($doctor) --}}
