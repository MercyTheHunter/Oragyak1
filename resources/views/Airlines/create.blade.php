@extends("layout")
@section("content")
<form action="/airlines" method="POST">
    @csrf
    <div class="airline">
        <label for="name" class="airline">Airline name</label>
        <input type="text" class="airline" name="name" id="name" placeholder="Airline name">
    </div>
    <div class="airline">
        <label for="origin" class="airline">Country of origin</label>
        <input type="text" class="airline" name="origin" id="origin" placeholder="Country of origin">
    </div>
    <button type="submit" class="button">Submit</button>
</form>
@endsection