<div>
    @if (session('success'))
        <div class="text-[#00a67d] text-sm mt-2 block" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="text-red-500 text-sm mt-2 block" role="alert">
            {{ session('error') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="text-red-500 text-sm mt-2 block" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
</div>
