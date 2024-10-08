@extends('backend.app')

@section('title', 'Aminities')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 160px;
        }

        .input-group-label {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .input-group-label .input-group-text {
            flex: 0 0 auto;
            width: auto;
            max-width: 150px;
            text-align: right;
        }

        .input-group-label .form-control {
            flex: 1;
            min-width: 0;
        }

        .mission-item {
            margin-bottom: 1rem;
            border: 1px solid #000000;
            border-radius: 0.25rem;
        }
    </style>
@endpush

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Category</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}

    <a href="{{ route('aminities.create') }}" class="btn btn-primary mb-3">Add Aminities</a>

    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    {{-- category code --}}
                    @if (session('success'))
                        <p>{{ session('success') }}</p>
                    @endif

                    <table id="aminities-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#aminities-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('aminities.index') }}", // Ensure the route name matches your route for fetching aminities
                    type: 'GET',
                },
                columns: [
                    { data: 'name', name: 'name' },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                                <a href="{{ route('aminities.edit', '') }}/${row.id}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('aminities.destroy', '') }}/${row.id}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            `;
                        },
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush
