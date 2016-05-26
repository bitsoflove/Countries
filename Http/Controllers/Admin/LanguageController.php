<?php namespace Modules\Countries\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Countries\Entities\Language;
use Modules\Countries\Repositories\LanguageRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Countries\Http\Requests\Language\CreateRequest;
use Modules\Countries\Http\Requests\Language\UpdateRequest;

class LanguageController extends AdminBaseController
{
    /**
     * @var LanguageRepository
     */
    protected $language;

    public function __construct(
        LanguageRepository $language
    ) {
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
     * @param Language $language
     * @return Response
     */
    public function create(Language $language)
    {
        $variables = [
            'language' => $language,
        ];

        return view('countries::admin.languages.create', $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @return Response
     */
    public function store(CreateRequest $request)
    {
        $this->language->create($request->all());

        flash()->success(trans('core::core.messages.resource created',
            ['name' => trans('countries::languages.title.languages')]));

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
        $variables = [
            'language' => $language,
        ];

        return view('countries::admin.languages.edit', $variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Language $language
     * @param UpdateRequest $request
     * @return Response
     */
    public function update(Language $language, UpdateRequest $request)
    {
        $this->language->update($language, $request->all());

        flash()->success(trans('core::core.messages.resource updated',
            ['name' => trans('countries::languages.title.languages')]));

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

        flash()->success(trans('core::core.messages.resource deleted',
            ['name' => trans('countries::languages.title.languages')]));

        return redirect()->route(strtolower('admin.countries.language.index'));
    }
}
