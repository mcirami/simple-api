<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('export') }}" method="GET" enctype="multipart/form-data">
                @csrf
                <div class="row m-5">
                    <div class="col-6">
                        <label for="start-date">Start Date</label>
                        <input name="start-date" id="start-date" class="form-control" type="date">
                    </div>
                    <div class="col-6">
                        <label for="end-date">End Date</label>
                        <input name="end-date" id="end-date" class="form-control" type="date">
                    </div>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Export Data</button>
            </form>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-bordered yajra-datatable">
                        {{--<form id="filter_form" method="POST">
                            @csrf
                            <div class="row m-5">
                                <div class="col-6">
                                    <label for="start-date">Start Date</label>
                                    <input id="start-date" class="form-control" type="date">
                                </div>
                                <div class="col-6">
                                    <label for="end-date">End Date</label>
                                    <input id="end-date" class="form-control" type="date">
                                </div>
                            </div>
                            <div class="row m-5">
                                <div class="col-12">
                                    <button type="submit" id="btn-filter" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>--}}
                        <thead>
                        <tr>
                            <th class="w-1/7 text-left p-2 border border-light-blue-500">No.</th>
                            <th class="w-1/5 text-left p-2 border border-light-blue-500">IP</th>
                            <th class="w-1/4 text-left p-2 border border-light-blue-500">Email</th>
                            <th class="w-1/6 text-left p-2 border border-light-blue-500">Source ID</th>
                            <th class="w-1/5 text-left p-2 border border-light-blue-500">Tracking ID</th>
                            <th class="w-1/4 text-left p-2 border border-light-blue-500">Timestamp</th>
                            {{--<th class="w-1/5 text-left p-2 border border-light-blue-500">Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        {{--@php $count = 0 @endphp
                        @foreach($data as $dataItem)
                            <tr @if ($count % 2 != 0) class="bg-blue-100" @endif>
                                <td class="p-2 border border-light-blue-500">{{$dataItem->ip}}</td>
                                <td class="p-2 border border-light-blue-500">{{$dataItem->email}}</td>
                                <td class="p-2 border border-light-blue-500">{{$dataItem->source_id}}</td>
                                <td class="p-2 border border-light-blue-500">{{$dataItem->tracking_id}}</td>
                                <td class="p-2 border border-light-blue-500">{{$dataItem->time_stamp}}</td>
                            </tr>
                            @php ++$count @endphp
                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
