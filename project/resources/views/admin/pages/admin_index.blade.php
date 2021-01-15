@extends('user.layout.index_layout')

@section('content')
    <form action="{{ route('post_button') }}" method="post">
        @csrf
        <div class="form-row align-items-center">
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Titel</label>
                <input type="text" class="form-control mb-2 @error('title') is-invalid @enderror" id="inlineFormInput" name="title" placeholder="Titel">
            </div>
            <div class="col-auto">
                <label class="sr-only" for="textfield">Omschrijving</label>
                <textarea type="text" class="form-control mb-2 @error('description') is-invalid @enderror" id="textfield" name="description" placeholder="Omschrijving"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Opslaan</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table">
            <tbody>
            @foreach($items as $key => $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{!! $item->description !!}</td>
                    <td><a href="{{ url('/delete/' . $item->id) }}" class="btn btn-danger btn-md">Verwijderen</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
