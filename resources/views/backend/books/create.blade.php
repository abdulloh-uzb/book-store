<x-admin-layout heading="Add book">


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>

        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="card-body row">
                <div class="col-7">
                    <div class="form-group">
                        <label>Nomi</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Tavsifi</label>
                        <textarea type="text" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Narxi</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label>Soni</label>
                        <input type="number" class="form-control" name="quantity">
                    </div>
                    <div class="form-group">
                        <label>Yili</label>
                        <input type="number" class="form-control" name="published_year">
                    </div>
                </div>

                <div class="col-5">
                    <div class="form-group">
                        <label>Kategoriyani tanlang</label>
                        <select class="form-control select2" style="width: 100%;" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Muallifni tanlang</label>
                        <select class="form-control select2" style="width: 100%;" name="author_id">
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->first_name . ' ' . $author->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tilni tanlang</label>
                        <select class="form-control select2" style="width: 100%;" name="language_id">
                            @foreach ($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Formatni tanlang</label>
                        <select class="form-control select2" style="width: 100%;" name="format_id">
                            @foreach ($formats as $format)
                                <option value="{{ $format->id }}">{{ $format->name }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>

                {{-- <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div> --}}
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Qo'shish</button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>

</x-admin-layout>
