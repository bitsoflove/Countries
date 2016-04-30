
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">{{ trans('core::core.title.non translatable fields') }}</h3>
    </div>


    <div class="box-body">
        <p>
            
                   @include('asgardgenerators::partials.fields.text', [
                       'title' => 'Title',
                       'name' => 'title',
                       'value' => $countryTranslation->title,
                       'placeholder' => '',
                       'is_translation' => 0
                   ])


            
                   @include('asgardgenerators::partials.fields.select', [
                       'title' => 'Country',
                       'name' => 'country_id', //country,//'countries',
                       'options' => $countries->lists('title','id')->toArray(),
                       'primary_key' => ["id"],
                       'selected' => $countryTranslation->country()->lists("id","id")->toArray(),
                       'classes' => 'select2',
                   ])


        </p>
    </div>
</div>