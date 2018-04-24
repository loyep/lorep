<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class BaseCriteria.
 *
 * @package namespace App\Criteria;
 */
class BaseCriteria implements CriteriaInterface
{
    /**
     * Where
     *
     * @var array
     */
    protected $where;

    /**
     * Get where filter.
     *
     * @return array
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * Set where filter.
     *
     * @param array $where
     * @return $this
     */
    public function setWhere(array $where)
    {
        $this->where = $where;
        return $this;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        if ( !empty($this->where) ) {
            foreach ( $this->where as $field => $value ) {
                if ( is_array($value) ) {
                    list($field, $condition, $val) = $value;
                    $model = $model->where($field, $condition, $val);
                } else {
                    $model = $model->where($field, '=', $value);
                }
            }
        }
        return $model;
    }
}
