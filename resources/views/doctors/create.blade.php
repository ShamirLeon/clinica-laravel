<h1>Create new doctor</h1>
<form action="{{ route('doctors.store') }}" method="POST">
    @csrf
    <label for="code">
        Código
        <input name="code" type="text">
    </label><br>
    <label for="name">
        Primer Nombre
        <input name="name" type="text">
    </label><br>
    <label for="middle_name">
        Segundo Nombre
        <input name="middle_name" type="text">
    </label><br>
    <label for="surname">
        Primer Apellido
        <input name="surname" type="text">
    </label><br>
    <label for="second_surname">
        Segundo Apellido
        <input name="second_surname" type="text">
    </label><br>
    <label for="birth_date">
        Fecha de nacimiento
        <input name="birth_date" type="date">
    </label><br>
    <label for="address">
        Dirección
        <input name="address" type="text">
    </label><br>
    <label for="specialty_id">
        Especialidad ID
        <input name="specialty_id" type="number">
    </label><br>
    <label for="contract_id">
        Contrato ID
        <input name="contract_id" type="number">
    </label><br>
    <label for="contract_id">
        Contrato ID 2
        <input name="contract_id" type="select">
    </label><br>

    <button type="submit">Crear</button>
</form>
