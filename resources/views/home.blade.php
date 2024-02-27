@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $dataTable->table() }}
    </div>
@endsection

@push('scripts')
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    {{-- BEGIN: Datatable --}}
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    {{-- END: Datatable --}}


    {{-- BEGIN: Datatable-buttons --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {{-- END: Datatable-buttons --}}

    {{-- END: Datatable-scroller --}}
    <script src="https://cdn.datatables.net/scroller/2.4.0/js/dataTables.scroller.js"></script>
    <script src="https://cdn.datatables.net/scroller/2.4.0/js/scroller.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.4.0/css/scroller.dataTables.css">
    {{-- END: Datatable-scroller --}}

    {{ $dataTable->scripts() }}
@endpush
