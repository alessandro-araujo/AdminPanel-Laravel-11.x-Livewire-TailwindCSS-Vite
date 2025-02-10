<div>

    <livewire:navbar />


  <!-- Conteúdo principal -->
  <div class="pt-[7rem] flex items-center justify-center">
      <div class="bg-white rounded-lg shadow-md p-8 w-[90%] max-w-[74.4rem]">
        <p>Bem-vindo, {{ $userName }}!</p>
        <livewire:alert />
      <!-- Campo de pesquisa -->
      <div class="mb-4">
        <label for="search" class="block text-gray-700 font-medium mb-2"></label>
        <input type="text"
          id="search"
          placeholder="Pesquise por ID, Nome ou E-mail"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          oninput="filterTable()"
        />
      </div>

      <!-- Tabela -->
      <table class="table-auto w-full border-collapse border border-gray-300 text-left">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Nome</th>
            <th class="border border-gray-300 px-4 py-2">E-mail</th>
            <th class="border border-gray-300 px-4 py-2 text-center">#</th>
          </tr>
        </thead>
        <tbody id="tableBody" class="text-gray-700">
        @foreach($users as $user)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $user->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="{{ route('user.show', ['id' => $user->id]) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-xl text-sm font-medium shadow-md transition-all duration-300">
                            Editar
                        </a>
                        <form method="POST" wire:submit.prevent="destroy({{ $user->id }})" class="inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl text-sm font-medium shadow-md transition-all duration-300"
                                onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                                Apagar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>


  <script>
    function filterTable() {
      const searchValue = document.getElementById('search').value.toLowerCase();
      const tableRows = document.querySelectorAll('#tableBody tr');

      tableRows.forEach(row => {
        const rowText = row.textContent.toLowerCase();
        row.style.display = rowText.includes(searchValue) ? '' : 'none';
      });
    }
  </script>
</div>
