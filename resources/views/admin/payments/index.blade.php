@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endsection

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Online Payments</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex d-block justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title my-2">Online Payments</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="tradeTable" class="table">
                            <thead>
                            <tr>
                                <th><i class="fas fa-list-ul"></i></th>
                                <th>Reference</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#tradeTable').DataTable({
                "processing": true,
                "serverSide": true,
                "searching": true,
                "ajax":{
                    "url": "{{ route('admin.payments.ajax') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{ _token: "{{csrf_token()}}"}
                },
                "columns": [
                    { "data": "sn" },
                    { "data": "reference" },
                    { "data": "email", "orderable": false },
                    { "data": "type" },
                    { "data": "amount" },
                    { "data": "date" },
                    { "data": "status" },
                    { "data": "action", "orderable": false  }
                ],
                "lengthMenu": [50, 100, 200, 500],
                "order": [[ 5, "desc" ]]
            });
        });
    </script>
@endsection
