<div>
    <livewire:alert />

    <p>Bem-vindo, {{ $userName }}!</p>

    <a href="{{ route('user.create') }}" class="btn btn-primary">Cadastrar novo user</a>


    <button wire:click="logout">logout</button>

    <div>
        <h3>Lista de Usuários</h3>
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }} ({{ $user->email }})


                    <!-- <form >
                        @csrf
                        @method('post')
                        <button type="submit">delete</button>
                    </form> -->


                    <form method="POST" wire:submit.prevent="delete({{ $user->id }})">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">Apagar</button>
                    </form>



                    <!-- <button wire:click="show({{ $user->id }})">Editar</button> -->
                    <a href="{{ route('user.show', ['id' => $user->id]) }}" class="btn btn-primary">Editar</a>

                </li>
            @endforeach
        </ul>
    </div>
</div>
