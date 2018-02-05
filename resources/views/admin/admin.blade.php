@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>
                    <div class="panel-body">
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            
                                        </tr>
                                    </thead>
                            </table>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('getUser') }}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'}
                    
                    
                ]
            });
        });
        </script>
@endsection
