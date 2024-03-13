   
<div class="container">
    <div class="my-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="row">
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
                    {{-- {{ dd($child) }} --}}
                            <tr>
                                <th scope="row">{{ $child->id }}</th>
                                <td>{{ $child->name }}</td>
                                <td>{{ $child->date_of_birth }}</td>
                                <td>{{ $child->gender }}</td>
                            </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
