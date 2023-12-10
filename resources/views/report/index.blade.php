@extends('layouts.app')
@section('title')
    {{ 'Report | Library' }}
@endsection
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <h2 class="admin-heading text-center">Reports</h2>
                </div>
            </div>
            <div class="row report">
                <div class="col-md-4">
                    <div class="card border border-danger border rounded-2" style="width: 20rem;">
                        <a href="{{ route('reports.date_wise') }}" class="card-link">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-0">Date Wise Report</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border border-danger border rounded-2" style="width: 20rem;">
                        <a href="{{ route('reports.month_wise') }}" class="card-link">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-0">Monthly Wise Report</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border border-danger border rounded-2" style="width: 20rem;">
                        <a href="{{ route('reports.not_returned') }}" class="card-link">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-0">Not Returned</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
