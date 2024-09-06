<?php

use App\Enums\ProjectLevelRequirement;
use App\Enums\ProjectStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->date('start_date');
            $table->enum('level_requirement', [
                ProjectLevelRequirement::Junior->value,
                ProjectLevelRequirement::Mid->value,
                ProjectLevelRequirement::Senior->value,
                ProjectLevelRequirement::Specialist->value,
            ]);
            $table->enum('status', [
                ProjectStatus::NotStarted->value,
                ProjectStatus::InProgress->value,
                ProjectStatus::Completed->value,
                ProjectStatus::OnHold->value,
            ])->default(ProjectStatus::NotStarted->value);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
