<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

// импортируем фасад Cache
use App\Models\User;


class UserController extends Controller
{
    /**
     * по умолчанию контроллеры ищут виды в папке resources.views...
     */
    public function show()
    {
        return view('cloud-laundry.frame_1');
//        return view('cloud-laundry.main-page-desktop');
    }


    /*public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)  // findOrFail($id) принимает идентификатор и возвращает одну модель.
//  Если подходящая модель не существует, она выдает ошибку.
        ]);
    }*/


    /**
     * Показать профиль конкретного пользователя.
     * Из документации по фасадам
     * @param int $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = Cache::get('user:' . $id);

//        return view('profile', ['user' => $user]);
    }

    /* http://laraver-8/user по данному маршруту в сервис-контейнере - запросит этот метод */
    public function index()
    {
        $name = 'JHFASDjncsudfhFA';
        /* view() - Функция view возвращает экземпляр представления: */
        /* Указываем полный путь до шаблона после resources.views.... */
        return view('user.index', compact('name'));
    }

}
