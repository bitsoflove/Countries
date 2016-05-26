<?php namespace Modules\Countries\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Countries\Entities\City;
use Modules\Countries\Repositories\CityRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Countries\Repositories\CountryRepository;
use Modules\Countries\Http\Requests\City\CreateRequest;
use Modules\Countries\Http\Requests\City\UpdateRequest;

class CityController extends AdminBaseController
{
    /**
     * @var CityRepository
     */
    protected $city;

    /**
     * @var CountryRepository
     */
    protected $country;

    public function __construct(
        CityRepository $city,
        CountryRepository $country
    ) {
        parent::__construct();

        $this->city = $city;
        $this->country = $country;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = $this->city->all();

        return view('countries::admin.cities.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param City $city
     * @return Response
     */
    public function create(City $city)
    {
        $variables = [
            'city' => $city,
            'countries' => $this->country->all(),
        ];

        return view('countries::admin.cities.create', $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @return Response
     */
    public function store(CreateRequest $request)
    {
        $this->city->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('countries::cities.title.cities')]));

        return redirect()->route(strtolower('admin.countries.city.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  City $city
     * @return Response
     */
    public function edit(City $city)
    {
        $variables = [
            'city' => $city,
            'countries' => $this->country->all(),
        ];

        return view('countries::admin.cities.edit', $variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  City $city
     * @param UpdateRequest $request
     * @return Response
     */
    public function update(City $city, UpdateRequest $request)
    {
        $this->city->update($city, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('countries::cities.title.cities')]));

        return redirect()->route(strtolower('admin.countries.city.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  City $city
     * @return Response
     */
    public function destroy(City $city)
    {
        $this->city->destroy($city);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('countries::cities.title.cities')]));

        return redirect()->route(strtolower('admin.countries.city.index'));
    }
}
