<div class="container ">

    <div class="container ">
        <h1 class="my-5">Update a children Info</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('children.update', $child) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $child->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                            value="{{ $child->date_of_birth }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male" {{ $child->gender == 'male' ? 'selected' : '' }}>male</option>
                            <option value="female" {{ $child->gender == 'female' ? 'selected' : '' }}>female</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>

</div>
