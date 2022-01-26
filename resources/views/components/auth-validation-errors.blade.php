@props(['errors'])

@if ($errors->any())
<div {{ $attributes }}>
    <p class="text-center text-danger text-mute fw-bold mt-5 mb-0">
        {{ __('Whoops! Something went wrong.') }}
    </p>

    <p class="text-center text-warning text-mute fw-bold mt-3 mb-0">
        @foreach ($errors->all() as $error)
        <em>{{ $error }}</em>
        @endforeach
    </p>
</div>
@endif