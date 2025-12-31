app.js:30  Uncaught TypeError: Cannot read properties of null (reading 'offsetTop')
    at HTMLDocument.initializeAppFeatures (app.js:30:37)
multi-tabs.js:5075 Injected CSS loaded successfully
[NEW] Explain Console errors by using Copilot in Edge: click
         
         to explain an error. 
        Learn more
        http://127.0.0.1:8000/profile

        http://127.0.0.1:8000/decision-os/weekly-review/1
        403
        http://127.0.0.1:8000/decision-os/tasks/4/complete
        Error
Call to undefined method App\Http\Controllers\TaskController::complete()
PATCH 127.0.0.1:8000
PHP 8.3.16 — Laravel 12.14.1

Expand
vendor frames

Illuminate\Routing\ControllerDispatcher
:46
dispatch

Illuminate\Routing\Route
:265
runController

Illuminate\Routing\Route
:211
run

Illuminate\Routing\Router
:808
Illuminate\Routing\{closure}

Illuminate\Pipeline\Pipeline
:169
Illuminate\Pipeline\{closure}

Illuminate\Routing\Middleware\SubstituteBindings
:50
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Auth\Middleware\Authenticate
:63
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Foundation\Http\Middleware\VerifyCsrfToken
:87
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\View\Middleware\ShareErrorsFromSession
:48
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Session\Middleware\StartSession
:120
handleStatefulRequest

Illuminate\Session\Middleware\StartSession
:63
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse
:36
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Cookie\Middleware\EncryptCookies
:74
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Pipeline\Pipeline
:126
then

Illuminate\Routing\Router
:807
runRouteWithinStack

Illuminate\Routing\Router
:786
runRoute

Illuminate\Routing\Router
:750
dispatchToRoute

Illuminate\Routing\Router
:739
dispatch

Illuminate\Foundation\Http\Kernel
:200
Illuminate\Foundation\Http\{closure}

Illuminate\Pipeline\Pipeline
:169
Illuminate\Pipeline\{closure}

Illuminate\Foundation\Http\Middleware\TransformsRequest
:21
handle

Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull
:31
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Foundation\Http\Middleware\TransformsRequest
:21
handle

Illuminate\Foundation\Http\Middleware\TrimStrings
:51
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Http\Middleware\ValidatePostSize
:27
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance
:109
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Http\Middleware\HandleCors
:48
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Http\Middleware\TrustProxies
:58
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Foundation\Http\Middleware\InvokeDeferredCallbacks
:22
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Http\Middleware\ValidatePathEncoding
:26
handle

Illuminate\Pipeline\Pipeline
:208
Illuminate\Pipeline\{closure}

Illuminate\Pipeline\Pipeline
:126
then

Illuminate\Foundation\Http\Kernel
:175
sendRequestThroughRouter

Illuminate\Foundation\Http\Kernel
:144
handle

Illuminate\Foundation\Application
:1219
handleRequest

C:\Users\DELL\Desktop\fabkinlaravel-100\fabkinlaravel-100\Fabkin_Laravel_v1.0.0\Admin\public\index.php
:20
require_once

C:\Users\DELL\Desktop\fabkinlaravel-100\fabkinlaravel-100\Fabkin_Laravel_v1.0.0\Admin\vendor\laravel\framework\src\Illuminate\Foundation\resources\server.php
:23
C:\Users\DELL\Desktop\fabkinlaravel-100\fabkinlaravel-100\Fabkin_Laravel_v1.0.0\Admin\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php :46
 
        if (method_exists($controller, 'callAction')) {
            return $controller->callAction($method, $parameters);
        }
 
        return $controller->{$method}(...array_values($parameters));
    }
 
    /**
     * Resolve the parameters for the controller.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  mixed  $controller
     * @param  string  $method
     * @return array
     */
    protected function resolveParameters(Route $route, $controller, $method)

وكمان في صفحات ناقصة مثلا من وين بدخل شو عملت اليوم انا بس حطيت  المقاييس اليومية بس كيف بدي حدثن 
كيف بدي ضيف مهام جدد 
بدي تفتحلي كل مودويلات لهل يوزر مابدي تخفي عنو شي 
نحن حكينا انو عنا 4 انواع يوزر ووقتا قلنا انو رح يختلفو شغلات بين بعض انا هل يوزر تيست بدي تفتح كل شي فيه 
اخر شي السستم عربي بس مالو rtl اعملو rtl 
