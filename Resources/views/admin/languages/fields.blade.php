
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">{{ trans('core::core.title.non translatable fields') }}</h3>
    </div>


    <div class="box-body">
        <p>
            
                   @include('asgardgenerators::partials.fields.text', [
                       'title' => 'Slug',
                       'name' => 'slug',
                       'value' => $language->slug,
                       'placeholder' => '',
                       'is_translation' => 0
                   ])


        </p>
    </div>
</div>