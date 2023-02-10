<?php

namespace App\Controllers;

use Exception;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Services;

class LandingController extends BaseController
{
    public function index()
    {
        try {
            $database = file_get_contents(ROOTPATH . 'database.json');
            $data  = json_decode($database);
        } catch (Exception $e) {
            if (ENVIRONMENT !== 'development') {
                throw PageNotFoundException::forPageNotFound();
            }
        }

        $data = [
            'data' => $data,
        ];

        return view('landing', $data);
    }

    public function pull()
    {
        $client = Services::curlrequest();
        $response = $client->request('GET', 'https://hudoteknokreasi.com:7800/hook?access_key=so7fd2SKGfHQfCtqTnE6J9FRfZC2dx2FQezY4K1EaGniw94s');

        return redirect()->to(base_url());
    }
}
