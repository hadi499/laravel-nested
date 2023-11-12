@props(['category'])

<div>
    {{$category->title}} {{$category->id}}

    @foreach ($category->children as $child)
    <div class="ms-4">
        <x-category-item :category="$child" />
    </div>

    @endforeach
</div>