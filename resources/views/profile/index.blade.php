@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="text-center">Profile</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td class="text-capitalize">{{ $profile->name }}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td class="text-lowecase">{{ '@' . $profile->username }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="text-lowecase">{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $profile->phone }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td class="text-capitalize">{{ $profile->address }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td class="text-capitalize">{{ $profile->gender }}</td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td class="text-capitalize">{{ $profile->level }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td class="text-capitalize"><span class="badge @if($profile->status == 'active') badge-success @else badge-secondary @endif">{{ $profile->status }}</span></td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{-- <form action="{{ route('profile.delete')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mx-1">Delete Profile</button>
                        </form> --}}
                        <a href="#" class="btn btn-sm btn-danger mx-1" data-toggle="modal" data-target="#DeleteUserModal">Delete Profile</a>
                        <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-outline-success mx-1">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="DeleteUserModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeleteUserModalTitle">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <p> --}}
                    Hi, i'm Syahrul Safarila as Admin of this website, i'm so sorry with any reason that make you want to leave :), Are you sure and want to continue ?
                {{-- </p> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                <form action="{{ route('profile.delete')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger mx-1">Delete Profile</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
