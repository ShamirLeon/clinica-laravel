<x-layouts.app title="Doctors">
    <h1>Doctors</h1>
    <a href="{{ route('doctors.create') }}">Create new doctor</a>
    @foreach ($doctors as $doctor)
        <div>
            <a href="/doctor/{{ $doctor->id }}">Nombre: {{ $doctor->name }}</a>
            {{-- <span>Edad: {{ $doctor->age }}</span> --}}
            <p>{{ $doctor->name }}</p>
            <p>{{ $doctor->birth_date }}</p>
            <br>
            <br>
        </div>
    @endforeach
</x-layouts.app>
