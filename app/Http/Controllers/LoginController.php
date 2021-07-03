<?php

namespace App\Http\Controllers;

use App\Models\User;
use Doctrine\DBAL\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Обработка попыток аутентификации.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');

//        ob_start();
//        var_dump($credentials);
//        $r = ob_get_contents();
//        ob_end_clean();
//        $fl = fopen('C:\TestFile.txt', 'w');
//        fwrite($fl, $r);

        if (!$this->checkUser($credentials['name']))
        {
            $this->createUser($credentials['name'], $credentials['password']);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

//            ob_start();
//            echo "успешно залогинился за {$credentials['name']}";
//            $r = ob_get_contents();
//            ob_end_clean();
//            $fl = fopen('C:\TestFile.txt', 'w');
//            fwrite($fl, $r);

            return redirect()->intended('dashboard');
        }
        else
        {
//            ob_start();
//            echo "неуспешно залогинился за {$credentials['name']}";
//            $r = ob_get_contents();
//            ob_end_clean();
//            $fl = fopen('C:\TestFile.txt', 'w');
//            fwrite($fl, $r);
        }

        //return \response()->json(['error' => 'hello world'], 401);
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    protected function checkUser(string $login) : bool
    {
        return (bool)DB::selectOne("select * from users where name = ?", [$login]);
    }

    protected function createUser(string $name, string $password)
    {
        $user = new User();
        $user->name = $name;
        $user->password = bcrypt($password);
        $user->save();
    }

    public function checkAuth(Request $request) : bool
    {
        if (Auth::check())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

