<?php
namespace App\Http\Controllers;

class UserController extends Controller
{

    protected $user;

    //Задание 2
    public function show(): string
    {
        return 'Hello World';
    }

    //Задание 3
    public function All(): string
    {
        return 'Alllll';
    }

    //Задание 6
        public function username($username){
            return 'Ваш name' .' '. $username;
        }
    //Задание 7
        public function Surnameuser($surname,$name){
            return 'Ваша фамилия и имя' .': '. $surname.' '.$name;
        }
    //Задание 8
        public function _controller (){
            $users = 
            [

            'user1' => 'city1', 
            'user2' => 'city2', 
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',

            ];
        }

        public function userCity ($user){
        $this->users = ['user1' => 'city1', 'user2' => 'city2','user3' => 'city3','user4' => 'city4','user5' => 'city5',];

            dump($user);
            dd($this->users['user2']);
        }

	
	    public function showBlade()
		{
			return view('test');
		}

}
