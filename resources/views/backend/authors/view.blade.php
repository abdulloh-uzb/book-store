<x-admin-layout heading="Author">

<ul>
    <li>First name: {{$author->first_name}}</li>
    <li>Last name: {{$author->last_name}}</li>
    <li>{{$author->birth_year}} - {{$author->death_year ?? "hozirgacha"}}</li>
</ul>

<h4>Kitoblari: </h4>
<ul>
    @foreach ($author->books as $book)
        <li><a href="{{route("book.show", $book->id)}}">{{$book->title}}</a></li>
    @endforeach
</ul>
</x-admin-layout>
