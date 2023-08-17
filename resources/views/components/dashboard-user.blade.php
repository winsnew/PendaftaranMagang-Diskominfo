@auth
@if (auth()->user()->role == 'mahasiswa')
<div {{ $attributes->merge(['class' => 'flex lg:flex']) }}>
    <div class="flex mx-auto bg-slate-600">
        hello user
    </div>
</div>
@endif
@endauth