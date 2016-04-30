<?php namespace Modules\Countries\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Countries\Entities\Country;
use Modules\Countries\Repositories\CountryRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CountryController extends AdminBaseController
{
    /**
     * @var CountryRepository
     */
    private $country;

    public function __construct(CountryRepository $country)
    {
        parent::__construct();

        $this->country = $country;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = $this->country->all();

        return view('countries::admin.countries.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Country $country)
    {
        $cities_repository = app(\Modules\Countries\Repositories\CityRepository::class);
        $cities = $cities_repository->all();
        //$identities_repository = app(\Modules\Countries\Repositories\IdentityRepository::class);
        //$identities = $identities_repository->all();
        //$priceTypeVats_repository = app(\Modules\Countries\Repositories\PriceTypeVatRepository::class);
        //$priceTypeVats = $priceTypeVats_repository->all();
        

        $variables = [
            'cities' => $cities,
            //'identities' => $identities,
            //'priceTypeVats' => $priceTypeVats,
            'country' => $country,
        ];

        return view('countries::admin.countries.create', $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->country->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('countries::countries.title.countries')]));

        return redirect()->route(strtolower('admin.countries.country.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Country $country
     * @return Response
     */
    public function edit(Country $country)
    {
        $cities_repository = app(\Modules\Countries\Repositories\CityRepository::class);
        $cities = $cities_repository->all();
        //$identities_repository = app(\Modules\Countries\Repositories\IdentityRepository::class);
        //$identities = $identities_repository->all();
        //$priceTypeVats_repository = app(\Modules\Countries\Repositories\PriceTypeVatRepository::class);
        //$priceTypeVats = $priceTypeVats_repository->all();
        

        $variables = [
            'country' => $country,
            'cities' => $cities,
            //'identities' => $identities,
            //'priceTypeVats' => $priceTypeVats,
        ];

        return view('countries::admin.countries.edit', $variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Country $country
     * @param  Request $request
     * @return Response
     */
    public function update(Country $country, Request $request)
    {
        $all = $request->all();
        $this->country->update($country, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('countries::countries.title.countries')]));

        return redirect()->route(strtolower('admin.countries.country.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Country $country
     * @return Response
     */
    public function destroy(Country $country)
    {
        $this->country->destroy($country);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('countries::countries.title.countries')]));

        return redirect()->route(strtolower('admin.countries.country.index'));
    }
}
