<div>
    <h3>Editar Usuário</h3>

    <!-- O form usa wire:model para fazer o binding diretamente com o componente -->
    <form wire:submit.prevent="update({{ $userId }})">
        <label for="name">Nome:</label>
        <input type="text" id="name" wire:model="name">

        <label for="email">Email:</label>
        <input type="email" id="email" wire:model="email">

        <label for="password">Senha:</label>
        <input type="password" id="password" wire:model="password">

        <button type="submit">Editar</button>
    </form>

    @if (session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
</div>
