composer create-project laravel/laravel laravel-comics              //creo il progetto laravel 
cd laravel-comics                                                   //mi sposto dentro la cartella del progetto
composer require pacificdev/laravel_9_preset                        // uso il comando che mi aggiunge tutti gli strumenti di cui ho bisogno
php artisan preset:ui bootstrap                                     //setto bootstrap

npm i && npm run dev                                                //ultima installazione

// apri un nuovo terminale
php artisan serve                                                   // apro un secondo terminale in modo da poter tenere aperti contemporaneamente sia vite                                                                     che artisan
