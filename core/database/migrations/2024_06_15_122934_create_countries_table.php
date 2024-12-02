<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('countries')) {

            Schema::create('countries', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('code', 10);
                $table->string('name', 100);
                $table->string('capital', 100)->nullable();
                $table->string('continent', 100);
                $table->string('continent_code', 10);
                $table->string('phone', 10);
                $table->string('currency', 10);
                $table->string('symbol', 10);
                $table->string('alpha_3', 10);
                $table->timestamps();
            });

            $countries = [
                [
                    'id' => '1', 'code' => 'AF', 'name' => 'Afghanistan', 'capital' => 'Kabul', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+93', 'currency' => 'AFN', 'symbol' => '؋',
                    'alpha_3' => 'AFG', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '2', 'code' => 'AX', 'name' => 'Aland Islands', 'capital' => 'Mariehamn',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+358', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'ALA', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '3', 'code' => 'AL', 'name' => 'Albania', 'capital' => 'Tirana', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+355', 'currency' => 'ALL', 'symbol' => 'Lek',
                    'alpha_3' => 'ALB', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '4', 'code' => 'DZ', 'name' => 'Algeria', 'capital' => 'Algiers', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+213', 'currency' => 'DZD', 'symbol' => 'دج',
                    'alpha_3' => 'DZA', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '5', 'code' => 'AS', 'name' => 'American Samoa', 'capital' => 'Pago Pago',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+1684', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'ASM', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '6', 'code' => 'AD', 'name' => 'Andorra', 'capital' => 'Andorra la Vella',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+376', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'AND', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '7', 'code' => 'AO', 'name' => 'Angola', 'capital' => 'Luanda', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+244', 'currency' => 'AOA', 'symbol' => 'Kz',
                    'alpha_3' => 'AGO', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '8', 'code' => 'AI', 'name' => 'Anguilla', 'capital' => 'The Valley',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1264', 'currency' => 'XCD',
                    'symbol' => '$', 'alpha_3' => 'AIA', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '9', 'code' => 'AQ', 'name' => 'Antarctica', 'capital' => 'Antarctica',
                    'continent' => 'Antarctica', 'continent_code' => 'AN', 'phone' => '+672', 'currency' => 'AAD',
                    'symbol' => '$', 'alpha_3' => 'ATA', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '10', 'code' => 'AG', 'name' => 'Antigua and Barbuda', 'capital' => 'St. John\'s',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1268', 'currency' => 'XCD',
                    'symbol' => '$', 'alpha_3' => 'ATG', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '11', 'code' => 'AR', 'name' => 'Argentina', 'capital' => 'Buenos Aires',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+54', 'currency' => 'ARS',
                    'symbol' => '$', 'alpha_3' => 'ARG', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '12', 'code' => 'AM', 'name' => 'Armenia', 'capital' => 'Yerevan', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+374', 'currency' => 'AMD', 'symbol' => '֏',
                    'alpha_3' => 'ARM', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '13', 'code' => 'AW', 'name' => 'Aruba', 'capital' => 'Oranjestad',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+297', 'currency' => 'AWG',
                    'symbol' => 'ƒ', 'alpha_3' => 'ABW', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '14', 'code' => 'AU', 'name' => 'Australia', 'capital' => 'Canberra',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+61', 'currency' => 'AUD',
                    'symbol' => '$', 'alpha_3' => 'AUS', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '15', 'code' => 'AT', 'name' => 'Austria', 'capital' => 'Vienna', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+43', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'AUT', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '16', 'code' => 'AZ', 'name' => 'Azerbaijan', 'capital' => 'Baku', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+994', 'currency' => 'AZN', 'symbol' => 'm',
                    'alpha_3' => 'AZE', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '17', 'code' => 'BS', 'name' => 'Bahamas', 'capital' => 'Nassau',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1242', 'currency' => 'BSD',
                    'symbol' => 'B$', 'alpha_3' => 'BHS', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '18', 'code' => 'BH', 'name' => 'Bahrain', 'capital' => 'Manama', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+973', 'currency' => 'BHD', 'symbol' => '.د.ب',
                    'alpha_3' => 'BHR', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '19', 'code' => 'BD', 'name' => 'Bangladesh', 'capital' => 'Dhaka', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+880', 'currency' => 'BDT', 'symbol' => '৳',
                    'alpha_3' => 'BGD', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '20', 'code' => 'BB', 'name' => 'Barbados', 'capital' => 'Bridgetown',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1246', 'currency' => 'BBD',
                    'symbol' => 'Bds$', 'alpha_3' => 'BRB', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '21', 'code' => 'BY', 'name' => 'Belarus', 'capital' => 'Minsk', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+375', 'currency' => 'BYN', 'symbol' => 'Br',
                    'alpha_3' => 'BLR', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '22', 'code' => 'BE', 'name' => 'Belgium', 'capital' => 'Brussels', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+32', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'BEL', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '23', 'code' => 'BZ', 'name' => 'Belize', 'capital' => 'Belmopan',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+501', 'currency' => 'BZD',
                    'symbol' => '$', 'alpha_3' => 'BLZ', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '24', 'code' => 'BJ', 'name' => 'Benin', 'capital' => 'Porto-Novo', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+229', 'currency' => 'XOF', 'symbol' => 'CFA',
                    'alpha_3' => 'BEN', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '25', 'code' => 'BM', 'name' => 'Bermuda', 'capital' => 'Hamilton',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1441', 'currency' => 'BMD',
                    'symbol' => '$', 'alpha_3' => 'BMU', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '26', 'code' => 'BT', 'name' => 'Bhutan', 'capital' => 'Thimphu', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+975', 'currency' => 'BTN', 'symbol' => 'Nu.',
                    'alpha_3' => 'BTN', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '27', 'code' => 'BO', 'name' => 'Bolivia', 'capital' => 'Sucre',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+591', 'currency' => 'BOB',
                    'symbol' => 'Bs.', 'alpha_3' => 'BOL', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '28', 'code' => 'BQ', 'name' => 'Bonaire, Sint Eustatius and Saba',
                    'capital' => 'Kralendijk', 'continent' => 'North America', 'continent_code' => 'NA',
                    'phone' => '+599', 'currency' => 'USD', 'symbol' => '$', 'alpha_3' => 'BES',
                    'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '29', 'code' => 'BA', 'name' => 'Bosnia and Herzegovina', 'capital' => 'Sarajevo',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+387', 'currency' => 'BAM',
                    'symbol' => 'KM', 'alpha_3' => 'BIH', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '30', 'code' => 'BW', 'name' => 'Botswana', 'capital' => 'Gaborone',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+267', 'currency' => 'BWP',
                    'symbol' => 'P', 'alpha_3' => 'BWA', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '31', 'code' => 'BV', 'name' => 'Bouvet Island', 'capital' => null,
                    'continent' => 'Antarctica', 'continent_code' => 'AN', 'phone' => '+55', 'currency' => 'NOK',
                    'symbol' => 'kr', 'alpha_3' => 'BVT', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '32', 'code' => 'BR', 'name' => 'Brazil', 'capital' => 'Brasilia',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+55', 'currency' => 'BRL',
                    'symbol' => 'R$', 'alpha_3' => 'BRA', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '33', 'code' => 'IO', 'name' => 'British Indian Ocean Territory',
                    'capital' => 'Diego Garcia', 'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+246',
                    'currency' => 'USD', 'symbol' => '$', 'alpha_3' => 'IOT', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '34', 'code' => 'BN', 'name' => 'Brunei Darussalam', 'capital' => 'Bandar Seri Begawan',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+673', 'currency' => 'BND',
                    'symbol' => 'B$', 'alpha_3' => 'BRN', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '35', 'code' => 'BG', 'name' => 'Bulgaria', 'capital' => 'Sofia', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+359', 'currency' => 'BGN', 'symbol' => 'Лв.',
                    'alpha_3' => 'BGR', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '36', 'code' => 'BF', 'name' => 'Burkina Faso', 'capital' => 'Ouagadougou',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+226', 'currency' => 'XOF',
                    'symbol' => 'CFA', 'alpha_3' => 'BFA', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '37', 'code' => 'BI', 'name' => 'Burundi', 'capital' => 'Bujumbura',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+257', 'currency' => 'BIF',
                    'symbol' => 'FBu', 'alpha_3' => 'BDI', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '38', 'code' => 'KH', 'name' => 'Cambodia', 'capital' => 'Phnom Penh',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+855', 'currency' => 'KHR',
                    'symbol' => 'KHR', 'alpha_3' => 'KHM', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '39', 'code' => 'CM', 'name' => 'Cameroon', 'capital' => 'Yaounde', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+237', 'currency' => 'XAF', 'symbol' => 'FCFA',
                    'alpha_3' => 'CMR', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '40', 'code' => 'CA', 'name' => 'Canada', 'capital' => 'Ottawa',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1', 'currency' => 'CAD',
                    'symbol' => '$', 'alpha_3' => 'CAN', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '41', 'code' => 'CV', 'name' => 'Cape Verde', 'capital' => 'Praia', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+238', 'currency' => 'CVE', 'symbol' => '$',
                    'alpha_3' => 'CPV', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '42', 'code' => 'KY', 'name' => 'Cayman Islands', 'capital' => 'George Town',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1345', 'currency' => 'KYD',
                    'symbol' => '$', 'alpha_3' => 'CYM', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '43', 'code' => 'CF', 'name' => 'Central African Republic', 'capital' => 'Bangui',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+236', 'currency' => 'XAF',
                    'symbol' => 'FCFA', 'alpha_3' => 'CAF', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '44', 'code' => 'TD', 'name' => 'Chad', 'capital' => 'N\'Djamena', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+235', 'currency' => 'XAF', 'symbol' => 'FCFA',
                    'alpha_3' => 'TCD', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '45', 'code' => 'CL', 'name' => 'Chile', 'capital' => 'Santiago',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+56', 'currency' => 'CLP',
                    'symbol' => '$', 'alpha_3' => 'CHL', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '46', 'code' => 'CN', 'name' => 'China', 'capital' => 'Beijing', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+86', 'currency' => 'CNY', 'symbol' => '¥',
                    'alpha_3' => 'CHN', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '47', 'code' => 'CX', 'name' => 'Christmas Island', 'capital' => 'Flying Fish Cove',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+61', 'currency' => 'AUD',
                    'symbol' => '$', 'alpha_3' => 'CXR', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '48', 'code' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'capital' => 'West Island',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+672', 'currency' => 'AUD',
                    'symbol' => '$', 'alpha_3' => 'CCK', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '49', 'code' => 'CO', 'name' => 'Colombia', 'capital' => 'Bogota',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+57', 'currency' => 'COP',
                    'symbol' => '$', 'alpha_3' => 'COL', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '50', 'code' => 'KM', 'name' => 'Comoros', 'capital' => 'Moroni', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+269', 'currency' => 'KMF', 'symbol' => 'CF',
                    'alpha_3' => 'COM', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '51', 'code' => 'CG', 'name' => 'Congo', 'capital' => 'Brazzaville',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+242', 'currency' => 'XAF',
                    'symbol' => 'FC', 'alpha_3' => 'COG', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '52', 'code' => 'CD', 'name' => 'Congo, Democratic Republic of the Congo',
                    'capital' => 'Kinshasa', 'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+242',
                    'currency' => 'CDF', 'symbol' => 'FC', 'alpha_3' => 'COD', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '53', 'code' => 'CK', 'name' => 'Cook Islands', 'capital' => 'Avarua',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+682', 'currency' => 'NZD',
                    'symbol' => '$', 'alpha_3' => 'COK', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '54', 'code' => 'CR', 'name' => 'Costa Rica', 'capital' => 'San Jose',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+506', 'currency' => 'CRC',
                    'symbol' => '₡', 'alpha_3' => 'CRI', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '55', 'code' => 'CI', 'name' => 'Cote D\'Ivoire', 'capital' => 'Yamoussoukro',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+225', 'currency' => 'XOF',
                    'symbol' => 'CFA', 'alpha_3' => 'CIV', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '56', 'code' => 'HR', 'name' => 'Croatia', 'capital' => 'Zagreb', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+385', 'currency' => 'HRK', 'symbol' => 'kn',
                    'alpha_3' => 'HRV', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '57', 'code' => 'CU', 'name' => 'Cuba', 'capital' => 'Havana',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+53', 'currency' => 'CUP',
                    'symbol' => '$', 'alpha_3' => 'CUB', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '58', 'code' => 'CW', 'name' => 'Curacao', 'capital' => 'Willemstad',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+599', 'currency' => 'ANG',
                    'symbol' => 'ƒ', 'alpha_3' => 'CUW', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '59', 'code' => 'CY', 'name' => 'Cyprus', 'capital' => 'Nicosia', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+357', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'CYP', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '60', 'code' => 'CZ', 'name' => 'Czech Republic', 'capital' => 'Prague',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+420', 'currency' => 'CZK',
                    'symbol' => 'Kč', 'alpha_3' => 'CZE', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '61', 'code' => 'DK', 'name' => 'Denmark', 'capital' => 'Copenhagen',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+45', 'currency' => 'DKK',
                    'symbol' => 'Kr.', 'alpha_3' => 'DNK', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '62', 'code' => 'DJ', 'name' => 'Djibouti', 'capital' => 'Djibouti',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+253', 'currency' => 'DJF',
                    'symbol' => 'Fdj', 'alpha_3' => 'DJI', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '63', 'code' => 'DM', 'name' => 'Dominica', 'capital' => 'Roseau',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1767', 'currency' => 'XCD',
                    'symbol' => '$', 'alpha_3' => 'DMA', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '64', 'code' => 'DO', 'name' => 'Dominican Republic', 'capital' => 'Santo Domingo',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1809', 'currency' => 'DOP',
                    'symbol' => '$', 'alpha_3' => 'DOM', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '65', 'code' => 'EC', 'name' => 'Ecuador', 'capital' => 'Quito',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+593', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'ECU', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '66', 'code' => 'EG', 'name' => 'Egypt', 'capital' => 'Cairo', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+20', 'currency' => 'EGP', 'symbol' => 'ج.م',
                    'alpha_3' => 'EGY', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '67', 'code' => 'SV', 'name' => 'El Salvador', 'capital' => 'San Salvador',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+503', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'SLV', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '68', 'code' => 'GQ', 'name' => 'Equatorial Guinea', 'capital' => 'Malabo',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+240', 'currency' => 'XAF',
                    'symbol' => 'FCFA', 'alpha_3' => 'GNQ', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '69', 'code' => 'ER', 'name' => 'Eritrea', 'capital' => 'Asmara', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+291', 'currency' => 'ERN', 'symbol' => 'Nfk',
                    'alpha_3' => 'ERI', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '70', 'code' => 'EE', 'name' => 'Estonia', 'capital' => 'Tallinn', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+372', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'EST', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '71', 'code' => 'ET', 'name' => 'Ethiopia', 'capital' => 'Addis Ababa',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+251', 'currency' => 'ETB',
                    'symbol' => 'Nkf', 'alpha_3' => 'ETH', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '72', 'code' => 'FK', 'name' => 'Falkland Islands (Malvinas)', 'capital' => 'Stanley',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+500', 'currency' => 'FKP',
                    'symbol' => '£', 'alpha_3' => 'FLK', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '73', 'code' => 'FO', 'name' => 'Faroe Islands', 'capital' => 'Torshavn',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+298', 'currency' => 'DKK',
                    'symbol' => 'Kr.', 'alpha_3' => 'FRO', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '74', 'code' => 'FJ', 'name' => 'Fiji', 'capital' => 'Suva', 'continent' => 'Oceania',
                    'continent_code' => 'OC', 'phone' => '+679', 'currency' => 'FJD', 'symbol' => 'FJ$',
                    'alpha_3' => 'FJI', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '75', 'code' => 'FI', 'name' => 'Finland', 'capital' => 'Helsinki', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+358', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'FIN', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '76', 'code' => 'FR', 'name' => 'France', 'capital' => 'Paris', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+33', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'FRA', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '77', 'code' => 'GF', 'name' => 'French Guiana', 'capital' => 'Cayenne',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+594', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'GUF', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '78', 'code' => 'PF', 'name' => 'French Polynesia', 'capital' => 'Papeete',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+689', 'currency' => 'XPF',
                    'symbol' => '₣', 'alpha_3' => 'PYF', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '79', 'code' => 'TF', 'name' => 'French Southern Territories',
                    'capital' => 'Port-aux-Francais', 'continent' => 'Antarctica', 'continent_code' => 'AN',
                    'phone' => '+262', 'currency' => 'EUR', 'symbol' => '€', 'alpha_3' => 'ATF',
                    'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '80', 'code' => 'GA', 'name' => 'Gabon', 'capital' => 'Libreville', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+241', 'currency' => 'XAF', 'symbol' => 'FCFA',
                    'alpha_3' => 'GAB', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '81', 'code' => 'GM', 'name' => 'Gambia', 'capital' => 'Banjul', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+220', 'currency' => 'GMD', 'symbol' => 'D',
                    'alpha_3' => 'GMB', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '82', 'code' => 'GE', 'name' => 'Georgia', 'capital' => 'Tbilisi', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+995', 'currency' => 'GEL', 'symbol' => 'ლ',
                    'alpha_3' => 'GEO', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '83', 'code' => 'DE', 'name' => 'Germany', 'capital' => 'Berlin', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+49', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'DEU', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '84', 'code' => 'GH', 'name' => 'Ghana', 'capital' => 'Accra', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+233', 'currency' => 'GHS', 'symbol' => 'GH₵',
                    'alpha_3' => 'GHA', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '85', 'code' => 'GI', 'name' => 'Gibraltar', 'capital' => 'Gibraltar',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+350', 'currency' => 'GIP',
                    'symbol' => '£', 'alpha_3' => 'GIB', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '86', 'code' => 'GR', 'name' => 'Greece', 'capital' => 'Athens', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+30', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'GRC', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '87', 'code' => 'GL', 'name' => 'Greenland', 'capital' => 'Nuuk',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+299', 'currency' => 'DKK',
                    'symbol' => 'Kr.', 'alpha_3' => 'GRL', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '88', 'code' => 'GD', 'name' => 'Grenada', 'capital' => 'St. George\'s',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1473', 'currency' => 'XCD',
                    'symbol' => '$', 'alpha_3' => 'GRD', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '89', 'code' => 'GP', 'name' => 'Guadeloupe', 'capital' => 'Basse-Terre',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+590', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'GLP', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '90', 'code' => 'GU', 'name' => 'Guam', 'capital' => 'Hagatna', 'continent' => 'Oceania',
                    'continent_code' => 'OC', 'phone' => '+1671', 'currency' => 'USD', 'symbol' => '$',
                    'alpha_3' => 'GUM', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '91', 'code' => 'GT', 'name' => 'Guatemala', 'capital' => 'Guatemala City',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+502', 'currency' => 'GTQ',
                    'symbol' => 'Q', 'alpha_3' => 'GTM', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '92', 'code' => 'GG', 'name' => 'Guernsey', 'capital' => 'St Peter Port',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+44', 'currency' => 'GBP',
                    'symbol' => '£', 'alpha_3' => 'GGY', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '93', 'code' => 'GN', 'name' => 'Guinea', 'capital' => 'Conakry', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+224', 'currency' => 'GNF', 'symbol' => 'FG',
                    'alpha_3' => 'GIN', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '94', 'code' => 'GW', 'name' => 'Guinea-Bissau', 'capital' => 'Bissau',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+245', 'currency' => 'XOF',
                    'symbol' => 'CFA', 'alpha_3' => 'GNB', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '95', 'code' => 'GY', 'name' => 'Guyana', 'capital' => 'Georgetown',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+592', 'currency' => 'GYD',
                    'symbol' => '$', 'alpha_3' => 'GUY', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '96', 'code' => 'HT', 'name' => 'Haiti', 'capital' => 'Port-au-Prince',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+509', 'currency' => 'HTG',
                    'symbol' => 'G', 'alpha_3' => 'HTI', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '97', 'code' => 'HM', 'name' => 'Heard Island and Mcdonald Islands', 'capital' => '',
                    'continent' => 'Antarctica', 'continent_code' => 'AN', 'phone' => '+0', 'currency' => 'AUD',
                    'symbol' => '$', 'alpha_3' => 'HMD', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '98', 'code' => 'VA', 'name' => 'Holy See (Vatican City State)',
                    'capital' => 'Vatican City', 'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+39',
                    'currency' => 'EUR', 'symbol' => '€', 'alpha_3' => 'VAT', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '99', 'code' => 'HN', 'name' => 'Honduras', 'capital' => 'Tegucigalpa',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+504', 'currency' => 'HNL',
                    'symbol' => 'L', 'alpha_3' => 'HND', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '100', 'code' => 'HK', 'name' => 'Hong Kong', 'capital' => 'Hong Kong',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+852', 'currency' => 'HKD',
                    'symbol' => '$', 'alpha_3' => 'HKG', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '101', 'code' => 'HU', 'name' => 'Hungary', 'capital' => 'Budapest',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+36', 'currency' => 'HUF',
                    'symbol' => 'Ft', 'alpha_3' => 'HUN', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '102', 'code' => 'IS', 'name' => 'Iceland', 'capital' => 'Reykjavik',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+354', 'currency' => 'ISK',
                    'symbol' => 'kr', 'alpha_3' => 'ISL', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '103', 'code' => 'IN', 'name' => 'India', 'capital' => 'New Delhi', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+91', 'currency' => 'INR', 'symbol' => '₹',
                    'alpha_3' => 'IND', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '104', 'code' => 'ID', 'name' => 'Indonesia', 'capital' => 'Jakarta', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+62', 'currency' => 'IDR', 'symbol' => 'Rp',
                    'alpha_3' => 'IDN', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '105', 'code' => 'IR', 'name' => 'Iran, Islamic Republic of', 'capital' => 'Tehran',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+98', 'currency' => 'IRR',
                    'symbol' => '﷼', 'alpha_3' => 'IRN', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '106', 'code' => 'IQ', 'name' => 'Iraq', 'capital' => 'Baghdad', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+964', 'currency' => 'IQD', 'symbol' => 'د.ع',
                    'alpha_3' => 'IRQ', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '107', 'code' => 'IE', 'name' => 'Ireland', 'capital' => 'Dublin', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+353', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'IRL', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '108', 'code' => 'IM', 'name' => 'Isle of Man', 'capital' => 'Douglas, Isle of Man',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+44', 'currency' => 'GBP',
                    'symbol' => '£', 'alpha_3' => 'IMN', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '109', 'code' => 'IL', 'name' => 'Israel', 'capital' => 'Jerusalem', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+972', 'currency' => 'ILS', 'symbol' => '₪',
                    'alpha_3' => 'ISR', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '110', 'code' => 'IT', 'name' => 'Italy', 'capital' => 'Rome', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+39', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'ITA', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '111', 'code' => 'JM', 'name' => 'Jamaica', 'capital' => 'Kingston',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1876', 'currency' => 'JMD',
                    'symbol' => 'J$', 'alpha_3' => 'JAM', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '112', 'code' => 'JP', 'name' => 'Japan', 'capital' => 'Tokyo', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+81', 'currency' => 'JPY', 'symbol' => '¥',
                    'alpha_3' => 'JPN', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '113', 'code' => 'JE', 'name' => 'Jersey', 'capital' => 'Saint Helier',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+44', 'currency' => 'GBP',
                    'symbol' => '£', 'alpha_3' => 'JEY', 'created_at' => '2021-11-04 03:37:15',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '114', 'code' => 'JO', 'name' => 'Jordan', 'capital' => 'Amman', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+962', 'currency' => 'JOD', 'symbol' => 'ا.د',
                    'alpha_3' => 'JOR', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '115', 'code' => 'KZ', 'name' => 'Kazakhstan', 'capital' => 'Astana', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+7', 'currency' => 'KZT', 'symbol' => 'лв',
                    'alpha_3' => 'KAZ', 'created_at' => '2021-11-04 03:37:15', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '116', 'code' => 'KE', 'name' => 'Kenya', 'capital' => 'Nairobi', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+254', 'currency' => 'KES', 'symbol' => 'KSh',
                    'alpha_3' => 'KEN', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '117', 'code' => 'KI', 'name' => 'Kiribati', 'capital' => 'Tarawa',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+686', 'currency' => 'AUD',
                    'symbol' => '$', 'alpha_3' => 'KIR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '118', 'code' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of',
                    'capital' => 'Pyongyang', 'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+850',
                    'currency' => 'KPW', 'symbol' => '₩', 'alpha_3' => 'PRK', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '119', 'code' => 'KR', 'name' => 'Korea, Republic of', 'capital' => 'Seoul',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+82', 'currency' => 'KRW',
                    'symbol' => '₩', 'alpha_3' => 'KOR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '120', 'code' => 'XK', 'name' => 'Kosovo', 'capital' => 'Pristina', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+381', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'XKX', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '121', 'code' => 'KW', 'name' => 'Kuwait', 'capital' => 'Kuwait City',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+965', 'currency' => 'KWD',
                    'symbol' => 'ك.د', 'alpha_3' => 'KWT', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '122', 'code' => 'KG', 'name' => 'Kyrgyzstan', 'capital' => 'Bishkek',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+996', 'currency' => 'KGS',
                    'symbol' => 'лв', 'alpha_3' => 'KGZ', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '123', 'code' => 'LA', 'name' => 'Lao People\'s Democratic Republic',
                    'capital' => 'Vientiane', 'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+856',
                    'currency' => 'LAK', 'symbol' => '₭', 'alpha_3' => 'LAO', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '124', 'code' => 'LV', 'name' => 'Latvia', 'capital' => 'Riga', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+371', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'LVA', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '125', 'code' => 'LB', 'name' => 'Lebanon', 'capital' => 'Beirut', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+961', 'currency' => 'LBP', 'symbol' => '£',
                    'alpha_3' => 'LBN', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '126', 'code' => 'LS', 'name' => 'Lesotho', 'capital' => 'Maseru', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+266', 'currency' => 'LSL', 'symbol' => 'L',
                    'alpha_3' => 'LSO', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '127', 'code' => 'LR', 'name' => 'Liberia', 'capital' => 'Monrovia',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+231', 'currency' => 'LRD',
                    'symbol' => '$', 'alpha_3' => 'LBR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '128', 'code' => 'LY', 'name' => 'Libyan Arab Jamahiriya', 'capital' => 'Tripolis',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+218', 'currency' => 'LYD',
                    'symbol' => 'د.ل', 'alpha_3' => 'LBY', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '129', 'code' => 'LI', 'name' => 'Liechtenstein', 'capital' => 'Vaduz',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+423', 'currency' => 'CHF',
                    'symbol' => 'CHf', 'alpha_3' => 'LIE', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '130', 'code' => 'LT', 'name' => 'Lithuania', 'capital' => 'Vilnius',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+370', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'LTU', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '131', 'code' => 'LU', 'name' => 'Luxembourg', 'capital' => 'Luxembourg',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+352', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'LUX', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '132', 'code' => 'MO', 'name' => 'Macao', 'capital' => 'Macao', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+853', 'currency' => 'MOP', 'symbol' => '$',
                    'alpha_3' => 'MAC', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '133', 'code' => 'MK', 'name' => 'Macedonia, the Former Yugoslav Republic of',
                    'capital' => 'Skopje', 'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+389',
                    'currency' => 'MKD', 'symbol' => 'ден', 'alpha_3' => 'MKD', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '134', 'code' => 'MG', 'name' => 'Madagascar', 'capital' => 'Antananarivo',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+261', 'currency' => 'MGA',
                    'symbol' => 'Ar', 'alpha_3' => 'MDG', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '135', 'code' => 'MW', 'name' => 'Malawi', 'capital' => 'Lilongwe', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+265', 'currency' => 'MWK', 'symbol' => 'MK',
                    'alpha_3' => 'MWI', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '136', 'code' => 'MY', 'name' => 'Malaysia', 'capital' => 'Kuala Lumpur',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+60', 'currency' => 'MYR',
                    'symbol' => 'RM', 'alpha_3' => 'MYS', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '137', 'code' => 'MV', 'name' => 'Maldives', 'capital' => 'Male', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+960', 'currency' => 'MVR', 'symbol' => 'Rf',
                    'alpha_3' => 'MDV', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '138', 'code' => 'ML', 'name' => 'Mali', 'capital' => 'Bamako', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+223', 'currency' => 'XOF', 'symbol' => 'CFA',
                    'alpha_3' => 'MLI', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '139', 'code' => 'MT', 'name' => 'Malta', 'capital' => 'Valletta', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+356', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'MLT', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '140', 'code' => 'MH', 'name' => 'Marshall Islands', 'capital' => 'Majuro',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+692', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'MHL', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '141', 'code' => 'MQ', 'name' => 'Martinique', 'capital' => 'Fort-de-France',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+596', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'MTQ', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '142', 'code' => 'MR', 'name' => 'Mauritania', 'capital' => 'Nouakchott',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+222', 'currency' => 'MRO',
                    'symbol' => 'MRU', 'alpha_3' => 'MRT', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '143', 'code' => 'MU', 'name' => 'Mauritius', 'capital' => 'Port Louis',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+230', 'currency' => 'MUR',
                    'symbol' => '₨', 'alpha_3' => 'MUS', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '144', 'code' => 'YT', 'name' => 'Mayotte', 'capital' => 'Mamoudzou',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+269', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'MYT', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '145', 'code' => 'MX', 'name' => 'Mexico', 'capital' => 'Mexico City',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+52', 'currency' => 'MXN',
                    'symbol' => '$', 'alpha_3' => 'MEX', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '146', 'code' => 'FM', 'name' => 'Micronesia, Federated States of', 'capital' => 'Palikir',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+691', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'FSM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '147', 'code' => 'MD', 'name' => 'Moldova, Republic of', 'capital' => 'Chisinau',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+373', 'currency' => 'MDL',
                    'symbol' => 'L', 'alpha_3' => 'MDA', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '148', 'code' => 'MC', 'name' => 'Monaco', 'capital' => 'Monaco', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+377', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'MCO', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '149', 'code' => 'MN', 'name' => 'Mongolia', 'capital' => 'Ulan Bator',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+976', 'currency' => 'MNT',
                    'symbol' => '₮', 'alpha_3' => 'MNG', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '150', 'code' => 'ME', 'name' => 'Montenegro', 'capital' => 'Podgorica',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+382', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'MNE', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '151', 'code' => 'MS', 'name' => 'Montserrat', 'capital' => 'Plymouth',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1664', 'currency' => 'XCD',
                    'symbol' => '$', 'alpha_3' => 'MSR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '152', 'code' => 'MA', 'name' => 'Morocco', 'capital' => 'Rabat', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+212', 'currency' => 'MAD', 'symbol' => 'DH',
                    'alpha_3' => 'MAR', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '153', 'code' => 'MZ', 'name' => 'Mozambique', 'capital' => 'Maputo',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+258', 'currency' => 'MZN',
                    'symbol' => 'MT', 'alpha_3' => 'MOZ', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '154', 'code' => 'MM', 'name' => 'Myanmar', 'capital' => 'Nay Pyi Taw',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+95', 'currency' => 'MMK',
                    'symbol' => 'K', 'alpha_3' => 'MMR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '155', 'code' => 'NA', 'name' => 'Namibia', 'capital' => 'Windhoek',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+264', 'currency' => 'NAD',
                    'symbol' => '$', 'alpha_3' => 'NAM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '156', 'code' => 'NR', 'name' => 'Nauru', 'capital' => 'Yaren', 'continent' => 'Oceania',
                    'continent_code' => 'OC', 'phone' => '+674', 'currency' => 'AUD', 'symbol' => '$',
                    'alpha_3' => 'NRU', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '157', 'code' => 'NP', 'name' => 'Nepal', 'capital' => 'Kathmandu', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+977', 'currency' => 'NPR', 'symbol' => '₨',
                    'alpha_3' => 'NPL', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '158', 'code' => 'NL', 'name' => 'Netherlands', 'capital' => 'Amsterdam',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+31', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'NLD', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '159', 'code' => 'AN', 'name' => 'Netherlands Antilles', 'capital' => 'Willemstad',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+599', 'currency' => 'ANG',
                    'symbol' => 'NAf', 'alpha_3' => 'ANT', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '160', 'code' => 'NC', 'name' => 'New Caledonia', 'capital' => 'Noumea',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+687', 'currency' => 'XPF',
                    'symbol' => '₣', 'alpha_3' => 'NCL', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '161', 'code' => 'NZ', 'name' => 'New Zealand', 'capital' => 'Wellington',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+64', 'currency' => 'NZD',
                    'symbol' => '$', 'alpha_3' => 'NZL', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '162', 'code' => 'NI', 'name' => 'Nicaragua', 'capital' => 'Managua',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+505', 'currency' => 'NIO',
                    'symbol' => 'C$', 'alpha_3' => 'NIC', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '163', 'code' => 'NE', 'name' => 'Niger', 'capital' => 'Niamey', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+227', 'currency' => 'XOF', 'symbol' => 'CFA',
                    'alpha_3' => 'NER', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '164', 'code' => 'NG', 'name' => 'Nigeria', 'capital' => 'Abuja', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+234', 'currency' => 'NGN', 'symbol' => '₦',
                    'alpha_3' => 'NGA', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '165', 'code' => 'NU', 'name' => 'Niue', 'capital' => 'Alofi', 'continent' => 'Oceania',
                    'continent_code' => 'OC', 'phone' => '+683', 'currency' => 'NZD', 'symbol' => '$',
                    'alpha_3' => 'NIU', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '166', 'code' => 'NF', 'name' => 'Norfolk Island', 'capital' => 'Kingston',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+672', 'currency' => 'AUD',
                    'symbol' => '$', 'alpha_3' => 'NFK', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '167', 'code' => 'MP', 'name' => 'Northern Mariana Islands', 'capital' => 'Saipan',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+1670', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'MNP', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '168', 'code' => 'NO', 'name' => 'Norway', 'capital' => 'Oslo', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+47', 'currency' => 'NOK', 'symbol' => 'kr',
                    'alpha_3' => 'NOR', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '169', 'code' => 'OM', 'name' => 'Oman', 'capital' => 'Muscat', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+968', 'currency' => 'OMR', 'symbol' => '.ع.ر',
                    'alpha_3' => 'OMN', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '170', 'code' => 'PK', 'name' => 'Pakistan', 'capital' => 'Islamabad',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+92', 'currency' => 'PKR',
                    'symbol' => '₨', 'alpha_3' => 'PAK', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '171', 'code' => 'PW', 'name' => 'Palau', 'capital' => 'Melekeok', 'continent' => 'Oceania',
                    'continent_code' => 'OC', 'phone' => '+680', 'currency' => 'USD', 'symbol' => '$',
                    'alpha_3' => 'PLW', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '172', 'code' => 'PS', 'name' => 'Palestinian Territory, Occupied',
                    'capital' => 'East Jerusalem', 'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+970',
                    'currency' => 'ILS', 'symbol' => '₪', 'alpha_3' => 'PSE', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '173', 'code' => 'PA', 'name' => 'Panama', 'capital' => 'Panama City',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+507', 'currency' => 'PAB',
                    'symbol' => 'B/.', 'alpha_3' => 'PAN', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '174', 'code' => 'PG', 'name' => 'Papua New Guinea', 'capital' => 'Port Moresby',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+675', 'currency' => 'PGK',
                    'symbol' => 'K', 'alpha_3' => 'PNG', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '175', 'code' => 'PY', 'name' => 'Paraguay', 'capital' => 'Asuncion',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+595', 'currency' => 'PYG',
                    'symbol' => '₲', 'alpha_3' => 'PRY', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '176', 'code' => 'PE', 'name' => 'Peru', 'capital' => 'Lima',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+51', 'currency' => 'PEN',
                    'symbol' => 'S/.', 'alpha_3' => 'PER', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '177', 'code' => 'PH', 'name' => 'Philippines', 'capital' => 'Manila',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+63', 'currency' => 'PHP',
                    'symbol' => '₱', 'alpha_3' => 'PHL', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '178', 'code' => 'PN', 'name' => 'Pitcairn', 'capital' => 'Adamstown',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+64', 'currency' => 'NZD',
                    'symbol' => '$', 'alpha_3' => 'PCN', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '179', 'code' => 'PL', 'name' => 'Poland', 'capital' => 'Warsaw', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+48', 'currency' => 'PLN', 'symbol' => 'zł',
                    'alpha_3' => 'POL', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '180', 'code' => 'PT', 'name' => 'Portugal', 'capital' => 'Lisbon', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+351', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'PRT', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '181', 'code' => 'PR', 'name' => 'Puerto Rico', 'capital' => 'San Juan',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1787', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'PRI', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '182', 'code' => 'QA', 'name' => 'Qatar', 'capital' => 'Doha', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+974', 'currency' => 'QAR', 'symbol' => 'ق.ر',
                    'alpha_3' => 'QAT', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '183', 'code' => 'RE', 'name' => 'Reunion', 'capital' => 'Saint-Denis',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+262', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'REU', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '184', 'code' => 'RO', 'name' => 'Romania', 'capital' => 'Bucharest',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+40', 'currency' => 'RON',
                    'symbol' => 'lei', 'alpha_3' => 'ROM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '185', 'code' => 'RU', 'name' => 'Russian Federation', 'capital' => 'Moscow',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+70', 'currency' => 'RUB',
                    'symbol' => '₽', 'alpha_3' => 'RUS', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '186', 'code' => 'RW', 'name' => 'Rwanda', 'capital' => 'Kigali', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+250', 'currency' => 'RWF', 'symbol' => 'FRw',
                    'alpha_3' => 'RWA', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '187', 'code' => 'BL', 'name' => 'Saint Barthelemy', 'capital' => 'Gustavia',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+590', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'BLM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '188', 'code' => 'SH', 'name' => 'Saint Helena', 'capital' => 'Jamestown',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+290', 'currency' => 'SHP',
                    'symbol' => '£', 'alpha_3' => 'SHN', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '189', 'code' => 'KN', 'name' => 'Saint Kitts and Nevis', 'capital' => 'Basseterre',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1869', 'currency' => 'XCD',
                    'symbol' => '$', 'alpha_3' => 'KNA', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '190', 'code' => 'LC', 'name' => 'Saint Lucia', 'capital' => 'Castries',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1758', 'currency' => 'XCD',
                    'symbol' => '$', 'alpha_3' => 'LCA', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '191', 'code' => 'MF', 'name' => 'Saint Martin', 'capital' => 'Marigot',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+590', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'MAF', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '192', 'code' => 'PM', 'name' => 'Saint Pierre and Miquelon', 'capital' => 'Saint-Pierre',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+508', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'SPM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '193', 'code' => 'VC', 'name' => 'Saint Vincent and the Grenadines',
                    'capital' => 'Kingstown', 'continent' => 'North America', 'continent_code' => 'NA',
                    'phone' => '+1784', 'currency' => 'XCD', 'symbol' => '$', 'alpha_3' => 'VCT',
                    'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '194', 'code' => 'WS', 'name' => 'Samoa', 'capital' => 'Apia', 'continent' => 'Oceania',
                    'continent_code' => 'OC', 'phone' => '+684', 'currency' => 'WST', 'symbol' => 'SAT',
                    'alpha_3' => 'WSM', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '195', 'code' => 'SM', 'name' => 'San Marino', 'capital' => 'San Marino',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+378', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'SMR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '196', 'code' => 'ST', 'name' => 'Sao Tome and Principe', 'capital' => 'Sao Tome',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+239', 'currency' => 'STD',
                    'symbol' => 'Db', 'alpha_3' => 'STP', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '197', 'code' => 'SA', 'name' => 'Saudi Arabia', 'capital' => 'Riyadh',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+966', 'currency' => 'SAR',
                    'symbol' => '﷼', 'alpha_3' => 'SAU', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '198', 'code' => 'SN', 'name' => 'Senegal', 'capital' => 'Dakar', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+221', 'currency' => 'XOF', 'symbol' => 'CFA',
                    'alpha_3' => 'SEN', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '199', 'code' => 'RS', 'name' => 'Serbia', 'capital' => 'Belgrade', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+381', 'currency' => 'RSD', 'symbol' => 'din',
                    'alpha_3' => 'SRB', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '200', 'code' => 'CS', 'name' => 'Serbia and Montenegro', 'capital' => 'Belgrade',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+381', 'currency' => 'RSD',
                    'symbol' => 'din', 'alpha_3' => 'SCG', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '201', 'code' => 'SC', 'name' => 'Seychelles', 'capital' => 'Victoria',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+248', 'currency' => 'SCR',
                    'symbol' => 'SRe', 'alpha_3' => 'SYC', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '202', 'code' => 'SL', 'name' => 'Sierra Leone', 'capital' => 'Freetown',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+232', 'currency' => 'SLL',
                    'symbol' => 'Le', 'alpha_3' => 'SLE', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '203', 'code' => 'SG', 'name' => 'Singapore', 'capital' => 'Singapur',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+65', 'currency' => 'SGD',
                    'symbol' => '$', 'alpha_3' => 'SGP', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '204', 'code' => 'SX', 'name' => 'Sint Maarten', 'capital' => 'Philipsburg',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1', 'currency' => 'ANG',
                    'symbol' => 'ƒ', 'alpha_3' => 'SXM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '205', 'code' => 'SK', 'name' => 'Slovakia', 'capital' => 'Bratislava',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+421', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'SVK', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '206', 'code' => 'SI', 'name' => 'Slovenia', 'capital' => 'Ljubljana',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+386', 'currency' => 'EUR',
                    'symbol' => '€', 'alpha_3' => 'SVN', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '207', 'code' => 'SB', 'name' => 'Solomon Islands', 'capital' => 'Honiara',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+677', 'currency' => 'SBD',
                    'symbol' => 'Si$', 'alpha_3' => 'SLB', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '208', 'code' => 'SO', 'name' => 'Somalia', 'capital' => 'Mogadishu',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+252', 'currency' => 'SOS',
                    'symbol' => 'Sh.so.', 'alpha_3' => 'SOM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '209', 'code' => 'ZA', 'name' => 'South Africa', 'capital' => 'Pretoria',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+27', 'currency' => 'ZAR',
                    'symbol' => 'R', 'alpha_3' => 'ZAF', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '210', 'code' => 'GS', 'name' => 'South Georgia and the South Sandwich Islands',
                    'capital' => 'Grytviken', 'continent' => 'Antarctica', 'continent_code' => 'AN', 'phone' => '+500',
                    'currency' => 'GBP', 'symbol' => '£', 'alpha_3' => 'SGS', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '211', 'code' => 'SS', 'name' => 'South Sudan', 'capital' => 'Juba',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+211', 'currency' => 'SSP',
                    'symbol' => '£', 'alpha_3' => 'SSD', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '212', 'code' => 'ES', 'name' => 'Spain', 'capital' => 'Madrid', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+34', 'currency' => 'EUR', 'symbol' => '€',
                    'alpha_3' => 'ESP', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '213', 'code' => 'LK', 'name' => 'Sri Lanka', 'capital' => 'Colombo', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+94', 'currency' => 'LKR', 'symbol' => 'Rs',
                    'alpha_3' => 'LKA', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '214', 'code' => 'SD', 'name' => 'Sudan', 'capital' => 'Khartoum', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+249', 'currency' => 'SDG', 'symbol' => '.س.ج',
                    'alpha_3' => 'SDN', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '215', 'code' => 'SR', 'name' => 'Suriname', 'capital' => 'Paramaribo',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+597', 'currency' => 'SRD',
                    'symbol' => '$', 'alpha_3' => 'SUR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '216', 'code' => 'SJ', 'name' => 'Svalbard and Jan Mayen', 'capital' => 'Longyearbyen',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+47', 'currency' => 'NOK',
                    'symbol' => 'kr', 'alpha_3' => 'SJM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '217', 'code' => 'SZ', 'name' => 'Swaziland', 'capital' => 'Mbabane',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+268', 'currency' => 'SZL',
                    'symbol' => 'E', 'alpha_3' => 'SWZ', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '218', 'code' => 'SE', 'name' => 'Sweden', 'capital' => 'Stockholm',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+46', 'currency' => 'SEK',
                    'symbol' => 'kr', 'alpha_3' => 'SWE', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '219', 'code' => 'CH', 'name' => 'Switzerland', 'capital' => 'Berne',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+41', 'currency' => 'CHF',
                    'symbol' => 'CHf', 'alpha_3' => 'CHE', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '220', 'code' => 'SY', 'name' => 'Syrian Arab Republic', 'capital' => 'Damascus',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+963', 'currency' => 'SYP',
                    'symbol' => 'LS', 'alpha_3' => 'SYR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '221', 'code' => 'TW', 'name' => 'Taiwan, Province of China', 'capital' => 'Taipei',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+886', 'currency' => 'TWD',
                    'symbol' => '$', 'alpha_3' => 'TWN', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '222', 'code' => 'TJ', 'name' => 'Tajikistan', 'capital' => 'Dushanbe',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+992', 'currency' => 'TJS',
                    'symbol' => 'SM', 'alpha_3' => 'TJK', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '223', 'code' => 'TZ', 'name' => 'Tanzania, United Republic of', 'capital' => 'Dodoma',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+255', 'currency' => 'TZS',
                    'symbol' => 'TSh', 'alpha_3' => 'TZA', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '224', 'code' => 'TH', 'name' => 'Thailand', 'capital' => 'Bangkok', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+66', 'currency' => 'THB', 'symbol' => '฿',
                    'alpha_3' => 'THA', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '225', 'code' => 'TL', 'name' => 'Timor-Leste', 'capital' => 'Dili', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+670', 'currency' => 'USD', 'symbol' => '$',
                    'alpha_3' => 'TLS', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '226', 'code' => 'TG', 'name' => 'Togo', 'capital' => 'Lome', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+228', 'currency' => 'XOF', 'symbol' => 'CFA',
                    'alpha_3' => 'TGO', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '227', 'code' => 'TK', 'name' => 'Tokelau', 'capital' => null, 'continent' => 'Oceania',
                    'continent_code' => 'OC', 'phone' => '+690', 'currency' => 'NZD', 'symbol' => '$',
                    'alpha_3' => 'TKL', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '228', 'code' => 'TO', 'name' => 'Tonga', 'capital' => 'Nuku\'alofa',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+676', 'currency' => 'TOP',
                    'symbol' => '$', 'alpha_3' => 'TON', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '229', 'code' => 'TT', 'name' => 'Trinidad and Tobago', 'capital' => 'Port of Spain',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1868', 'currency' => 'TTD',
                    'symbol' => '$', 'alpha_3' => 'TTO', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '230', 'code' => 'TN', 'name' => 'Tunisia', 'capital' => 'Tunis', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+216', 'currency' => 'TND', 'symbol' => 'ت.د',
                    'alpha_3' => 'TUN', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '231', 'code' => 'TR', 'name' => 'Turkey', 'capital' => 'Ankara', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+90', 'currency' => 'TRY', 'symbol' => '₺',
                    'alpha_3' => 'TUR', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '232', 'code' => 'TM', 'name' => 'Turkmenistan', 'capital' => 'Ashgabat',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+7370', 'currency' => 'TMT',
                    'symbol' => 'T', 'alpha_3' => 'TKM', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '233', 'code' => 'TC', 'name' => 'Turks and Caicos Islands', 'capital' => 'Cockburn Town',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1649', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'TCA', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '234', 'code' => 'TV', 'name' => 'Tuvalu', 'capital' => 'Funafuti',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+688', 'currency' => 'AUD',
                    'symbol' => '$', 'alpha_3' => 'TUV', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '235', 'code' => 'UG', 'name' => 'Uganda', 'capital' => 'Kampala', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+256', 'currency' => 'UGX', 'symbol' => 'USh',
                    'alpha_3' => 'UGA', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '236', 'code' => 'UA', 'name' => 'Ukraine', 'capital' => 'Kiev', 'continent' => 'Europe',
                    'continent_code' => 'EU', 'phone' => '+380', 'currency' => 'UAH', 'symbol' => '₴',
                    'alpha_3' => 'UKR', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '237', 'code' => 'AE', 'name' => 'United Arab Emirates', 'capital' => 'Abu Dhabi',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+971', 'currency' => 'AED',
                    'symbol' => 'إ.د', 'alpha_3' => 'ARE', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '238', 'code' => 'GB', 'name' => 'United Kingdom', 'capital' => 'London',
                    'continent' => 'Europe', 'continent_code' => 'EU', 'phone' => '+44', 'currency' => 'GBP',
                    'symbol' => '£', 'alpha_3' => 'GBR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '239', 'code' => 'US', 'name' => 'United States', 'capital' => 'Washington',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'USA', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '240', 'code' => 'UM', 'name' => 'United States Minor Outlying Islands', 'capital' => null,
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'UMI', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '241', 'code' => 'UY', 'name' => 'Uruguay', 'capital' => 'Montevideo',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+598', 'currency' => 'UYU',
                    'symbol' => '$', 'alpha_3' => 'URY', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '242', 'code' => 'UZ', 'name' => 'Uzbekistan', 'capital' => 'Tashkent',
                    'continent' => 'Asia', 'continent_code' => 'AS', 'phone' => '+998', 'currency' => 'UZS',
                    'symbol' => 'лв', 'alpha_3' => 'UZB', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '243', 'code' => 'VU', 'name' => 'Vanuatu', 'capital' => 'Port Vila',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+678', 'currency' => 'VUV',
                    'symbol' => 'VT', 'alpha_3' => 'VUT', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '244', 'code' => 'VE', 'name' => 'Venezuela', 'capital' => 'Caracas',
                    'continent' => 'South America', 'continent_code' => 'SA', 'phone' => '+58', 'currency' => 'VEF',
                    'symbol' => 'Bs', 'alpha_3' => 'VEN', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '245', 'code' => 'VN', 'name' => 'Viet Nam', 'capital' => 'Hanoi', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+84', 'currency' => 'VND', 'symbol' => '₫',
                    'alpha_3' => 'VNM', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '246', 'code' => 'VG', 'name' => 'Virgin Islands, British', 'capital' => 'Road Town',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1284', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'VGB', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '247', 'code' => 'VI', 'name' => 'Virgin Islands, U.s.', 'capital' => 'Charlotte Amalie',
                    'continent' => 'North America', 'continent_code' => 'NA', 'phone' => '+1340', 'currency' => 'USD',
                    'symbol' => '$', 'alpha_3' => 'VIR', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '248', 'code' => 'WF', 'name' => 'Wallis and Futuna', 'capital' => 'Mata Utu',
                    'continent' => 'Oceania', 'continent_code' => 'OC', 'phone' => '+681', 'currency' => 'XPF',
                    'symbol' => '₣', 'alpha_3' => 'WLF', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '249', 'code' => 'EH', 'name' => 'Western Sahara', 'capital' => 'El-Aaiun',
                    'continent' => 'Africa', 'continent_code' => 'AF', 'phone' => '+212', 'currency' => 'MAD',
                    'symbol' => 'MAD', 'alpha_3' => 'ESH', 'created_at' => '2021-11-04 03:37:16',
                    'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '250', 'code' => 'YE', 'name' => 'Yemen', 'capital' => 'Sanaa', 'continent' => 'Asia',
                    'continent_code' => 'AS', 'phone' => '+967', 'currency' => 'YER', 'symbol' => '﷼',
                    'alpha_3' => 'YEM', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '251', 'code' => 'ZM', 'name' => 'Zambia', 'capital' => 'Lusaka', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+260', 'currency' => 'ZMW', 'symbol' => 'ZK',
                    'alpha_3' => 'ZMB', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ],
                [
                    'id' => '252', 'code' => 'ZW', 'name' => 'Zimbabwe', 'capital' => 'Harare', 'continent' => 'Africa',
                    'continent_code' => 'AF', 'phone' => '+263', 'currency' => 'ZWL', 'symbol' => '$',
                    'alpha_3' => 'ZWE', 'created_at' => '2021-11-04 03:37:16', 'updated_at' => '2021-11-04 21:29:30'
                ]
            ];

            DB::table('countries')->insert($countries);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
