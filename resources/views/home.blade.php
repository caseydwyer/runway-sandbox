<x-layouts.app>
    @php
        $note = \App\Models\Note::first();
        $augmentedNote = $note->toAugmentedArray();
    @endphp
    <h3>Title (root field):</h3>
    <p>{{ $augmentedNote['title'] }}</p>

    <h3>Rating (JSON field, $augmentedNote['meta_rating']):</h3>
    <p>{!! $augmentedNote['meta_rating'] ?? '<span style="color:#F00;">NULL</span>' !!}</p>

    <h3>Rating (JSON field, $augmentedNote['meta->rating']):</h3>
    <p>{!! $augmentedNote['meta->rating'] ?? '<span style="color:#F00;">NULL</span>' !!}</p>

    <h3>Dump (original object):</h3>
    <pre>{!! var_dump($note->toArray()) !!}</pre>
</x-layouts.app>