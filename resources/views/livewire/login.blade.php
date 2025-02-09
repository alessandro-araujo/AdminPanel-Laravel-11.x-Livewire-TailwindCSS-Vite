<div>
    <livewire:alert />

    <form wire:submit="login">

        <label for="email">email:</label>
        <input type="text" id="email" wire:model="email">

        <label for="password">password:</label>
        <input type="text" id="password" wire:model="password">
        <button type="submit">Login</button>
    </form>

</div>
