{{-- resources/views/components/app-layout.blade.php --}}
{{-- Ini adalah komponen wrapper yang menyisipkan slot ke dalam layout --}}
@props(['header'])

@include('layouts.app', [
    'header' => $header ?? null,
    'slot' => $slot,
])
