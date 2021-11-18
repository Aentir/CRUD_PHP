<?php

namespace App\Core;

use App\Core\Interfaces\IRequest;
use App\Core\Interfaces\IRoutes;

class Dispatcher
{
    private $routeList;
    private IRequest $currentRequest;
    public function __construct(IRoutes $routeCollection, IRequest $request)
    {
        $this->routeList = $routeCollection->getRoutes();
        $this->currentRequest = $request;
        $this->dispatch();
    }
    private function dispatch()
    {
        // $this->routeList["/detalle"]
        $route = $this->currentRequest->getRoute(); // "/detalle"
        if (isset($this->routeList[$route])) {
            $controllerClass = "App\\Controllers\\" . $this->routeList[$route]["controller"]; 
            // App\Controllers\DetailController
            $controller =  new $controllerClass; 
            // new App\Controllers\DetailController
            $action = $this->routeList[$route]["action"]; // "detalleTarea"

                                //Se enviará al controlador y metodo en cuestión lo que haya en la URL a través de REQUEST_URI, en este caso, la ID
            $controller->$action(...$this->currentRequest->getParams());
                        //update($id);
                        
            // $controller->detalleTarea($id,$page,$orden)
        } else {
            echo "ruta no existe";
        }
    }
}
