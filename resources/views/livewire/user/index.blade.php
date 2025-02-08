<div>

    <p>Bem-vindo, {{ $userName }}!</p>

    <form wire:submit="logout">

    <button type="submit">logout</button>
    </form>


    <div>
        <h3>Lista de Usuários</h3>
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
    </div>
</div>
