<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
// Napraviti novi projekat ‘nba’ (ne zaboraviti izvršiti sve potrebne korake prilikom instalacije projekta)
// Komitovati projekat na github na novi git repository
// Uz pomoc migracija napraviti strukturu 2 tabele, ‘teams’ i ‘players’
// Polja u tabeli teams: id, name, email, address, city
// Polja u tabeli players: id, first_name, last_name, email, team_id (ovo je strani ključ)
// Izvršiti migracije
// Ručno postaviti inicijalne podatke u ove dve tabele
// Komitovati urađeno
