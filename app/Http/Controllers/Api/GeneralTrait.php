<?php

namespace App\Http\Controllers\Api;

//GeneralTrait

trait GeneralTrait
{

    public function getMessageError($validator)
    {
        return $validator->errors()->first();
    }



    public function getResponse($message, $success, $data)
    {
        $array=[
            'message' => $message,
            'success' => $success,
            'data' => $data
        ];
        return response($array);

    }

    public function getResponseAuth($message, $success)
    {
        return [
            'message' => $message,
            'success' => $success,
        ];
    }

    public function getResponseAuthWithTokenAndUser($message, $token, $user, $success)
    {
        return [
            'message' => $message,
            'success' => $success,
            'user' => $user,
            'token' => $token,
        ];
    }

    public function returnCodeAccordingToInput($validator)
    {
        $inputs = array_keys($validator->errors()->toArray());
        $code = $this->getErrorCode($inputs[0]);
        return $code;
    }
}
