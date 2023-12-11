<?php
if (!function_exists('translateToUserLanguage')) {
    function translateToUserLanguage($key) {
        $ci =& get_instance();
        $ci->load->helper('language');

        // Ambil bahasa pengguna
        $userLanguage = getUserLanguage();

        // Pilih file bahasa berdasarkan preferensi bahasa pengguna
        $ci->lang->load('lang', $userLanguage);

        // Terjemahkan teks menggunakan CodeIgniter lang()
        return lang($key);
    }
}

if (!function_exists('getUserLanguage')) {
    function getUserLanguage() {
        $ci =& get_instance();
        $ci->load->library('user_agent');

        // Periksa preferensi bahasa pengguna dari peramban
        $userLanguage = $ci->agent->languages();

        // Pilih bahasa pertama yang didukung oleh aplikasi Anda
        $availableLanguages = array('english', 'indonesian'); // Sesuaikan dengan bahasa yang didukung
        $preferredLanguage = current(array_intersect($userLanguage, $availableLanguages));

        return $preferredLanguage ? $preferredLanguage : 'english'; // Bahasa default jika tidak ada yang cocok
    }
}
