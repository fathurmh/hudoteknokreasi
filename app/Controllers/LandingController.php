<?php

namespace App\Controllers;

use Exception;
use CodeIgniter\Exceptions\PageNotFoundException;

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
        $temp_path = getcwd();

        chdir(ROOTPATH);
        shell_exec("./git-pull.sh");

        chdir($temp_path);

        return redirect()->to(base_url());
    }
}
