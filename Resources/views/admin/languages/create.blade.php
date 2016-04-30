@extends('layouts.master')

@section('content-header')
<h1>
    {{ trans('countries::languages.title.create language') }}
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
    <li><a href="{{ route('admin.countries.language.index') }}">{{ trans('countries::languages.title.languages') }}</a></li>
    <li class="active">{{ trans('countries::languages.title.create language') }}</li>
</ol>
@stop

@section('styles')
{!! Theme::script('js/vendor/ckeditor/ckeditor.js') !!}
@stop

@section('content')
{!! Form::open(['route' => ['admin.countries.language.store'], 'method' => 'post']) !!}

<div class="row">
    <div class="col-md-12">



        @include('countries::admin.languages.fields-translatable')

        @include('countries::admin.languages.fields')


        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.create') }}</button>
            <button class="btn btn-default btn-flat" name="button" type="reset">{{ trans('core::core.button.reset') }}</button>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop

@section('footer')
<a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
<dl class="dl-horizontal">
    <dt><code>b</code></dt>
    <dd>{{ trans('core::core.back to index') }}</dd>
</dl>
@stop

@section('scripts')
<script type="text/javascript">
    $( document ).ready(function() {
        $(document).keypressAction({
            actions: [
                { key: 'b', route: "<?= route('admin.countries.language.index') ?>" }
            ]
        });
    });
</script>
<script>
    $( document ).ready(function() {
        $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });
    });
</script>
@stop
