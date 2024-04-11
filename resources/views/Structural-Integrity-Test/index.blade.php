@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a href="/Structural-Integrity-Test/create" class="btn btn-primary">Create post</a>
                {{-- <a href="/post/trash" class="btn btn-danger">Trash</a> --}}
            </div>

            <br><br>
            <h2 class="card-title">All posts</h2>

            <div class="table-responsive">
                <table id="order-listing" class="table">
                    @if($StructuralIntegrityTests && $StructuralIntegrityTests->count() > 0)    
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($StructuralIntegrityTests as $StructuralIntegrityTest)   
                        <tr>
                            <td>{{ $StructuralIntegrityTest->title }}</td>
                            <td>
                                <a href="/Structural-Integrity-Test/{{ $StructuralIntegrityTest->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td>
                                <form action="/Structural-Integrity-Test/{{ $StructuralIntegrityTest->id }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                    <tbody>
                        <tr>
                            <td colspan="3">You have no posts</td>
                        </tr>
                    </tbody>
                    @endif
                </table>
            </div>

            {{ $StructuralIntegrityTests->links() }}
        </div>
    </div>
</div>

@endsection
