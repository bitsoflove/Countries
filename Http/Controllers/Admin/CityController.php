<?php namespace Modules\Countries\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Countries\Entities\City;
use Modules\Countries\Repositories\CityRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CityController extends AdminBaseController
{
    /**
     * @var CityRepository
     */
    private $city;

    public function __construct(CityRepository $city)
    {
        parent::__construct();

        $this->city = $city;
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
     * @return Response
     */
    public function create(City $city)
    {
        //$dealers_repository = app(\Modules\Countries\Repositories\DealerRepository::class);
        //$dealers = $dealers_repository->all();
        $countries_repository = app(\Modules\Countries\Repositories\CountryRepository::class);
        $countries = $countries_repository->all();
        

        $variables = [
            //'dealers' => $dealers,
            'countries' => $countries,
            'city' => $city,
        ];

        return view('countries::admin.cities.create', $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
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
        //$dealers_repository = app(\Modules\Countries\Repositories\DealerRepository::class);
        //$dealers = $dealers_repository->all();
        $countries_repository = app(\Modules\Countries\Repositories\CountryRepository::class);
        $countries = $countries_repository->all();
        

        $variables = [
            'city' => $city,
            //'dealers' => $dealers,
            'countries' => $countries,
        ];

        return view('countries::admin.cities.edit', $variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  City $city
     * @param  Request $request
     * @return Response
     */
    public function update(City $city, Request $request)
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
