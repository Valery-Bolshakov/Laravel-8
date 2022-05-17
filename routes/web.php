<?php

/** use Illuminate\... - виртуальные классы контейнера (service container) (НАВЕРНОЕ) */

use App\Http\Controllers\UserController;  // импортировали класс юрерконтроллера для примера
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*use App\Services\Transistor;
use App\Services\PodcastParser;
use Illuminate\Support\Facades\App;*/

use Illuminate\Support\Facades\Cache;

// Все фасады Laravel определены в этом пространстве имён
//use Illuminate\Support\Facades\Route;  // Все фасады Laravel определены в этом пространстве имён

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** Маршрутизация */

/* на домашнюю страницу передаем вид welcome */
Route::get('/', function () {
    return view('welcome');
});

/** Cloud-Laundry */

Route::get('/cloud-laundry/frame-1', [UserController::class, 'show']);
//Route::get('/cloud-laundry/main-page-desktop', [UserController::class, 'show']);

/** Простой маршрут до контроллера и метода */
/* Создали маршрут http://laraver-8/user на контроллер и соотв метод index */
Route::get('/user', [UserController::class, 'index']);


/*тестируем маршруты:*/
//Route::get('/user/{id}', [UserController::class, 'show']);



/** Маршруты представлений (передаем вид + параметры, без контроллера) */
//Route::view('/user', 'user.index', ['user' => 'Userrr']);


/*если маршрут указать не дефолтный "/", а задать имя - то будет указан путь до соответствующего шаблона
в папке resource/views  (http://laraver-8/greeting)
И далее следующими методами можно передать параметры в шаблон */
Route::get('greeting', function () {
    return view('greeting', ['name1' => 'James'])
        ->with('name2', 'Victoria')
        ->with('occupation', 'Astronaut');
});

Route::get('about', function () {
    return '<h3>создали маршрут до этой страницы без создания страницы - http://laraver-8/about</h3>';
});



/**
 * Контейнер служб
 */

/** Неконфигурируемое внедрение */

/*class Service
{
    // при посещении / вашего приложения, маршрут автоматически получит класс Service
}*/
/* главная страница отобразит информацию из класса Service */
/*Route::get('/', function (Service $service) {
    die(get_class($service));
});*/


/*Когда использовать контейнер:*/
/*Route::get('/', function (Request $request) {
    // ...
    return '<h3>Когда использовать контейнер</h3>';
});*/


/** Связывание: */

//Основы связываний

/**Простое связывание*/
/* Внутри поставщика служб у вас всегда есть доступ к контейнеру через свойство '$this->app'
Зарегистрировать связывание, используя метод bind(), передав имя класса или интерфейса,
которые мы хотим зарегистрировать,  вместе с замыканием, возвращающим экземпляр класса: */

/*$this->app->bind(Transistor::class, function ($app) {
    return new Transistor($app->make(PodcastParser::class));
});

App::bind(Transistor::class, function ($app) {
    // ...
});*/


/**Связывание одиночек*/
/*Метод singleton связывает в контейнере класс или интерфейс, который должен быть извлечен только один раз*/
/*$this->app->singleton(Transistor::class, function ($app) {
    return new Transistor($app->make(PodcastParser::class));
});*/


/**Связывание одиночек с заданной областью действия*/
/*Метод scoped связывает в контейнере класс или интерфейс, который должен быть извлечен
только один раз в течение данного жизненного цикла запроса / задания Laravel.*/
/*$this->app->scoped(Transistor::class, function ($app) {
    return new Transistor($app->make(PodcastParser::class));
});*/


/**Связывание экземпляров*/
/*Вы также можете привязать существующий экземпляр объекта в контейнере, используя метод instance.*/
/*
$service = new Transistor(new PodcastParser);

$this->app->instance(Transistor::class, $service);*/


/**Связывание интерфейсов и реализаций*/
/*способность связывать интерфейс с конкретной реализацией. интерфейс EventPusher и реализация RedisEventPusher*/

/*$this->app->bind(EventPusher::class, RedisEventPusher::class);*/
/*должен внедрить RedisEventPusher, когда классу требуется реализация EventPusher.*/


/**Контекстная привязка*/
/*->needs(Filesystem::class)*/


/**Связывание примитивов:*/

/*использовать контекстную привязку, чтобы внедрить любое значение, которое может понадобиться вашему классу:*/
/*->needs('$variableName')
  ->give($value);*/

/*класс может зависеть от массива экземпляров, объединенных меткой.
Используя метод giveTagged(), вы можете легко их внедрить:*/
/*
    ->needs('$reports')
    ->giveTagged('reports');*/

/*метод giveConfig - внедрить значение из одного из конфигурационных файлов приложения */
/*
    ->needs('$timezone')
    ->giveConfig('app.timezone');*/


/**Связывание типизированных вариаций*/
/*
$this->app->when(Firewall::class)
          ->needs(Filter::class)
          ->give([
              NullFilter::class,
              ProfanityFilter::class,
              TooLongFilter::class,
          ]);*/


/**Добавление меток*/
/*назначить им метку с помощью метода tag:*/
/*
 $this->app->bind(CpuReport::class, function () {
    //
});
$this->app->bind(MemoryReport::class, function () {
    //
});
$this->app->tag([CpuReport::class, MemoryReport::class], 'reports');*/

/*службы помечены, можете все их получить с помощью метода tagged:
$this->app->bind(ReportAnalyzer::class, function ($app) {
    return new ReportAnalyzer($app->tagged('reports'));
});*/


/** Расширяемость связываний */
/*Метод extend позволяет модифицировать извлеченные службы.*/
/*$this->app->extend(Service::class, function ($service, $app) {
    return new DecoratedService($service);
});*/


/** Извлечение */

/** Метод make*/
/*использовать метод make для извлечения экземпляра класса из контейнера*/
/*use App\Services\Transistor;
$transistor = $this->app->make(Transistor::class);*/

/*Если вы находитесь за пределами поставщика служб и не имеете доступа к переменной '$app',
вы можете использовать фасад 'App' для получения экземпляра класса из контейнера:*/
/*
use App\Services\Transistor;
use Illuminate\Support\Facades\App;

$transistor = App::make(Transistor::class);*/


/** Автоматическое внедрение зависимостей*/

/*в качестве альтернативы, вы можете объявить тип зависимости в конструкторе класса,
который извлекается контейнером, включая контроллеры, слушатели событий, посредники и т.д.
Кроме того, вы можете объявить зависимости в методе handle обработки заданий в очереди.
На практике именно так контейнер должен извлекать большинство ваших объектов.*/


/** Вызов и внедрение метода*/

/*use App\UserReport;
use Illuminate\Support\Facades\App;*/

// Метод call принимает любой вызываемый PHP-код.
/* $report = App::call([new UserReport, 'generate']);*/


/** События контейнера*/

/* метода resolving: Контейнер служб инициирует событие каждый раз, когда извлекает объект*/
/*use App\Services\Transistor;

$this->app->resolving(Transistor::class, function ($transistor, $app) {
    // Вызывается, когда контейнер извлекает объекты типа `Transistor` ...
});

$this->app->resolving(function ($object, $app) {
    // Вызывается, когда контейнер извлекает объект любого типа ...
});*/


/**
 * ФАСАДЫ
 */
/*Все фасады Laravel определены в пространстве имён Illuminate\Support\Facades*/
/*В приложении Laravel фасад – это класс, который обеспечивает доступ к объекту из контейнера.*/


//этот вызов фасада и вызов помощника эквивалентны:
/**
 * return Illuminate\Support\Facades\View::make('profile');  // ФАСАД View
 *
 * return view('profile');  // ГЛОБАЛЬНЫЙ ПОМОЩНИК view
 */

/* Вот некоторые из глобальных помощников, с которыми вы можете взаимодействовать – это
view, response, url, config, request(), cache . помощники доступны глобально */

//use Illuminate\Support\Facades\Response;

/*Route::get('/users', function () {
    return response()->json([
        // не нужно импортировать какие-либо классы, помощники доступны глобально
    ]);
});*/














