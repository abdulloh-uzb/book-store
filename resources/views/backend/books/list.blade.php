<x-admin-layout heading="Books list">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nomi</th>
                                <th>Muallif</th>
                                <th>Kategoriya</th>
                                <th style="width: 40px">Soni</th>
                                <th style="width: 40px">Narxi</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author->first_name . ' ' . $book->author->first_name }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->quantity }}</td>
                                    <td><span class="badge bg-danger">{{ $book->price }} UZS</span></td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('book.show', $book->id) }}">View</a>
                                        <a class="btn btn-success" href="{{ route('book.edit', $book->id) }}">Edit</a>
                                        <button class="btn btn-danger">Delete</button>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>


                    </table>
                </div>
                <!-- /.card-body -->
                {{ $books->links() }}


            </div>
            <!-- /.card -->


        </div>

    </div>

</x-admin-layout>
