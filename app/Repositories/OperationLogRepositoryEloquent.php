<?php

namespace App\Repositories;

use App\Entities\OperationLog;
use App\Validators\OperationLogValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class OperationLogRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OperationLogRepositoryEloquent extends BaseRepository implements OperationLogRepository
{
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OperationLog::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
