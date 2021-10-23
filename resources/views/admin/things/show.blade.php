@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.thing.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.things.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.thing.fields.id') }}
                        </th>
                        <td>
                            {{ $thing->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thing.fields.type') }}
                        </th>
                        <td>
                            {{ $thing->type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thing.fields.name') }}
                        </th>
                        <td>
                            {{ $thing->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thing.fields.eui') }}
                        </th>
                        <td>
                            {{ $thing->eui }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thing.fields.installed_at') }}
                        </th>
                        <td>
                            {{ $thing->installed_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.things.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection