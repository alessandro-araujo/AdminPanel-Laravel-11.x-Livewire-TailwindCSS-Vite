<div>
    <form wire:submit="save">

        <label for="name">Nome:</label>
        <input type="text" id="name" wire:model="name">

        <label for="email">email:</label>
        <input type="email" id="email" wire:model="email">

        <label for="password">password:</label>
        <input type="password" id="password" wire:model="password">

        <button type="submit">Cadastrar</button>
    </form>
</div>
