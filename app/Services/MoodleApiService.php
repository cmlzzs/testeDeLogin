<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MoodleApiService
{
    protected $moodleUrl;
    protected $token;

    public function __construct()
    {
        $this->moodleUrl = env('http://localhost/moodle/webservice/rest/server.php?wstoken=cf0f8eeaad7c6ecaf3eccb743150d610&wsfunction=core_webservice_get_site_info&moodlewsrestformat=json'); // URL base do Moodle
        $this->token = env('cf0f8eeaad7c6ecaf3eccb743150d610'); // Token da API Moodle
    }

    public function authenticate($matricula, $senha)
    {
        $response = Http::get("{$this->moodleUrl}/login/token.php", [
            'username' => $matricula,
            'password' => $senha,
            'service' => 'moodle_Mobile_App', // Ajuste o serviço conforme configurado no Moodle
            'wstoken' => $this->token,
        ]);

        return $response->json();
    }
}
