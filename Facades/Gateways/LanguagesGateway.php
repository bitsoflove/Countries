<?php namespace Modules\Countries\Facades\Gateways;

use Illuminate\Support\Collection;
use Modules\Countries\Repositories\LanguageRepository;
use Modules\Countries\Transformers\LanguagesTransformer;

class LanguagesGateway
{

    /**
     * @var LanguageRepository
     */
    protected $repository;

    /**
     * @var LanguagesTransformer
     */
    protected $transformer;

    /**
     * @param LanguageRepository $repository
     * @param LanguagesTransformer $transformer
     */
    public function __construct(
        LanguageRepository $repository,
        LanguagesTransformer $transformer
    ) {
        $this->repository = $repository;
        $this->transformer = $transformer;
    }

    /**
     * Get all languages
     *
     * @return Collection
     */
    public function get(){
        return $this->repository->all();
    }

    /**
     * Get all language ids
     *
     * @return Collection
     */
    public function ids(){
        return $this->get()->lists('id');
    }

    /**
     * Get all language names keyed by id
     *
     * @return Collection
     */
    public function keyed(){
        // @todo: add name column to languages?
        // @todo: add translations for languages?
        return $this->get()->lists('slug','id');
    }

}