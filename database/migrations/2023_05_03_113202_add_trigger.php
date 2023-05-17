<?php

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

        DB::unprepared('create trigger fogyasztas1
        before insert on producer_sensors for each row
        begin
            set NEW.consumption=((NEW.meter) - (select max(producer_sensors.meter) from producer_sensors where producer_sensors.producerID=NEW.producerID));
            if NEW.consumption is null then set NEW.consumption=NEW.meter; END IF;
        end');
        DB::unprepared('create trigger fogyasztas2
        before insert on air_sensors for each row
        begin
            set NEW.consumption=((NEW.meter) - (select max(air_sensors.meter) from air_sensors where air_sensors.compressorID=NEW.compressorID));
            if NEW.consumption is null then set NEW.consumption=NEW.meter; END IF;
        end');
        DB::unprepared('create trigger fogyasztas3
        before insert on air_extractor_sensors for each row
        begin
            set NEW.consumption=((NEW.meter) - (select max(air_extractor_sensors.meter) from air_extractor_sensors where air_extractor_sensors.airExtractorID=NEW.airExtractorID));
            if NEW.consumption is null then set NEW.consumption=NEW.meter; END IF;
        end');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('drop trigger fogyasztas1;');
        DB::unprepared('drop trigger fogyasztas2;');
        DB::unprepared('drop trigger fogyasztas3;');
    }
};
