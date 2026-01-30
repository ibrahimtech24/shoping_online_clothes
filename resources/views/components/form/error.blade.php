@props(['name'])

@error($name)
    <p class="text-sm text-red-600 mt-2 font-medium">
        <i class="fa-solid fa-circle-exclamation"></i>
        {{ $message }}
    </p>
@enderror
