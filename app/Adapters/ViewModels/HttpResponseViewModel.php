<?php

namespace App\Adapters\ViewModels;

use App\Domain\Interfaces\ViewModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as LaravelResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

use function PHPUnit\Framework\isNull;

class HttpResponseViewModel implements ViewModel
{
    private HttpResponse $response;
    private $json = false;
    private JsonResponse $jsonResponse ;
    public function __construct( JsonResponse | HttpResponse | View $response )
    {
        if ($response instanceof View) {
            $response = new LaravelResponse($response);
        }


        // check if Response is a Json
        if($response instanceof JsonResponse )
        {
            $this->jsonResponse = $response;
            $this->json = true;
            return;
        }

        $this->response = $response;
    }

    public function getResponse(): HttpResponse
    {
        if($this->json == true)
        {
            return $this->jsonResponse;
        }
        return $this->response;
    }
}
