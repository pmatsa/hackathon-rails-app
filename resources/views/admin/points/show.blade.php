@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.point.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.points.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.id') }}
                        </th>
                        <td>
                            {{ $point->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.name') }}
                        </th>
                        <td>
                            {{ $point->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.latitude') }}
                        </th>
                        <td>
                            {{ $point->latitude }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.longitude') }}
                        </th>
                        <td>
                            {{ $point->longitude }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.description') }}
                        </th>
                        <td>
                            {!! $point->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.point.fields.sensors') }}
                        </th>
                        <td>
                            @foreach($point->sensors as $key => $sensors)
                                <span class="label label-info">{{ $sensors->eui }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.points.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#poi_maintenance_events" role="tab" data-toggle="tab">
                {{ trans('cruds.maintenanceEvent.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="poi_maintenance_events">
            @includeIf('admin.points.relationships.poiMaintenanceEvents', ['maintenanceEvents' => $point->poiMaintenanceEvents])
        </div>
    </div>
</div>

@endsection