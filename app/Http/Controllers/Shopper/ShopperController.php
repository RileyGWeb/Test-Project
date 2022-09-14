<?php

namespace App\Http\Controllers\Shopper;

use App\Http\Controllers\Controller;
use App\Models\Store\Store;
use App\Services\Store\StoreService;
use App\Services\User\UserService;
use Illuminate\Support\Facades\Auth;

/**
 * Class StoreController
 * @package App\Http\Controllers\Store
 */
class ShopperController extends Controller
{
    /**
     * @var StoreService
     */
    protected $store;

    /**
     * @var UserService
     */
    protected $user;

    /**
     * StoreController constructor.
     * @param StoreService $store
     * @param UserService $user
     */
    public function __construct(StoreService $store, UserService $user)
    {
        $this->store = $store;
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('shopper.index');
    }

    public function check_in()
    {
        $user = $this->user->show(
            [
                'id' => Auth::user()->id
            ],
            ['Stores']
        );

        return view('shopper.check-in')
            ->with('stores', $user['stores'] ?? null);
    }

    public function check_in_form()
    {
        $user = $this->user->show(
            [
                'id' => Auth::user()->id
            ],
            ['Stores']
        );

        return view('shopper.check-in-form')
            ->with('stores', $user['stores'] ?? null);
    }

  
}
