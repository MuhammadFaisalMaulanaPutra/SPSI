<?php

namespace App\Policies;

use App\Models\Permohonan;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class PermohonanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \  $
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny( $)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \  $
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Permohonan $permohonan)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \  $
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create( $)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \  $
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Permohonan $permohonan)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Permohonan $permohonan)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Permohonan $permohonan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Permohonan $permohonan)
    {
        //
    }
}
