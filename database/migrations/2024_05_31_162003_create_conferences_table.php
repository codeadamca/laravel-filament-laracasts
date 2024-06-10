<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Venue;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name', length: 60);
            $table->string('description');
            $table->dateTime('start_date');
            $table->dateTime('end_time');
            $table->boolean(column: 'in_published')->default(value: false);
            $table->string('satus');
            $table->string('region');
            $table->foreignIdFor(model: Venue::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences');
    }
};
