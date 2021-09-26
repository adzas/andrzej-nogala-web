<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\OAuth2\Client\Provider\Google;

class OAuth2Controller extends Controller
{
    public function getToken(Request $request)
    {
        $clientId = config('mail.oauth2_gmail.clientId');
        $clientSecret = config('mail.oauth2_gmail.clientSecret');
        $redirectUri = config('mail.oauth2_gmail.redirect');

        $params = [
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'redirectUri' => $redirectUri,
            'accessType' => 'offline'
        ];

        $provider = new Google($params);
        $options = [
            'scope' => [
                'https://mail.google.com/'
            ]
        ];

        if (!$request->get('code', false)) {
            $authUrl = $provider->getAuthorizationUrl($options);
            session(['oauth2state' => $provider->getState()]);
            return redirect($authUrl);
        } elseif (!$request->get('state', false) || ($request->get('state') !== $request->session()->get('oauth2state'))) {
            $request->session()->forget(['oauth2state', 'provider']);
            exit('Invalid state');
        } else {
            $request->session()->forget('provider');
            $token = $provider->getAccessToken(
                'authorization_code',
                [
                    'code' => $_GET['code']
                ]
            );
            $refreshToken = $token->getRefreshToken();

            echo 'Refresh Token: ', $refreshToken;
            if ($request->session()->has('refreshTokenOAuth2')) {
                var_dump(session('refreshTokenOAuth2'));
            }
            if (empty(session('refreshTokenOAuth2')) && !empty($refreshToken)) {
                session(['refreshTokenOAuth2' => $refreshToken]);
            }
        }
    }
}
