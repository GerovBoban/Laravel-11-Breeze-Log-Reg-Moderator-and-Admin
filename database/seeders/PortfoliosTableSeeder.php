<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolios')->delete();
        
        \DB::table('portfolios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'language_1' => 'Български - Laravel 11 * Laravel Breeze (Bladee with Alpine)',
                'description_1' => '1.1. Laravel 11 е публикуван на тези страници. Форма за регистрация и вход, Стартови комплекти - Laravel Breeze (Bladee with Alpine). Слоят за изглед по подразбиране на Laravel Breeze се състои от прости Blade шаблони, стилизирани с Tailwind CSS.
Направих формата за регистрация и вход с помощта на инсталатора на Laravel и също така не е проблем да инсталирате ръчно Laravel Breeze с помощта на Composer. Бутоните все пак използвах от страниците на Bootstrap, тъй като Tailwind не предоставя кода безплатно. ',
                'language_2' => 'English - Laravel 11 * Laravel Breeze (Bladee with Alpine)',
                'description_2' => '1.2. Laravel 11 is posted on these pages. Registration and login form, Starter Kits - Laravel Breeze (Bladee with Alpine). Laravel Breeze\'s default view layer is made up of simple Blade templates styled with Tailwind CSS. 
I did the registration and login form using the Laravel installer, and it\'s also not a problem to manually install Laravel Breeze using Composer. I still used the buttons from the Bootstrap pages, since Tailwind doesn\'t provide the code for free.',
             'language_3' => 'Srpski - Laravel 11 * Laravel Breeze (Bladee with Alpine)',
                'description_3' => '1.3. Laravel 11 - obrazac za registraciju i prijavu, početni paketi objavljeni su na ovim stranicama
Laravel Breeze (Bladee with Alpine). Zadani sloj prikaza Laravel Breeze sastoji se od jednostavnih Blade šablona stiliziranih Tailwind CSS-om.
Formu za registraciju i prijavu sam napravio pomoću Laravel installera, a također nije problem ručno instalirati Laravel Breeze pomoću Composer-a. Dugmad je ipak korišćena sa stranica Bootstrapa, pošto Tailwind ne daje kod besplatno.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'Yes_No' => 'DA',
                'comment' => 'No comment',
                
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'language_1' => 'Регистрирайте се !  Или ползвайте следващия адрес и парола: имейл:  test@example.com парола:  aaaa1111',
                'description_1' => 'Можете да копирате адреса и паролата. Внимавайте как е настроена клавиатурата ви при регистрация, защото например буквата А, когато е написана на латиница, няма да се приеме, ако я въведете на кирилица. Независимо как тази буква изглежда една и съща за вас!',
                'language_2' => 'Register now! Or use the following address and password: e-mail: test@example.com password:   aaaa1111',
                'description_2' => 'You can copy the address and password. Take care how your keyboard is set during registration, because, for example, the letter A, when written in Latin, will not be accepted if you type it in Cyrillic. Regardless of how that letter looks the same to you!',
                'language_3' => 'Registruj se sada! Ili koristite sledeću adresu i lozinku: e-mail:   test@example.com šifra:  aaaa1111',
                'description_3' => 'Možete kopirati adresu i šifru. Vodite računa kako vam je postavljena tastatura prilikom registracije, Jer, npr. slovo A kada je pisano latinicom, neće biti prihvaćeno, ukoliko ga otkucate na ćirilici. Bez obzira što Vama to slovo isto izgleda !',
                'created_at' => NULL,
                'updated_at' => NULL,
                'Yes_No' => 'DA',
                'comment' => 'No comment',
              
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'language_1' => '11111',
                'description_1' => '222222222',
                'language_2' => '3333333333',
                'description_2' => '444444444444',
                'language_3' => '5555555555555',
                'description_3' => '66666666666',
                'created_at' => NULL,
                'updated_at' => NULL,
                'Yes_No' => 'DA',
                'comment' => 'No comment',

            ),
        ));
        
        
    }
}