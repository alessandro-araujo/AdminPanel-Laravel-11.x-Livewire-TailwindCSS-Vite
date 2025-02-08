<div>
        <h3>Lista Usuário</h3>
        <ul>
        @forelse($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @empty
            <li>Usuário não encontrado.</li>
        @endforelse
        </ul>
</div>
