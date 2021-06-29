<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>All Studens</h3>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                                Add New Student
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $item)
                                        <tr>
                                            <td> {{$item->firstname}} </td>
                                            <td> {{$item->lastname}} </td>
                                            <td> {{$item->email}} </td>
                                            <td> {{$item->phone}} </td>
                                            <td>
                                                <button
                                                    type="button" class="btn btn-info"
                                                    data-toggle="modal" data-target="#updateStudentModal"
                                                    wire:click.prevent="edit({{$item->id}})">
                                                    Edit
                                                </button>
                                                <button
                                                    type="button" class="btn btn-danger"
                                                    wire:click.prevent="delete({{$item->id}})">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav> --}}
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
