<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assignment_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(User::class,'created_by_user_id');
            $table->foreignIdFor(User::class,'managed_by_user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignment_groups');
    }
};
