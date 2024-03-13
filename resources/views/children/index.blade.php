<div class="container">
    <div class="my-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="row">
        <a href="{{ route('children.create') }}" class="btn btn-primary">Add children</a>

        <div class="col-8 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">data of birth</th>
                        <th scope="col">gender</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($allChildren as $children)
                        <tr>
                            <th scope="row">{{ $children->id }}</th>
                            <td>{{ $children->name }}</td>
                            <td>{{ $children->date_of_birth }}</td>
                            <td>{{ $children->gender }}</td>
                            <td><a href="{{ route('children.edit', $children->id) }}">رابط تحديث الطفل</a></td>
                            <td><a href="{{ route('children.show', $children) }}">عرض بيانات الطفل</a></td>
                            <td>
                                <form action="{{ route('children.destroy', $children) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">حذف بيانات الطفل</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100">there is no records on children table</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
