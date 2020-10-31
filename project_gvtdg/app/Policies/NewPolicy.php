<?php

namespace App\Policies;

use App\User;
use App\news;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the news.
     *
     * @param  \App\User  $user
     * @param  \App\news  $news
     * @return mixed
     */
    public function view(User $user, news $news)
    {
        return $user->user_type === 'admin' or $user->user_type === 'user';
    }

    /**
     * Determine whether the user can create news.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }
	
    /**
     * Determine whether the user can update the news.
     *
     * @param  \App\User  $user
     * @param  \App\news  $news
     * @return mixed
     */
    public function update(User $user, news $news)
    {
        //
    }

    /**
     * Determine whether the user can delete the news.
     *
     * @param  \App\User  $user
     * @param  \App\news  $news
     * @return mixed
     */
    public function delete(User $user, news $news)
    {
        //
    }

    /**
     * Determine whether the user can restore the news.
     *
     * @param  \App\User  $user
     * @param  \App\news  $news
     * @return mixed
     */
    public function restore(User $user, news $news)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the news.
     *
     * @param  \App\User  $user
     * @param  \App\news  $news
     * @return mixed
     */
    public function forceDelete(User $user, news $news)
    {
        //
    }
}
