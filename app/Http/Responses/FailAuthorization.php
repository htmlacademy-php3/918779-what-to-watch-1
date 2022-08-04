<?php

namespace App\Http\Responses;

use Symfony\Component\HttpFoundation\Response;

class FailAuthorization extends Base
{
    public int $statusCode = Response::HTTP_UNAUTHORIZED;

    /**
     * ExceptionResponse constructor.
     *
     * @param $data
     * @param string|null $message
     * @param int $code
     */
    public function __construct($data, protected ?string $message = null, int $code = Response::HTTP_UNAUTHORIZED)
    {
        parent::__construct([], $code);
    }

    /**
     * Формирование содежимого ответа.
     *
     * @return array
     */
    protected function makeResponseData(): array
    {
        return [
            'message' => $this->message,
            'errors' => $this->prepareData(),
        ];
    }
}