<?php namespace Modules\Countries\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Countries\Entities\Country;
use Modules\Countries\Repositories\CityRepository;
use Modules\Countries\Repositories\CountryRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Countries\Http\Requests\Country\CreateRequest;
use Modules\Countries\Http\Requests\Country\UpdateRequest;

class CountryController extends AdminBaseController
{
    /**
     * @var CountryRepository
     */
    protected $country;

    /**
     * @var CityRepository
     */
    protected $city;

    public function __construct(
        CountryRepository $country,
        CityRepository $city
    ) {
        parent::__construct();

        $this->country = $country;
        $this->city = $city;
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
     * @param Country $country
     * @return Response
     */
    public function create(Country $country)
    {
        $variables = [
            'cities' => $this->city->all(),
            'country' => $country,
        ];

        return view('countries::admin.countries.create', $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @return Response
     */
    public function store(CreateRequest $request)
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
        $variables = [
            'country' => $country,
            'cities' => $this->city->all(),
        ];

        return view('countries::admin.countries.edit', $variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Country $country
     * @param UpdateRequest $request
     * @return Response
     */
    public function update(Country $country, UpdateRequest $request)
    {
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
