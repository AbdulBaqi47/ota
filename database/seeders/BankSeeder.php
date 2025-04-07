<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // JSON data for banks
       $banks = [
        [ "bank_name" => "Advans Pakistan", "code" => "ADVANS", "logo" => "advans.jpg" ],
        [ "bank_name" => "Al Baraka Bank Pakistan", "code" => "ABPL", "logo" => "al_baraka.jpg" ],
        [ "bank_name" => "Bank Al Habib", "code" => "BAHL", "logo" => "al_habib.jpg" ],
        [ "bank_name" => "Bank Alfalah", "code" => "BAFL", "logo" => "alfalah.jpg" ],
        [ "bank_name" => "Allied Bank Limited", "code" => "ABL", "logo" => "allied.jpg" ],
        [ "bank_name" => "Apna Microfinance Bank", "code" => "APNA", "logo" => "apna_microfinance.jpg" ],
        [ "bank_name" => "Askari Bank", "code" => "AKBL", "logo" => "askari.jpg" ],
        [ "bank_name" => "Bank Islami Pakistan", "code" => "BIPL", "logo" => "bankislami.jpg" ],
        [ "bank_name" => "Bank of Khyber", "code" => "BOK", "logo" => "bok.jpg" ],
        [ "bank_name" => "Bank of Punjab", "code" => "BOP", "logo" => "bop.jpg" ],
        [ "bank_name" => "Citi Bank", "code" => "CITI", "logo" => "citi.jpg" ],
        [ "bank_name" => "Dubai Islamic Bank Pakistan", "code" => "DIBPL", "logo" => "dubaiislamic.jpg" ],
        [ "bank_name" => "Easypaisa", "code" => "EP", "logo" => "easypaisa.jpg" ],
        [ "bank_name" => "Faysal Bank", "code" => "FBL", "logo" => "faysal.jpg" ],
        [ "bank_name" => "FINCA Microfinance Bank", "code" => "FINCA", "logo" => "finca_microfinance.jpg" ],
        [ "bank_name" => "First Women Bank", "code" => "FWBL", "logo" => "first_women.jpg" ],
        [ "bank_name" => "Habib Metropolitan Bank", "code" => "HMB", "logo" => "habib_metro.jpg" ],
        [ "bank_name" => "House Building Finance Corporation", "code" => "HBFC", "logo" => "habib_metro.jpg" ],
        [ "bank_name" => "HBL Konnect", "code" => "HBLK", "logo" => "hbl_konnect.jpg" ],
        [ "bank_name" => "Habib Bank Limited", "code" => "HBL", "logo" => "hbl.jpg" ],
        [ "bank_name" => "ICBC Bank", "code" => "ICBC", "logo" => "icbc.jpg" ],
        [ "bank_name" => "JazzCash", "code" => "JAZZ", "logo" => "jazzcash.jpg" ],
        [ "bank_name" => "JS Bank", "code" => "JSBL", "logo" => "jsbank.jpg" ],
        [ "bank_name" => "Khushhali Microfinance Bank", "code" => "KMBL", "logo" => "khushhali.jpg" ],
        [ "bank_name" => "MCB Bank Limited", "code" => "MCB", "logo" => "mcb.jpg" ],
        [ "bank_name" => "MCB Islamic Bank", "code" => "MCBIS", "logo" => "mcbislamic.jpg" ],
        [ "bank_name" => "Meezan Bank", "code" => "MEBL", "logo" => "meezan.jpg" ],
        [ "bank_name" => "Muslim Commercial Bank", "code" => "MCB", "logo" => "mcb.jpg" ],
        [ "bank_name" => "NayaPay", "code" => "NP", "logo" => "nayapay.jpg" ],
        [ "bank_name" => "National Bank of Pakistan", "code" => "NBP", "logo" => "nbp.jpg" ],
        [ "bank_name" => "NRSP Microfinance Bank", "code" => "NRSP", "logo" => "nrsp.jpg" ],
        [ "bank_name" => "Sadapay", "code" => "SADAPAY", "logo" => "sadapay.jpg" ],
        [ "bank_name" => "Samba Bank", "code" => "SBL", "logo" => "samba.jpg" ],
        [ "bank_name" => "Standard Chartered Bank Pakistan", "code" => "SCBPK", "logo" => "scb.jpg" ],
        [ "bank_name" => "Silk Bank", "code" => "SILK", "logo" => "silk.png" ],
        [ "bank_name" => "Soneri Bank", "code" => "SNBL", "logo" => "soneri.jpg" ],
        [ "bank_name" => "Summit Bank", "code" => "SMBL", "logo" => "summit.jpg" ],
        [ "bank_name" => "United Bank Limited", "code" => "UBL", "logo" => "ubl.jpg" ],
        [ "bank_name" => "UPaisa", "code" => "UPAISA", "logo" => "upaisa.jpg" ]
    ];


        // Insert banks data into the 'banks' table
        DB::table('banks')->insert($banks);
    }
}
