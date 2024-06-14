<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Services\LinkService\LinkBase64Service;
use App\Services\LinkService\LinkOpenSSLService;
use App\Services\LinkService\LinkServiceInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LinkController extends Controller
{
    private LinkServiceInterface $linkService;

    public function __construct()
    {
        $this->linkService = app(LinkBase64Service::class);
        //$this->linkService = app(LinkOpenSSLService::class);
    }

    public function linkGenerate(Request $request): Response
    {
        $email = $request->get('email') ?? null;

        $encodedEmail = $this->linkService->encodeString($email);

        return trim($encodedEmail) === ''
            ? response()->json(['error' => 'email is not valid'], Response::HTTP_UNPROCESSABLE_ENTITY)
            : response()->json(['encoded_email' => $encodedEmail]);
    }

    public function getLink(Request $request): Response
    {
        $emailEncoded = $request->get('email') ?? null;;

        $email = $this->linkService->decodeString($emailEncoded);

        return trim($email) === ''
            ? response()->json(['error' => 'decoded link is not valid'], Response::HTTP_UNPROCESSABLE_ENTITY)
            : response()->json(['email' => $email]);
    }
}
