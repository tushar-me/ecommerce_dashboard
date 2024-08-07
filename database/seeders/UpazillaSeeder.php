<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpazillaSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('upalias')->insert([
            ["id" => "1", "district_id" => "1", "name" => "Debidwar", "bn_name" => "দেবিদ্বার", "url" => "debidwar.comilla.gov.bd"],
            ["id" => "2", "district_id" => "1", "name" => "Barura", "bn_name" => "বরুড়া", "url" => "barura.comilla.gov.bd"],
            ["id" => "3", "district_id" => "1", "name" => "Brahmanpara", "bn_name" => "ব্রাহ্মণপাড়া", "url" => "brahmanpara.comilla.gov.bd"],
            ["id" => "4", "district_id" => "1", "name" => "Chandina", "bn_name" => "চান্দিনা", "url" => "chandina.comilla.gov.bd"],
            ["id" => "5", "district_id" => "1", "name" => "Chauddagram", "bn_name" => "চৌদ্দগ্রাম", "url" => "chauddagram.comilla.gov.bd"],
            ["id" => "6", "district_id" => "1", "name" => "Daudkandi", "bn_name" => "দাউদকান্দি", "url" => "daudkandi.comilla.gov.bd"],
            ["id" => "7", "district_id" => "1", "name" => "Homna", "bn_name" => "হোমনা", "url" => "homna.comilla.gov.bd"],
            ["id" => "8", "district_id" => "1", "name" => "Laksam", "bn_name" => "লাকসাম", "url" => "laksam.comilla.gov.bd"],
            ["id" => "9", "district_id" => "1", "name" => "Muradnagar", "bn_name" => "মুরাদনগর", "url" => "muradnagar.comilla.gov.bd"],
            ["id" => "10", "district_id" => "1", "name" => "Nangalkot", "bn_name" => "নাঙ্গলকোট", "url" => "nangalkot.comilla.gov.bd"],
            ["id" => "11", "district_id" => "1", "name" => "Comilla Sadar", "bn_name" => "কুমিল্লা সদর", "url" => "comillasadar.comilla.gov.bd"],
            ["id" => "12", "district_id" => "1", "name" => "Meghna", "bn_name" => "মেঘনা", "url" => "meghna.comilla.gov.bd"],
            ["id" => "13", "district_id" => "1", "name" => "Monohargonj", "bn_name" => "মনোহরগঞ্জ", "url" => "monohargonj.comilla.gov.bd"],
            ["id" => "14", "district_id" => "1", "name" => "Sadarsouth", "bn_name" => "সদর দক্ষিণ", "url" => "sadarsouth.comilla.gov.bd"],
            ["id" => "15", "district_id" => "1", "name" => "Titas", "bn_name" => "তিতাস", "url" => "titas.comilla.gov.bd"],
            ["id" => "16", "district_id" => "1", "name" => "Burichang", "bn_name" => "বুড়িচং", "url" => "burichang.comilla.gov.bd"],
            ["id" => "17", "district_id" => "1", "name" => "Lalmai", "bn_name" => "লালমাই", "url" => "lalmai.comilla.gov.bd"],
            ["id" => "18", "district_id" => "2", "name" => "Chhagalnaiya", "bn_name" => "ছাগলনাইয়া", "url" => "chhagalnaiya.feni.gov.bd"],
            ["id" => "19", "district_id" => "2", "name" => "Feni Sadar", "bn_name" => "ফেনী সদর", "url" => "sadar.feni.gov.bd"],
            ["id" => "20", "district_id" => "2", "name" => "Sonagazi", "bn_name" => "সোনাগাজী", "url" => "sonagazi.feni.gov.bd"],
            ["id" => "21", "district_id" => "2", "name" => "Fulgazi", "bn_name" => "ফুলগাজী", "url" => "fulgazi.feni.gov.bd"],
            ["id" => "22", "district_id" => "2", "name" => "Parshuram", "bn_name" => "পরশুরাম", "url" => "parshuram.feni.gov.bd"],
            ["id" => "23", "district_id" => "2", "name" => "Daganbhuiyan", "bn_name" => "দাগনভূঞা", "url" => "daganbhuiyan.feni.gov.bd"],
            ["id" => "24", "district_id" => "3", "name" => "Brahmanbaria Sadar", "bn_name" => "ব্রাহ্মণবাড়িয়া সদর", "url" => "sadar.brahmanbaria.gov.bd"],
            ["id" => "25", "district_id" => "3", "name" => "Kasba", "bn_name" => "কসবা", "url" => "kasba.brahmanbaria.gov.bd"],
            ["id" => "26", "district_id" => "3", "name" => "Nasirnagar", "bn_name" => "নাসিরনগর", "url" => "nasirnagar.brahmanbaria.gov.bd"],
            ["id" => "27", "district_id" => "3", "name" => "Sarail", "bn_name" => "সরাইল", "url" => "sarail.brahmanbaria.gov.bd"],
            ["id" => "28", "district_id" => "3", "name" => "Ashuganj", "bn_name" => "আশুগঞ্জ", "url" => "ashuganj.brahmanbaria.gov.bd"],
            ["id" => "29", "district_id" => "3", "name" => "Akhaura", "bn_name" => "আখাউড়া", "url" => "akhaura.brahmanbaria.gov.bd"],
            ["id" => "30", "district_id" => "3", "name" => "Nabinagar", "bn_name" => "নবীনগর", "url" => "nabinagar.brahmanbaria.gov.bd"],
            ["id" => "31", "district_id" => "3", "name" => "Bancharampur", "bn_name" => "বাঞ্ছারামপুর", "url" => "bancharampur.brahmanbaria.gov.bd"],
            ["id" => "32", "district_id" => "3", "name" => "Bijoynagar", "bn_name" => "বিজয়নগর", "url" => "bijoynagar.brahmanbaria.gov.bd"],
            ["id" => "33", "district_id" => "4", "name" => "Rangamati Sadar", "bn_name" => "রাঙ্গামাটি সদর", "url" => "sadar.rangamati.gov.bd"],
            ["id" => "34", "district_id" => "4", "name" => "Kaptai", "bn_name" => "কাপ্তাই", "url" => "kaptai.rangamati.gov.bd"],
            ["id" => "35", "district_id" => "4", "name" => "Kawkhali", "bn_name" => "কাউখালী", "url" => "kawkhali.rangamati.gov.bd"],
            ["id" => "36", "district_id" => "4", "name" => "Baghaichari", "bn_name" => "বাঘাইছড়ি", "url" => "baghaichari.rangamati.gov.bd"],
            ["id" => "37", "district_id" => "4", "name" => "Barkal", "bn_name" => "বরকল", "url" => "barkal.rangamati.gov.bd"],
            ["id" => "38", "district_id" => "4", "name" => "Langadu", "bn_name" => "লংগদু", "url" => "langadu.rangamati.gov.bd"],
            ["id" => "39", "district_id" => "4", "name" => "Rajasthali", "bn_name" => "রাজস্থলী", "url" => "rajasthali.rangamati.gov.bd"],
            ["id" => "40", "district_id" => "4", "name" => "Belaichari", "bn_name" => "বিলাইছড়ি", "url" => "belaichari.rangamati.gov.bd"],
            ["id" => "41", "district_id" => "4", "name" => "Juraichari", "bn_name" => "জুরাছড়ি", "url" => "juraichari.rangamati.gov.bd"],
            ["id" => "42", "district_id" => "4", "name" => "Naniarchar", "bn_name" => "নানিয়ারচর", "url" => "naniarchar.rangamati.gov.bd"],
            ["id" => "43", "district_id" => "5", "name" => "Noakhali Sadar", "bn_name" => "নোয়াখালী সদর", "url" => "sadar.noakhali.gov.bd"],
            ["id" => "44", "district_id" => "5", "name" => "Companiganj", "bn_name" => "কোম্পানীগঞ্জ", "url" => "companiganj.noakhali.gov.bd"],
            ["id" => "45", "district_id" => "5", "name" => "Begumganj", "bn_name" => "বেগমগঞ্জ", "url" => "begumganj.noakhali.gov.bd"],
            ["id" => "46", "district_id" => "5", "name" => "Hatia", "bn_name" => "হাতিয়া", "url" => "hatia.noakhali.gov.bd"],
            ["id" => "47", "district_id" => "5", "name" => "Subarnachar", "bn_name" => "সুবর্ণচর", "url" => "subarnachar.noakhali.gov.bd"],
            ["id" => "48", "district_id" => "5", "name" => "Kabirhat", "bn_name" => "কবিরহাট", "url" => "kabirhat.noakhali.gov.bd"],
            ["id" => "49", "district_id" => "5", "name" => "Senbug", "bn_name" => "সেনবাগ", "url" => "senbug.noakhali.gov.bd"],
            ["id" => "50", "district_id" => "5", "name" => "Chatkhil", "bn_name" => "চাটখিল", "url" => "chatkhil.noakhali.gov.bd"],
            ["id" => "51", "district_id" => "5", "name" => "Sonaimori", "bn_name" => "সোনাইমুড়ী", "url" => "sonaimori.noakhali.gov.bd"],
            ["id" => "52", "district_id" => "6", "name" => "Haimchar", "bn_name" => "হাইমচর", "url" => "haimchar.chandpur.gov.bd"],
            ["id" => "53", "district_id" => "6", "name" => "Kachua", "bn_name" => "কচুয়া", "url" => "kachua.chandpur.gov.bd"],
            ["id" => "54", "district_id" => "6", "name" => "Shahrasti", "bn_name" => "শাহরাস্তি", "url" => "shahrasti.chandpur.gov.bd"],
            ["id" => "55", "district_id" => "6", "name" => "Chandpur Sadar", "bn_name" => "চাঁদপুর সদর", "url" => "sadar.chandpur.gov.bd"],
            ["id" => "56", "district_id" => "6", "name" => "Matlab South", "bn_name" => "মতলব দক্ষিণ", "url" => "matlabsouth.chandpur.gov.bd"],
            ["id" => "57", "district_id" => "6", "name" => "Hajiganj", "bn_name" => "হাজীগঞ্জ", "url" => "hajiganj.chandpur.gov.bd"],
            ["id" => "58", "district_id" => "6", "name" => "Matlab North", "bn_name" => "মতলব উত্তর", "url" => "matlabnorth.chandpur.gov.bd"],
            ["id" => "59", "district_id" => "6", "name" => "Faridgonj", "bn_name" => "ফরিদগঞ্জ", "url" => "faridgonj.chandpur.gov.bd"],
            ["id" => "60", "district_id" => "7", "name" => "Lakshmipur Sadar", "bn_name" => "লক্ষ্মীপুর সদর", "url" => "sadar.lakshmipur.gov.bd"],
            ["id" => "61", "district_id" => "7", "name" => "Kamalnagar", "bn_name" => "কমলনগর", "url" => "kamalnagar.lakshmipur.gov.bd"],
            ["id" => "62", "district_id" => "7", "name" => "Raipur", "bn_name" => "রায়পুর", "url" => "raipur.lakshmipur.gov.bd"],
            ["id" => "63", "district_id" => "7", "name" => "Ramgati", "bn_name" => "রামগতি", "url" => "ramgati.lakshmipur.gov.bd"],
            ["id" => "64", "district_id" => "7", "name" => "Ramganj", "bn_name" => "রামগঞ্জ", "url" => "ramganj.lakshmipur.gov.bd"],
            ["id" => "65", "district_id" => "8", "name" => "Rangunia", "bn_name" => "রাঙ্গুনিয়া", "url" => "rangunia.chittagong.gov.bd"],
            ["id" => "66", "district_id" => "8", "name" => "Sitakunda", "bn_name" => "সীতাকুন্ড", "url" => "sitakunda.chittagong.gov.bd"],
            ["id" => "67", "district_id" => "8", "name" => "Mirsharai", "bn_name" => "মীরসরাই", "url" => "mirsharai.chittagong.gov.bd"],
            ["id" => "68", "district_id" => "8", "name" => "Patiya", "bn_name" => "পটিয়া", "url" => "patiya.chittagong.gov.bd"],
            ["id" => "69", "district_id" => "8", "name" => "Sandwip", "bn_name" => "সন্দ্বীপ", "url" => "sandwip.chittagong.gov.bd"],
            ["id" => "70", "district_id" => "8", "name" => "Banshkhali", "bn_name" => "বাঁশখালী", "url" => "banshkhali.chittagong.gov.bd"],
            ["id" => "71", "district_id" => "8", "name" => "Boalkhali", "bn_name" => "বোয়ালখালী", "url" => "boalkhali.chittagong.gov.bd"],
            ["id" => "72", "district_id" => "8", "name" => "Anwara", "bn_name" => "আনোয়ারা", "url" => "anwara.chittagong.gov.bd"],
            ["id" => "73", "district_id" => "8", "name" => "Chandanaish", "bn_name" => "চন্দনাইশ", "url" => "chandanaish.chittagong.gov.bd"],
            ["id" => "74", "district_id" => "8", "name" => "Satkania", "bn_name" => "সাতকানিয়া", "url" => "satkania.chittagong.gov.bd"],
            ["id" => "75", "district_id" => "8", "name" => "Lohagara", "bn_name" => "লোহাগাড়া", "url" => "lohagara.chittagong.gov.bd"],
            ["id" => "76", "district_id" => "8", "name" => "Hathazari", "bn_name" => "হাটহাজারী", "url" => "hathazari.chittagong.gov.bd"],
            ["id" => "77", "district_id" => "8", "name" => "Fatikchhari", "bn_name" => "ফটিকছড়ি", "url" => "fatikchhari.chittagong.gov.bd"],
            ["id" => "78", "district_id" => "8", "name" => "Raozan", "bn_name" => "রাউজান", "url" => "raozan.chittagong.gov.bd"],
            ["id" => "79", "district_id" => "8", "name" => "Karnafuli", "bn_name" => "কর্ণফুলী", "url" => "karnafuli.chittagong.gov.bd"],
            ["id" => "80", "district_id" => "9", "name" => "Coxsbazar Sadar", "bn_name" => "কক্সবাজার সদর", "url" => "sadar.coxsbazar.gov.bd"],
            ["id" => "81", "district_id" => "9", "name" => "Chakaria", "bn_name" => "চকরিয়া", "url" => "chakaria.coxsbazar.gov.bd"],
            ["id" => "82", "district_id" => "9", "name" => "Kutubdia", "bn_name" => "কুতুবদিয়া", "url" => "kutubdia.coxsbazar.gov.bd"],
            ["id" => "83", "district_id" => "9", "name" => "Ukhiya", "bn_name" => "উখিয়া", "url" => "ukhiya.coxsbazar.gov.bd"],
            ["id" => "84", "district_id" => "9", "name" => "Moheshkhali", "bn_name" => "মহেশখালী", "url" => "moheshkhali.coxsbazar.gov.bd"],
            ["id" => "85", "district_id" => "9", "name" => "Pekua", "bn_name" => "পেকুয়া", "url" => "pekua.coxsbazar.gov.bd"],
            ["id" => "86", "district_id" => "9", "name" => "Ramu", "bn_name" => "রামু", "url" => "ramu.coxsbazar.gov.bd"],
            ["id" => "87", "district_id" => "9", "name" => "Teknaf", "bn_name" => "টেকনাফ", "url" => "teknaf.coxsbazar.gov.bd"],
            ["id" => "88", "district_id" => "10", "name" => "Khagrachhari Sadar", "bn_name" => "খাগড়াছড়ি সদর", "url" => "sadar.khagrachhari.gov.bd"],
            ["id" => "89", "district_id" => "10", "name" => "Dighinala", "bn_name" => "দিঘীনালা", "url" => "dighinala.khagrachhari.gov.bd"],
            ["id" => "90", "district_id" => "10", "name" => "Panchari", "bn_name" => "পানছড়ি", "url" => "panchari.khagrachhari.gov.bd"],
            ["id" => "91", "district_id" => "10", "name" => "Laxmichhari", "bn_name" => "লক্ষীছড়ি", "url" => "laxmichhari.khagrachhari.gov.bd"],
            ["id" => "92", "district_id" => "10", "name" => "Mohalchari", "bn_name" => "মহালছড়ি", "url" => "mohalchari.khagrachhari.gov.bd"],
            ["id" => "93", "district_id" => "10", "name" => "Manikchari", "bn_name" => "মানিকছড়ি", "url" => "manikchari.khagrachhari.gov.bd"],
            ["id" => "94", "district_id" => "10", "name" => "Ramgarh", "bn_name" => "রামগড়", "url" => "ramgarh.khagrachhari.gov.bd"],
            ["id" => "95", "district_id" => "10", "name" => "Matiranga", "bn_name" => "মাটিরাঙ্গা", "url" => "matiranga.khagrachhari.gov.bd"],
            ["id" => "96", "district_id" => "10", "name" => "Guimara", "bn_name" => "গুইমারা", "url" => "guimara.khagrachhari.gov.bd"],
            ["id" => "97", "district_id" => "11", "name" => "Bandarban Sadar", "bn_name" => "বান্দরবান সদর", "url" => "sadar.bandarban.gov.bd"],
            ["id" => "98", "district_id" => "11", "name" => "Alikadam", "bn_name" => "আলীকদম", "url" => "alikadam.bandarban.gov.bd"],
            ["id" => "99", "district_id" => "11", "name" => "Naikhongchhari", "bn_name" => "নাইকশ্যংছড়ি", "url" => "naikhongchhari.bandarban.gov.bd"],
            ["id" => "100", "district_id" => "11", "name" => "Rowangchhari", "bn_name" => "রোয়াংছড়ি", "url" => "rowangchhari.bandarban.gov.bd"],
            ["id" => "101", "district_id" => "11", "name" => "Lama", "bn_name" => "লামা", "url" => "lama.bandarban.gov.bd"],
            ["id" => "102", "district_id" => "11", "name" => "Ruma", "bn_name" => "রুমা", "url" => "ruma.bandarban.gov.bd"],
            ["id" => "103", "district_id" => "11", "name" => "Thanchi", "bn_name" => "থানচি", "url" => "thanchi.bandarban.gov.bd"],
            ["id" => "104", "district_id" => "12", "name" => "Belkuchi", "bn_name" => "বেলকুচি", "url" => "belkuchi.sirajganj.gov.bd"],
            ["id" => "105", "district_id" => "12", "name" => "Chauhali", "bn_name" => "চৌহালি", "url" => "chauhali.sirajganj.gov.bd"],
            ["id" => "106", "district_id" => "12", "name" => "Kamarkhand", "bn_name" => "কামারখন্দ", "url" => "kamarkhand.sirajganj.gov.bd"],
            ["id" => "107", "district_id" => "12", "name" => "Kazipur", "bn_name" => "কাজীপুর", "url" => "kazipur.sirajganj.gov.bd"],
            ["id" => "108", "district_id" => "12", "name" => "Raigonj", "bn_name" => "রায়গঞ্জ", "url" => "raigonj.sirajganj.gov.bd"],
            ["id" => "109", "district_id" => "12", "name" => "Shahjadpur", "bn_name" => "শাহজাদপুর", "url" => "shahjadpur.sirajganj.gov.bd"],
            ["id" => "110", "district_id" => "12", "name" => "Sirajganj Sadar", "bn_name" => "সিরাজগঞ্জ সদর", "url" => "sirajganjsadar.sirajganj.gov.bd"],
            ["id" => "111", "district_id" => "12", "name" => "Tarash", "bn_name" => "তাড়াশ", "url" => "tarash.sirajganj.gov.bd"],
            ["id" => "112", "district_id" => "12", "name" => "Ullapara", "bn_name" => "উল্লাপাড়া", "url" => "ullapara.sirajganj.gov.bd"],
            ["id" => "113", "district_id" => "13", "name" => "Sujanagar", "bn_name" => "সুজানগর", "url" => "sujanagar.pabna.gov.bd"],
            ["id" => "114", "district_id" => "13", "name" => "Ishurdi", "bn_name" => "ঈশ্বরদী", "url" => "ishurdi.pabna.gov.bd"],
            ["id" => "115", "district_id" => "13", "name" => "Bhangura", "bn_name" => "ভাঙ্গুড়া", "url" => "bhangura.pabna.gov.bd"],
            ["id" => "116", "district_id" => "13", "name" => "Pabna Sadar", "bn_name" => "পাবনা সদর", "url" => "pabnasadar.pabna.gov.bd"],
            ["id" => "117", "district_id" => "13", "name" => "Bera", "bn_name" => "বেড়া", "url" => "bera.pabna.gov.bd"],
            ["id" => "118", "district_id" => "13", "name" => "Atghoria", "bn_name" => "আটঘরিয়া", "url" => "atghoria.pabna.gov.bd"],
            ["id" => "119", "district_id" => "13", "name" => "Chatmohar", "bn_name" => "চাটমোহর", "url" => "chatmohar.pabna.gov.bd"],
            ["id" => "120", "district_id" => "13", "name" => "Santhia", "bn_name" => "সাঁথিয়া", "url" => "santhia.pabna.gov.bd"],
            ["id" => "121", "district_id" => "13", "name" => "Faridpur", "bn_name" => "ফরিদপুর", "url" => "faridpur.pabna.gov.bd"],
            ["id" => "122", "district_id" => "14", "name" => "Kahaloo", "bn_name" => "কাহালু", "url" => "kahaloo.bogra.gov.bd"],
            ["id" => "123", "district_id" => "14", "name" => "Bogra Sadar", "bn_name" => "বগুড়া সদর", "url" => "sadar.bogra.gov.bd"],
            ["id" => "124", "district_id" => "14", "name" => "Shariakandi", "bn_name" => "সারিয়াকান্দি", "url" => "shariakandi.bogra.gov.bd"],
            ["id" => "125", "district_id" => "14", "name" => "Shajahanpur", "bn_name" => "শাজাহানপুর", "url" => "shajahanpur.bogra.gov.bd"],
            ["id" => "126", "district_id" => "14", "name" => "Dupchanchia", "bn_name" => "দুপচাচিঁয়া", "url" => "dupchanchia.bogra.gov.bd"],
            ["id" => "127", "district_id" => "14", "name" => "Adamdighi", "bn_name" => "আদমদিঘি", "url" => "adamdighi.bogra.gov.bd"],
            ["id" => "128", "district_id" => "14", "name" => "Nondigram", "bn_name" => "নন্দিগ্রাম", "url" => "nondigram.bogra.gov.bd"],
            ["id" => "129", "district_id" => "14", "name" => "Sonatala", "bn_name" => "সোনাতলা", "url" => "sonatala.bogra.gov.bd"],
            ["id" => "130", "district_id" => "14", "name" => "Dhunot", "bn_name" => "ধুনট", "url" => "dhunot.bogra.gov.bd"],
            ["id" => "131", "district_id" => "14", "name" => "Gabtali", "bn_name" => "গাবতলী", "url" => "gabtali.bogra.gov.bd"],
            ["id" => "132", "district_id" => "14", "name" => "Sherpur", "bn_name" => "শেরপুর", "url" => "sherpur.bogra.gov.bd"],
            ["id" => "133", "district_id" => "14", "name" => "Shibganj", "bn_name" => "শিবগঞ্জ", "url" => "shibganj.bogra.gov.bd"],
            ["id" => "134", "district_id" => "15", "name" => "Paba", "bn_name" => "পবা", "url" => "paba.rajshahi.gov.bd"],
            ["id" => "135", "district_id" => "15", "name" => "Durgapur", "bn_name" => "দুর্গাপুর", "url" => "durgapur.rajshahi.gov.bd"],
            ["id" => "136", "district_id" => "15", "name" => "Mohonpur", "bn_name" => "মোহনপুর", "url" => "mohonpur.rajshahi.gov.bd"],
            ["id" => "137", "district_id" => "15", "name" => "Charghat", "bn_name" => "চারঘাট", "url" => "charghat.rajshahi.gov.bd"],
            ["id" => "138", "district_id" => "15", "name" => "Puthia", "bn_name" => "পুঠিয়া", "url" => "puthia.rajshahi.gov.bd"],
            ["id" => "139", "district_id" => "15", "name" => "Bagha", "bn_name" => "বাঘা", "url" => "bagha.rajshahi.gov.bd"],
            ["id" => "140", "district_id" => "15", "name" => "Godagari", "bn_name" => "গোদাগাড়ী", "url" => "godagari.rajshahi.gov.bd"],
            ["id" => "141", "district_id" => "15", "name" => "Tanore", "bn_name" => "তানোর", "url" => "tanore.rajshahi.gov.bd"],
            ["id" => "142", "district_id" => "15", "name" => "Bagmara", "bn_name" => "বাগমারা", "url" => "bagmara.rajshahi.gov.bd"],
            ["id" => "143", "district_id" => "16", "name" => "Natore Sadar", "bn_name" => "নাটোর সদর", "url" => "natoresadar.natore.gov.bd"],
            ["id" => "144", "district_id" => "16", "name" => "Singra", "bn_name" => "সিংড়া", "url" => "singra.natore.gov.bd"],
            ["id" => "145", "district_id" => "16", "name" => "Baraigram", "bn_name" => "বড়াইগ্রাম", "url" => "baraigram.natore.gov.bd"],
            ["id" => "146", "district_id" => "16", "name" => "Bagatipara", "bn_name" => "বাগাতিপাড়া", "url" => "bagatipara.natore.gov.bd"],
            ["id" => "147", "district_id" => "16", "name" => "Lalpur", "bn_name" => "লালপুর", "url" => "lalpur.natore.gov.bd"],
            ["id" => "148", "district_id" => "16", "name" => "Gurudaspur", "bn_name" => "গুরুদাসপুর", "url" => "gurudaspur.natore.gov.bd"],
            ["id" => "149", "district_id" => "16", "name" => "Naldanga", "bn_name" => "নলডাঙ্গা", "url" => "naldanga.natore.gov.bd"],
            ["id" => "150", "district_id" => "17", "name" => "Akkelpur", "bn_name" => "আক্কেলপুর", "url" => "akkelpur.joypurhat.gov.bd"],
            ["id" => "151", "district_id" => "17", "name" => "Kalai", "bn_name" => "কালাই", "url" => "kalai.joypurhat.gov.bd"],
            ["id" => "152", "district_id" => "17", "name" => "Khetlal", "bn_name" => "ক্ষেতলাল", "url" => "khetlal.joypurhat.gov.bd"],
            ["id" => "153", "district_id" => "17", "name" => "Panchbibi", "bn_name" => "পাঁচবিবি", "url" => "panchbibi.joypurhat.gov.bd"],
            ["id" => "154", "district_id" => "17", "name" => "Joypurhat Sadar", "bn_name" => "জয়পুরহাট সদর", "url" => "joypurhatsadar.joypurhat.gov.bd"],
            ["id" => "155", "district_id" => "18", "name" => "Chapainawabganj Sadar", "bn_name" => "চাঁপাইনবাবগঞ্জ সদর", "url" => "chapainawabganjsadar.chapainawabganj.gov.bd"],
            ["id" => "156", "district_id" => "18", "name" => "Gomostapur", "bn_name" => "গোমস্তাপুর", "url" => "gomostapur.chapainawabganj.gov.bd"],
            ["id" => "157", "district_id" => "18", "name" => "Nachol", "bn_name" => "নাচোল", "url" => "nachol.chapainawabganj.gov.bd"],
            ["id" => "158", "district_id" => "18", "name" => "Bholahat", "bn_name" => "ভোলাহাট", "url" => "bholahat.chapainawabganj.gov.bd"],
            ["id" => "159", "district_id" => "18", "name" => "Shibganj", "bn_name" => "শিবগঞ্জ", "url" => "shibganj.chapainawabganj.gov.bd"],
            ["id" => "160", "district_id" => "19", "name" => "Mohadevpur", "bn_name" => "মহাদেবপুর", "url" => "mohadevpur.naogaon.gov.bd"],
            ["id" => "161", "district_id" => "19", "name" => "Badalgachi", "bn_name" => "বদলগাছী", "url" => "badalgachi.naogaon.gov.bd"],
            ["id" => "162", "district_id" => "19", "name" => "Patnitala", "bn_name" => "পত্নিতলা", "url" => "patnitala.naogaon.gov.bd"],
            ["id" => "163", "district_id" => "19", "name" => "Dhamoirhat", "bn_name" => "ধামইরহাট", "url" => "dhamoirhat.naogaon.gov.bd"],
            ["id" => "164", "district_id" => "19", "name" => "Niamatpur", "bn_name" => "নিয়ামতপুর", "url" => "niamatpur.naogaon.gov.bd"],
            ["id" => "165", "district_id" => "19", "name" => "Manda", "bn_name" => "মান্দা", "url" => "manda.naogaon.gov.bd"],
            ["id" => "166", "district_id" => "19", "name" => "Atrai", "bn_name" => "আত্রাই", "url" => "atrai.naogaon.gov.bd"],
            ["id" => "167", "district_id" => "19", "name" => "Raninagar", "bn_name" => "রাণীনগর", "url" => "raninagar.naogaon.gov.bd"],
            ["id" => "168", "district_id" => "19", "name" => "Naogaon Sadar", "bn_name" => "নওগাঁ সদর", "url" => "naogaonsadar.naogaon.gov.bd"],
            ["id" => "169", "district_id" => "19", "name" => "Porsha", "bn_name" => "পোরশা", "url" => "porsha.naogaon.gov.bd"],
            ["id" => "170", "district_id" => "19", "name" => "Sapahar", "bn_name" => "সাপাহার", "url" => "sapahar.naogaon.gov.bd"],
            ["id" => "171", "district_id" => "20", "name" => "Manirampur", "bn_name" => "মণিরামপুর", "url" => "manirampur.jessore.gov.bd"],
            ["id" => "172", "district_id" => "20", "name" => "Abhaynagar", "bn_name" => "অভয়নগর", "url" => "abhaynagar.jessore.gov.bd"],
            ["id" => "173", "district_id" => "20", "name" => "Bagherpara", "bn_name" => "বাঘারপাড়া", "url" => "bagherpara.jessore.gov.bd"],
            ["id" => "174", "district_id" => "20", "name" => "Chougachha", "bn_name" => "চৌগাছা", "url" => "chougachha.jessore.gov.bd"],
            ["id" => "175", "district_id" => "20", "name" => "Jhikargacha", "bn_name" => "ঝিকরগাছা", "url" => "jhikargacha.jessore.gov.bd"],
            ["id" => "176", "district_id" => "20", "name" => "Keshabpur", "bn_name" => "কেশবপুর", "url" => "keshabpur.jessore.gov.bd"],
            ["id" => "177", "district_id" => "20", "name" => "Jessore Sadar", "bn_name" => "যশোর সদর", "url" => "sadar.jessore.gov.bd"],
            ["id" => "178", "district_id" => "20", "name" => "Sharsha", "bn_name" => "শার্শা", "url" => "sharsha.jessore.gov.bd"],
            ["id" => "179", "district_id" => "21", "name" => "Assasuni", "bn_name" => "আশাশুনি", "url" => "assasuni.satkhira.gov.bd"],
            ["id" => "180", "district_id" => "21", "name" => "Debhata", "bn_name" => "দেবহাটা", "url" => "debhata.satkhira.gov.bd"],
            ["id" => "181", "district_id" => "21", "name" => "Kalaroa", "bn_name" => "কলারোয়া", "url" => "kalaroa.satkhira.gov.bd"],
            ["id" => "182", "district_id" => "21", "name" => "Satkhira Sadar", "bn_name" => "সাতক্ষীরা সদর", "url" => "satkhirasadar.satkhira.gov.bd"],
            ["id" => "183", "district_id" => "21", "name" => "Shyamnagar", "bn_name" => "শ্যামনগর", "url" => "shyamnagar.satkhira.gov.bd"],
            ["id" => "184", "district_id" => "21", "name" => "Tala", "bn_name" => "তালা", "url" => "tala.satkhira.gov.bd"],
            ["id" => "185", "district_id" => "21", "name" => "Kaliganj", "bn_name" => "কালিগঞ্জ", "url" => "kaliganj.satkhira.gov.bd"],
            ["id" => "186", "district_id" => "22", "name" => "Mujibnagar", "bn_name" => "মুজিবনগর", "url" => "mujibnagar.meherpur.gov.bd"],
            ["id" => "187", "district_id" => "22", "name" => "Meherpur Sadar", "bn_name" => "মেহেরপুর সদর", "url" => "meherpursadar.meherpur.gov.bd"],
            ["id" => "188", "district_id" => "22", "name" => "Gangni", "bn_name" => "গাংনী", "url" => "gangni.meherpur.gov.bd"],
            ["id" => "189", "district_id" => "23", "name" => "Narail Sadar", "bn_name" => "নড়াইল সদর", "url" => "narailsadar.narail.gov.bd"],
            ["id" => "190", "district_id" => "23", "name" => "Lohagara", "bn_name" => "লোহাগড়া", "url" => "lohagara.narail.gov.bd"],
            ["id" => "191", "district_id" => "23", "name" => "Kalia", "bn_name" => "কালিয়া", "url" => "kalia.narail.gov.bd"],
            ["id" => "192", "district_id" => "24", "name" => "Chuadanga Sadar", "bn_name" => "চুয়াডাঙ্গা সদর", "url" => "chuadangasadar.chuadanga.gov.bd"],
            ["id" => "193", "district_id" => "24", "name" => "Alamdanga", "bn_name" => "আলমডাঙ্গা", "url" => "alamdanga.chuadanga.gov.bd"],
            ["id" => "194", "district_id" => "24", "name" => "Damurhuda", "bn_name" => "দামুড়হুদা", "url" => "damurhuda.chuadanga.gov.bd"],
            ["id" => "195", "district_id" => "24", "name" => "Jibannagar", "bn_name" => "জীবননগর", "url" => "jibannagar.chuadanga.gov.bd"],
            ["id" => "196", "district_id" => "25", "name" => "Kushtia Sadar", "bn_name" => "কুষ্টিয়া সদর", "url" => "kushtiasadar.kushtia.gov.bd"],
            ["id" => "197", "district_id" => "25", "name" => "Kumarkhali", "bn_name" => "কুমারখালী", "url" => "kumarkhali.kushtia.gov.bd"],
            ["id" => "198", "district_id" => "25", "name" => "Khoksa", "bn_name" => "খোকসা", "url" => "khoksa.kushtia.gov.bd"],
            ["id" => "199", "district_id" => "25", "name" => "Mirpur", "bn_name" => "মিরপুর", "url" => "mirpurkushtia.kushtia.gov.bd"],
            ["id" => "200", "district_id" => "25", "name" => "Daulatpur", "bn_name" => "দৌলতপুর", "url" => "daulatpur.kushtia.gov.bd"],
            [
                'id' => '201',
                'district_id' => '25',
                'name' => 'Bheramara',
                'bn_name' => 'ভেড়ামারা',
                'url' => 'bheramara.kushtia.gov.bd',
            ],
            [
                'id' => '202',
                'district_id' => '26',
                'name' => 'Shalikha',
                'bn_name' => 'শালিখা',
                'url' => 'shalikha.magura.gov.bd',
            ],
            [
                'id' => '203',
                'district_id' => '26',
                'name' => 'Sreepur',
                'bn_name' => 'শ্রীপুর',
                'url' => 'sreepur.magura.gov.bd',
            ],
            [
                'id' => '204',
                'district_id' => '26',
                'name' => 'Magura Sadar',
                'bn_name' => 'মাগুরা সদর',
                'url' => 'magurasadar.magura.gov.bd',
            ],
            [
                'id' => '205',
                'district_id' => '26',
                'name' => 'Mohammadpur',
                'bn_name' => 'মহম্মদপুর',
                'url' => 'mohammadpur.magura.gov.bd',
            ],
            [
                'id' => '206',
                'district_id' => '27',
                'name' => 'Paikgasa',
                'bn_name' => 'পাইকগাছা',
                'url' => 'paikgasa.khulna.gov.bd',
            ],
            [
                'id' => '207',
                'district_id' => '27',
                'name' => 'Fultola',
                'bn_name' => 'ফুলতলা',
                'url' => 'fultola.khulna.gov.bd',
            ],
            [
                'id' => '208',
                'district_id' => '27',
                'name' => 'Digholia',
                'bn_name' => 'দিঘলিয়া',
                'url' => 'digholia.khulna.gov.bd',
            ],
            [
                'id' => '209',
                'district_id' => '27',
                'name' => 'Rupsha',
                'bn_name' => 'রূপসা',
                'url' => 'rupsha.khulna.gov.bd',
            ],
            [
                'id' => '210',
                'district_id' => '27',
                'name' => 'Terokhada',
                'bn_name' => 'তেরখাদা',
                'url' => 'terokhada.khulna.gov.bd',
            ],
            [
                'id' => '211',
                'district_id' => '27',
                'name' => 'Dumuria',
                'bn_name' => 'ডুমুরিয়া',
                'url' => 'dumuria.khulna.gov.bd',
            ],
            [
                'id' => '212',
                'district_id' => '27',
                'name' => 'Botiaghata',
                'bn_name' => 'বটিয়াঘাটা',
                'url' => 'botiaghata.khulna.gov.bd',
            ],
            [
                'id' => '213',
                'district_id' => '27',
                'name' => 'Dakop',
                'bn_name' => 'দাকোপ',
                'url' => 'dakop.khulna.gov.bd',
            ],
            [
                'id' => '214',
                'district_id' => '27',
                'name' => 'Koyra',
                'bn_name' => 'কয়রা',
                'url' => 'koyra.khulna.gov.bd',
            ],
            [
                'id' => '215',
                'district_id' => '28',
                'name' => 'Fakirhat',
                'bn_name' => 'ফকিরহাট',
                'url' => 'fakirhat.bagerhat.gov.bd',
            ],
            [
                'id' => '216',
                'district_id' => '28',
                'name' => 'Bagerhat Sadar',
                'bn_name' => 'বাগেরহাট সদর',
                'url' => 'sadar.bagerhat.gov.bd',
            ],
            [
                'id' => '217',
                'district_id' => '28',
                'name' => 'Mollahat',
                'bn_name' => 'মোল্লাহাট',
                'url' => 'mollahat.bagerhat.gov.bd',
            ],
            [
                'id' => '218',
                'district_id' => '28',
                'name' => 'Sarankhola',
                'bn_name' => 'শরণখোলা',
                'url' => 'sarankhola.bagerhat.gov.bd',
            ],
            [
                'id' => '219',
                'district_id' => '28',
                'name' => 'Rampal',
                'bn_name' => 'রামপাল',
                'url' => 'rampal.bagerhat.gov.bd',
            ],
            [
                'id' => '220',
                'district_id' => '28',
                'name' => 'Morrelganj',
                'bn_name' => 'মোড়েলগঞ্জ',
                'url' => 'morrelganj.bagerhat.gov.bd',
            ],
            [
                'id' => '221',
                'district_id' => '28',
                'name' => 'Kachua',
                'bn_name' => 'কচুয়া',
                'url' => 'kachua.bagerhat.gov.bd',
            ],
            [
                'id' => '222',
                'district_id' => '28',
                'name' => 'Mongla',
                'bn_name' => 'মোংলা',
                'url' => 'mongla.bagerhat.gov.bd',
            ],
            [
                'id' => '223',
                'district_id' => '28',
                'name' => 'Chitalmari',
                'bn_name' => 'চিতলমারী',
                'url' => 'chitalmari.bagerhat.gov.bd',
            ],
            [
                'id' => '224',
                'district_id' => '29',
                'name' => 'Jhenaidah Sadar',
                'bn_name' => 'ঝিনাইদহ সদর',
                'url' => 'sadar.jhenaidah.gov.bd',
            ],
            [
                'id' => '225',
                'district_id' => '29',
                'name' => 'Shailkupa',
                'bn_name' => 'শৈলকুপা',
                'url' => 'shailkupa.jhenaidah.gov.bd',
            ],
            [
                'id' => '226',
                'district_id' => '29',
                'name' => 'Harinakundu',
                'bn_name' => 'হরিণাকুন্ডু',
                'url' => 'harinakundu.jhenaidah.gov.bd',
            ],
            [
                'id' => '227',
                'district_id' => '29',
                'name' => 'Kaliganj',
                'bn_name' => 'কালীগঞ্জ',
                'url' => 'kaliganj.jhenaidah.gov.bd',
            ],
            [
                'id' => '228',
                'district_id' => '29',
                'name' => 'Kotchandpur',
                'bn_name' => 'কোটচাঁদপুর',
                'url' => 'kotchandpur.jhenaidah.gov.bd',
            ],
            [
                'id' => '229',
                'district_id' => '29',
                'name' => 'Moheshpur',
                'bn_name' => 'মহেশপুর',
                'url' => 'moheshpur.jhenaidah.gov.bd',
            ],
            [
                'id' => '230',
                'district_id' => '30',
                'name' => 'Jhalakathi Sadar',
                'bn_name' => 'ঝালকাঠি সদর',
                'url' => 'sadar.jhalakathi.gov.bd',
            ],
            [
                'id' => '231',
                'district_id' => '30',
                'name' => 'Kathalia',
                'bn_name' => 'কাঠালিয়া',
                'url' => 'kathalia.jhalakathi.gov.bd',
            ],
            [
                'id' => '232',
                'district_id' => '30',
                'name' => 'Nalchity',
                'bn_name' => 'নলছিটি',
                'url' => 'nalchity.jhalakathi.gov.bd',
            ],
            [
                'id' => '233',
                'district_id' => '30',
                'name' => 'Rajapur',
                'bn_name' => 'রাজাপুর',
                'url' => 'rajapur.jhalakathi.gov.bd',
            ],
            [
                'id' => '234',
                'district_id' => '31',
                'name' => 'Bauphal',
                'bn_name' => 'বাউফল',
                'url' => 'bauphal.patuakhali.gov.bd',
            ],
            [
                'id' => '235',
                'district_id' => '31',
                'name' => 'Patuakhali Sadar',
                'bn_name' => 'পটুয়াখালী সদর',
                'url' => 'sadar.patuakhali.gov.bd',
            ],
            [
                'id' => '236',
                'district_id' => '31',
                'name' => 'Dumki',
                'bn_name' => 'দুমকি',
                'url' => 'dumki.patuakhali.gov.bd',
            ],
            [
                'id' => '237',
                'district_id' => '31',
                'name' => 'Dashmina',
                'bn_name' => 'দশমিনা',
                'url' => 'dashmina.patuakhali.gov.bd',
            ],
            [
                'id' => '238',
                'district_id' => '31',
                'name' => 'Kalapara',
                'bn_name' => 'কলাপাড়া',
                'url' => 'kalapara.patuakhali.gov.bd',
            ],
            [
                'id' => '239',
                'district_id' => '31',
                'name' => 'Mirzaganj',
                'bn_name' => 'মির্জাগঞ্জ',
                'url' => 'mirzaganj.patuakhali.gov.bd',
            ],
            [
                'id' => '240',
                'district_id' => '31',
                'name' => 'Galachipa',
                'bn_name' => 'গলাচিপা',
                'url' => 'galachipa.patuakhali.gov.bd',
            ],
            [
                'id' => '241',
                'district_id' => '31',
                'name' => 'Rangabali',
                'bn_name' => 'রাঙ্গাবালী',
                'url' => 'rangabali.patuakhali.gov.bd',
            ],
            [
                'id' => '242',
                'district_id' => '32',
                'name' => 'Pirojpur Sadar',
                'bn_name' => 'পিরোজপুর সদর',
                'url' => 'sadar.pirojpur.gov.bd',
            ],
            [
                'id' => '243',
                'district_id' => '32',
                'name' => 'Nazirpur',
                'bn_name' => 'নাজিরপুর',
                'url' => 'nazirpur.pirojpur.gov.bd',
            ],
            [
                'id' => '244',
                'district_id' => '32',
                'name' => 'Kawkhali',
                'bn_name' => 'কাউখালী',
                'url' => 'kawkhali.pirojpur.gov.bd',
            ],
            [
                'id' => '245',
                'district_id' => '32',
                'name' => 'Zianagar',
                'bn_name' => 'জিয়ানগর',
                'url' => 'zianagar.pirojpur.gov.bd',
            ],
            [
                'id' => '246',
                'district_id' => '32',
                'name' => 'Bhandaria',
                'bn_name' => 'ভান্ডারিয়া',
                'url' => 'bhandaria.pirojpur.gov.bd',
            ],
            [
                'id' => '247',
                'district_id' => '32',
                'name' => 'Mathbaria',
                'bn_name' => 'মঠবাড়ীয়া',
                'url' => 'mathbaria.pirojpur.gov.bd',
            ],
            [
                'id' => '248',
                'district_id' => '32',
                'name' => 'Nesarabad',
                'bn_name' => 'নেছারাবাদ',
                'url' => 'nesarabad.pirojpur.gov.bd',
            ],
            [
                'id' => '249',
                'district_id' => '33',
                'name' => 'Barisal Sadar',
                'bn_name' => 'বরিশাল সদর',
                'url' => 'barisalsadar.barisal.gov.bd',
            ],
            [
                'id' => '250',
                'district_id' => '33',
                'name' => 'Bakerganj',
                'bn_name' => 'বাকেরগঞ্জ',
                'url' => 'bakerganj.barisal.gov.bd',
            ],
        ]);
    }
} 