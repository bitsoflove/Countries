
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">{{ trans('core::core.title.non translatable fields') }}</h3>
    </div>


    <div class="box-body">
        <p>
            
                   @include('asgardgenerators::partials.fields.text', [
                       'title' => 'Name',
                       'name' => 'name',
                       'value' => $city->name,
                       'placeholder' => '',
                       'is_translation' => 0
                   ])


            
                   @include('asgardgenerators::partials.fields.text', [
                       'title' => 'Postcode',
                       'name' => 'postcode',
                       'value' => $city->postcode,
                       'placeholder' => '',
                       'is_translation' => 0
                   ])


            
                   @include('asgardgenerators::partials.fields.text', [
                       'title' => 'Lat',
                       'name' => 'lat',
                       'value' => $city->lat,
                       'placeholder' => '',
                       'is_translation' => 0
                   ])


            
                   @include('asgardgenerators::partials.fields.text', [
                       'title' => 'Lng',
                       'name' => 'lng',
                       'value' => $city->lng,
                       'placeholder' => '',
                       'is_translation' => 0
                   ])


            
                   @include('asgardgenerators::partials.fields.select', [
                       'title' => 'Country',
                       'name' => 'country_id', //country,//'countries',
                       'options' => $countries->lists('title','id')->toArray(),
                       'primary_key' => ["id"],
                       'selected' => $city->country()->lists("id","id")->toArray(),
                       'classes' => 'select2',
                   ])


        </p>
    </div>
</div>