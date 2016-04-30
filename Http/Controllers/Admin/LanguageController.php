<?php namespace Modules\Countries\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Countries\Entities\Language;
use Modules\Countries\Repositories\LanguageRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class LanguageController extends AdminBaseController
{
    /**
     * @var LanguageRepository
     */
    private $language;

    public function __construct(LanguageRepository $language)
    {
        parent::__construct();

        $this->language = $language;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = $this->language->all();

        return view('countries::admin.languages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Language $language)
    {
        //$profiles_repository = app(\Modules\Countries\Repositories\ProfileRepository::class);
        //$profiles = $profiles_repository->all();
        

        $variables = [
            //'profiles' => $profiles,
            'language' => $language,
        ];

        return view('countries::admin.languages.create', $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->language->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('countries::languages.title.languages')]));

        return redirect()->route(strtolower('admin.countries.language.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Language $language
     * @return Response
     */
    public function edit(Language $language)
    {
        //$profiles_repository = app(\Modules\Countries\Repositories\ProfileRepository::class);
        //$profiles = $profiles_repository->all();
        

        $variables = [
            'language' => $language,
            //'profiles' => $profiles,
        ];

        return view('countries::admin.languages.edit', $variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Language $language
     * @param  Request $request
     * @return Response
     */
    public function update(Language $language, Request $request)
    {
        $this->language->update($language, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('countries::languages.title.languages')]));

        return redirect()->route(strtolower('admin.countries.language.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Language $language
     * @return Response
     */
    public function destroy(Language $language)
    {
        $this->language->destroy($language);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('countries::languages.title.languages')]));

        return redirect()->route(strtolower('admin.countries.language.index'));
    }
}
