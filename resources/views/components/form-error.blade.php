@props(['name'])

@error($name)
    <p class="text-red-500 text-xs font-semibold mt-3 ml-3">{{ $message }}</p>
@enderror