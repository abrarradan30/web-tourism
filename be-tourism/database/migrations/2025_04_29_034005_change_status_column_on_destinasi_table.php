<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ChangeStatusColumnOnDestinasiTable extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE destinasi ALTER COLUMN status TYPE BOOLEAN USING (status::BOOLEAN)');
        DB::statement('ALTER TABLE destinasi ALTER COLUMN status SET DEFAULT TRUE');
        DB::statement('ALTER TABLE destinasi ALTER COLUMN status SET NOT NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE destinasi ALTER COLUMN status TYPE VARCHAR(255) USING (status::VARCHAR)');
        DB::statement('ALTER TABLE destinasi ALTER COLUMN status DROP DEFAULT');
    }
}
