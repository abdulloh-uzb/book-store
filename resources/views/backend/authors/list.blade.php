<x-admin-layout heading="Authors list">
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
                                <th>Ism familiya</th>
                                <th>Yashagan yillari</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                                <tr>
                                    <td>{{ $author->id }}</td>
                                    <td>{{ $author->first_name }} {{ $author->last_name }}</td>
                                    <td>{{ $author->birth_year }} - {{$author->death_year ?? "hozirgacha"}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('author.show', $author->id) }}">View</a>
                                        <a class="btn btn-success" href="{{ route('author.edit', $author->id) }}">Edit</a>
                                        <button class="btn btn-danger">Delete</button>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>


                    </table>
                </div>
                <!-- /.card-body -->
                {{ $authors->links() }}


            </div>
            <!-- /.card -->


        </div>

    </div>
</x-admin-layout>
