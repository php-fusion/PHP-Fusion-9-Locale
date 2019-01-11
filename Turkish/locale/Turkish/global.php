<?php
/**
 * Turkish Locale
 *
 * @locale charset           ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region            ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale tinymce           refer to path includes/jscripts/tinymce/langs/tr.js
 * @locale select2           refer to path includes/dynamics/assets/select2/select2_locale_tr.js
 * @locale phpmailer         refer to path includes/classes/PHPMailer/language/phpmailer.lang-tr.php
 * @locale password_strength refer to path includes/dynamics/assets/password/lang/tr.js
 * @package locale/Turkish
 * @Translated by ALTUN Web Site(https://alapelit.com)
 */
setlocale(LC_TIME, "tr_TR.utf8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "TR";
$locale['xml_lang'] = "tr";
$locale['short_lang_name'] = "tr";
$locale['tinymce'] = "tr";
$locale['select2'] = "tr";
$locale['phpmailer'] = "tr";
$locale['datepicker'] = "tr";
$locale['datepicker_js'] = "M-DD-YYYY H:mm:ss";
$locale['datepicker_php'] = "m-d-Y H:i:s";
$locale['password_strength'] = "tr";
$locale['date_day'] = "%d %b";
// Full & Short Months
$locale['months'] = "&nbsp|Ocak|Şubat|Mart|Nisan|Mayıs|Haziran|Temmuz|Ağustos|Eylül|Ekim|Kasım|Aralık";
$locale['shortmonths'] = "&nbsp|Ock|Şbt|Mar|Nis|May|Haz|Tem|Ağus|Eyl|Eki|Kas|Arlk";
$locale['weekdays'] = "Pazar|Pazartesi|Salı|Çarşamba|Perşembe|Cuma|Cumartesi";
// Timers
$locale['year'] = "yıl";
$locale['year_a'] = "yıl";
$locale['month'] = "ay";
$locale['month_a'] = "ay";
$locale['week'] = "hafta";
$locale['week_a'] = "hafta";
$locale['day'] = "gün";
$locale['day_a'] = "gün";
$locale['hour'] = "saat";
$locale['hour_a'] = "saat";
$locale['minute'] = "dakika";
$locale['minute_a'] = "dakika";
$locale['second'] = "saniye";
$locale['second_a'] = "saniye";
$locale['just_now'] = "demin";
$locale['now'] = 'şimdi';
$locale['ago'] = "önce";
// Geo
$locale['street1'] = "Adres 1";
$locale['street2'] = "Adres 2";
$locale['city'] = "Şehir";
$locale['postcode'] = "Posta Kodu";
$locale['sel_country'] = "Ülke Seçin";
$locale['sel_state'] = "İlçe / Belde Seçin";
$locale['sel_user'] = "Lütfen bir kullanıcı adı yazın";
$locale['add_language'] = "Dil Çevirileri Ekle";
$locale['add_lang'] = "%s Ekle";
$locale['other_states'] = "Diğer Devletler";
// Name
$locale['name'] = 'Ad Soyad';
$locale['username_pretext'] = 'Your public username is also the same as your user profile address located at: %s %s';
$locale['first_name'] = 'Adınız';
$locale['middle_name'] = 'Göbek Adınız';
$locale['last_name'] = 'Soyadınız';
// Documents
$locale['doc_type'] = "Belge Türü";
$locale['doc_series'] = "Series";
$locale['doc_number'] = "Number";
$locale['doc_authority'] = "Yetki";
$locale['doc_date_issue'] = "Veriliş tarihi";
$locale['doc_date_expire'] = "Bitiş tarihi";
// Standard User Levels
$locale['user0'] = "Genel";
$locale['user1'] = "Üye";
$locale['user2'] = "Yönetici";
$locale['user3'] = "Süper Yönetici";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Konuk";
$locale['user_anonymous'] = "Anonim Kullanıcı";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Aktif";
$locale['status1'] = "Engellenmiş";
$locale['status2'] = "Aktive Edilmemiş";
$locale['status3'] = "Askıya Alınmış";
$locale['status4'] = "Güvenlik Engeli Uygulanmış";
$locale['status5'] = "İptal Edilmiş";
$locale['status6'] = "Anonim";
$locale['status7'] = "Devre Dışı";
$locale['status8'] = "Etkin Değil";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderatör";
// Navigation
$locale['global_001'] = "Ana Menü";
$locale['global_002'] = "Hiçbir bağlantı tanımlanmamış\n";
$locale['global_003'] = "Önizlenecek bir şey yok";
// Users Online
$locale['global_010'] = "Çevrimiçi Kullanıcılar";
$locale['global_011'] = "Çevrimiçi Ziyaretçiler";
$locale['global_012'] = "Çevrimiçi Üyeler";
$locale['global_013'] = "Çevrimiçi Üye Yok";
$locale['global_014'] = "Toplam Üyeler";
$locale['global_015'] = "Aktif Edilmemiş Üyeler";
$locale['global_016'] = "En Yeni Üye";
$locale['global_017'] = "Toggle Navigation";
// Forum Side panel
$locale['global_020'] = "Forum Konuları";
$locale['global_021'] = "Son Konular";
$locale['global_022'] = "Popüler Konular";
$locale['global_023'] = "Oluşturulmuş konu yok";
$locale['global_024'] = "Katıldığı Forumlar";
$locale['global_027'] = "Cevaplanmamış Konular";
$locale['global_028'] = "Çözülmemiş Sorular";
// Comments Side panel
$locale['global_025'] = "Son Yorumlar";
$locale['global_026'] = "Mevcut yorum yok";
// Articles Side panel
$locale['global_030'] = "Son Makaleler";
$locale['global_031'] = "Mevcut makale yok";
// Downloads Side panel
$locale['global_032'] = "Son Dosyalar";
$locale['global_033'] = "Mevcut dosya yok";
// Welcome panel
$locale['global_035'] = "Hoşgeldiniz";
// Latest Active Forum Threads panel
$locale['global_040'] = "En Son Aktif Forum Konuları";
$locale['global_041'] = "Son Konularım";
$locale['global_042'] = "Son Mesajlarım";
$locale['global_043'] = "Yeni Mesajlar";
$locale['global_044'] = "Konu";
$locale['global_045'] = "Views";
$locale['global_046'] = "Cevaplar";
$locale['global_047'] = "Son Mesaj";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Gönderen";
$locale['global_050'] = "Yazar";
$locale['global_051'] = "Anket";
$locale['global_052'] = "Taşındı";
$locale['global_053'] = "Henüz herhangi bir forum konuları başlatmamışsınız.";
$locale['global_054'] = "Henüz herhangi bir foruma mesaj göndermemişsiniz.";
$locale['global_055'] = "Son ziyzretinizden beri %u yeni mesajlar %u farklı konular içinde var.";
$locale['global_056'] = "Takip Ettiğim Konular";
$locale['global_057'] = "Seçenekler";
$locale['global_058'] = "Takipi Durdur";
$locale['global_059'] = "Herhangi bir konuları takip etmiyorsunuz.";
$locale['global_060'] = "Konuyu takip durdurulsunmu?";
// Blog, News & Articles
$locale['global_070'] = "Yazar ";
$locale['global_070b'] = "%s adlı kişinin bütün mesajlarını görüntüle";
$locale['global_071'] = "on ";
$locale['global_071b'] = "Yazar";
$locale['global_072'] = "Devamını Oku";
$locale['global_073'] = " Yorumlar";
$locale['global_073b'] = " Yorum";
$locale['global_074'] = " Okunma";
$locale['global_074b'] = " Okunma";
$locale['global_075'] = "Yazdır";
$locale['print'] = "Yazdır";
$locale['global_076'] = "Düzenle";
$locale['global_077'] = "Haberler";
$locale['global_078'] = "Henüz hiçbir Haber gönderilmemiş";
$locale['global_079'] = "İçinde ";
$locale['global_080'] = "Kategorilenmemiş";
$locale['global_081'] = "Haberler Ana Sayfası";
$locale['global_082'] = "Haberler";
$locale['global_083'] = "Son Güncelleme";
$locale['global_084'] = "Haber Kategorisi";
$locale['global_085'] = "Tüm Diğer Kategoriler";
$locale['global_086'] = "En Son Haberler";
$locale['global_087'] = "En Çok Yorumlanan Haberler";
$locale['global_088'] = "En Yüksek Puanlanan Haberler";
$locale['global_089'] = "Üzerinde ilk yorum yapan siz olun %s";
$locale['global_089a'] = "Bunu ilk puanlayan siz olun %s";
$locale['global_089b'] = "Thumb view";
$locale['global_089c'] = "Liste görünümü";
// Page Navigation
$locale['global_090'] = "Önceki";
$locale['global_091'] = "Sonraki";
$locale['global_092'] = "Sayfa ";
$locale['global_093'] = " of ";
$locale['global_094'] = " out of ";
// Guest User Menu
$locale['global_100'] = "Giriş Yap";
$locale['global_101'] = "Giriş ID";
$locale['global_101a'] = "Kullanıcı Adı Girin";
$locale['global_101b'] = "E-posta Girin";
$locale['global_101c'] = "E-posta veya Kullanıcı Adı Girin";
$locale['global_102'] = "Şifre";
$locale['global_103'] = "Oturum açık kalsın";
$locale['global_104'] = "Giriş Yap";
$locale['global_105'] = "Henüz üye değilmisiniz? Kayıt olmak için [LINK]buraya tıklayın[/LINK].";
$locale['global_106'] = "[LINK]Şifrenizi mi unuttunuz?[/LINK]";
$locale['global_107'] = "Kayıt";
$locale['global_108'] = "Kayıp şifre";
$locale['global_109'] = "Kaydol";
// Member User Menu
$locale['global_120'] = "Profil Sayfanızı Özelleştirin";
$locale['global_121'] = "Özel Mesajlar";
$locale['global_122'] = "Üye Listesi";
$locale['global_123'] = "Yönetici Paneli";
$locale['global_124'] = "Çıkış Yap";
$locale['global_125'] = "Yeni %u ";
$locale['global_126'] = "mesaj var";
$locale['global_127'] = "mesajlar var";
$locale['global_128'] = "gönderi var";
$locale['global_129'] = "gönderimler var";
// User Menu
$locale['UM060'] = "Giriş";
$locale['UM061'] = "Kullanıcı Adı";
$locale['UM061a'] = "E-posta";
$locale['UM061b'] = "Kullanıcı Adı yada E-posta";
$locale['UM062'] = "Şifre";
$locale['UM063'] = "Beni Hatırla";
$locale['UM064'] = "Giriş";
$locale['UM065'] = "Henüz üye değilmisiniz? Kayıt olmak için [LINK]buraya tıklayın[/LINK].";
$locale['UM066'] = "Şifrenizimi unuttunuz?\n[LINK]Yeni bir tane iste[/LINK].";
$locale['UM067'] = "(Herkese açık veya paylaşılan bir bilgisayarda önerilmez)";
$locale['UM080'] = "Profili Düzenle";
$locale['UM081'] = "Özel Mesajlar";
$locale['UM082'] = "Üyeler Listesi";
$locale['UM083'] = "Yönetim Paneli";
$locale['UM084'] = "Çıkış Yap";
$locale['UM085'] = "Yeni %u ";
$locale['UM086'] = "mesaj var";
$locale['UM087'] = "mesajlar var";
$locale['UM088'] = "Takip edilen konular";
// Submit (news, link, article)
$locale['UM089'] = "Gönder...";
$locale['UM090'] = "Haber Gönder";
$locale['UM091'] = "Bağlantı Gönder";
$locale['UM092'] = "Makale Gönder";
$locale['UM093'] = "Fotoğraf Gönder";
$locale['UM094'] = "Dosya Gönder";
$locale['UM095'] = "Blog Gönder";
$locale['UM102'] = "SSS Gönder";
// User Panel
$locale['UM096'] = "Hoşgeldiniz: ";
$locale['UM097'] = "Kişisel menü";
$locale['UM101'] = "Dili Değiştir";
// Gauges
$locale['UM098'] = "ÖM Gelen Kutusu :";
$locale['UM099'] = "ÖM Giden Kutusu :";
$locale['UM100'] = "ÖM Arşivi :";
// Keywords and Meta
$locale['tags'] = "Etiketler";
// Captcha
$locale['global_150'] = "Doğrulama Kodu:";
$locale['global_151'] = "Doğrulama Kodunu Giriniz:";
// Footer Counter
$locale['global_170'] = "benzersiz ziyaret";
$locale['global_171'] = "benzersiz ziyaretler";
$locale['global_172'] = "Oluşturma süresi: %s saniye";
$locale['global_173'] = "Sorgular";
$locale['global_174'] = "Kullanılan hafıza";
$locale['global_175'] = "Ortalama: %s saniye";
$locale['global_176'] = "Gizlilik Politikası";
// Admin Navigation
$locale['global_180'] = "Yönetim Ana Sayfası";
$locale['global_181'] = "Siteye Dön";
$locale['global_182'] = "Yönetici Şifresi girilmemiş veya yanlış.";
// Miscellaneous
$locale['global_190'] = "Bakım Modu Etkinleştirildi";
$locale['global_191'] = "IP adresiniz şu anda kara listeye alındı.";
$locale['global_192'] = "Giriş oturumunuzun süresi doldu. Devam etmek için lütfen tekrar giriş yapın.";
$locale['global_193'] = "Belge çerezi ayarlanmamış olabilir. Lütfen doğru şekilde oturum açabilmek için çerezlerin etkin olduğundan emin olun.";
$locale['global_194'] = "Bu hesap şu anda askıya alındı.";
$locale['global_195'] = "Bu hesap etkinleştirilmedi.";
$locale['global_196'] = "Geçersiz kullanıcı adı veya şifre.";
$locale['global_197'] = "Sizi aktarmamız sırasında lütfen bekleyin...\n\n[ [LINK]Yada beklemek istemiyorsanız buraya tıklayın[/LINK] ]";
$locale['global_198'] = "UYARI: YÜKLEYİCİ ALGILANDI, LÜTFEN INSTALL-PHP DOSYASINI HEMEN SİLİNİZ.";
$locale['global_199'] = "UYARI: Yönetici şifresi ayarlanmadı, ayarlamak için [LINK]Profili Düzenle[/LINK] bağlantısına tıklayınız.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Arama";
$locale['global_203'] = " - SSS";
$locale['global_204'] = " - Forum";
//Themes
$locale['global_210'] = "İçeriğe geç";
$locale['global_300'] = "tema bulunamadı";
$locale['global_301'] = "Gerçekten üzgünüz, ancak bu sayfa görüntülenemiyor. Bazı koşullardan dolayı hiçbir site teması bulunamadı.
 Site Yöneticisiyseniz, PHP-Fusion 9 için tasarlanmış temaları temalar klasörüne yüklemek için lütfen FTP istemcinizi kullanın.
 Yükledikten sonra, seçilen temanın temalar dizinine doğru şekilde yüklenip yüklenmediğini görmek için Tema Ayarları'na bir göz atın.
 Tema Ayarları sayfasında seçilen şekilde yüklenen tema klasörünün tam olarak aynı ada (Unix tabanlı sunucularda önemli olan karakter durumuna)
 sahip olduğuna dikkat edin.\n\nBu sitenin düzenli üyesiyseniz, lütfen [SITE_EMAIL] e-posta yoluyla sitenin yöneticisine başvurun ve bu konuyu bildirin.";
$locale['global_302'] = "Ana Ayarlar'da seçilen Tema yok ya da eksik!";
// JavaScript Not Enabled
$locale['global_303'] = "O hayır! JavaScript nerede?\nWeb tarayıcınızın JavaScript'i etkin değil veya JavaScript'i desteklemiyor.
Bu Web sitesini düzgün bir şekilde görüntülemek veya JavaScript'i destekleyen bir Web tarayıcısına yükseltmek için lütfen Web tarayıcınızdaki JavaScript'i etkinleştirin.";
// User Management
$locale['global_400'] = "askıya alındı";
$locale['global_401'] = "yasaklandı";
$locale['global_402'] = "devre dışı bırakıldı";
$locale['global_403'] = "hesap sonlandırıldı";
$locale['global_404'] = "hesap anonimleştirildi";
$locale['global_405'] = "anonim kullanıcı";
$locale['global_406'] = "Bu hesap şu nedenle yasaklandı:";
$locale['global_407'] = "Bu hesap şukadar askıya alındı: ";
$locale['global_408'] = " aşağıdaki sebeplerden dolayı:";
$locale['global_409'] = "Bu hesap güvenlik nedeniyle yasaklandı.";
$locale['global_410'] = "Bunun nedeni şudur: ";
$locale['global_411'] = "Bu hesap iptal edildi.";
$locale['global_412'] = "Muhtemelen hareketsizlik yüzünden bu hesap anonimleştirilmiştir.";
// Flood control
$locale['global_440'] = "Saldırı Kontrolü ile Otomatik Yasaklama";
$locale['global_441'] = "[SITENAME] hesabınız yasaklandı";
$locale['global_442'] = "Merhaba [USER_NAME],\n
[SITENAME] hesabınız [USER_IP] IP adresiyle çok kısa sürede çok fazla öğe göndererek yakalandı ve bu nedenle yasaklandı. Bu, botların hızlı bir şekilde art arda spam mesajları göndermesini önlemek için yapılır.\n
Hesabınızın eski durumuna getirilebilmesi için bu sitenin yöneticisi olan [SITE_EMAIL] ile irtibata geçin veya bu güvenlik yasağına neden olmuyorsanız, bunu raporlayın.\n\n
Saygılarımızla,\n[SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Askıya alma sistem tarafından otomatik olarak kaldırıldı";
$locale['global_451'] = "[SITENAME] sitesinde askıya alma kaldırıldı";
$locale['global_452'] = "Merhaba USER_NAME,\n
[SITEURL] adresinde hesabınızın askıya alınması kaldırıldı. İşte giriş bilgileriniz:\n
Kullanıcı Adı: USER_NAME\nŞifre: Güvenlik nedeniyle gizli\n
Şifrenizi unuttuysanız bağlantıyı kullanarak şifrenizi sıfırlayabilirsiniz: LOST_PASSWORD\n\n
Saygılarımızla,\n[SITEUSERNAME]";
$locale['global_453'] = "Merhaba USER_NAME,\n[SITEURL] adresindeki hesabınızın askıya alınması kaldırılmıştır.\n\n
Saygılarımızla,\n[SITEUSERNAME]";
$locale['global_454'] = "[SITENAME] sitesinde yeniden etkinleştirilen hesap";
$locale['global_455'] = "Merhaba USER_NAME,\n
Last time you logged in your account was reactivated at [SITEURL] and your account is no longer marked as inactive.\n\n
Saygılarımızla,\n[SITEUSERNAME]";
$locale['global_456'] = "[SITENAME] için yeni şifre bildirimi";
$locale['global_457'] = "Merhaba USER_NAME,
\n\nHesabiniz için [SITENAME] sitesinde yeni şifre ayarlandı. Lütfen ilişikdeki yeni oturum açma ayrıntılarına bakın:\n\n
Kullanıcı Adı: USER_NAME\nŞifre: [PASSWORD]\n\nSaygılarımızla,\n[SITEUSERNAME]";
$locale['global_458'] = "USER_NAME için yeni şifre ayarlandı";
$locale['global_459'] = "USER_NAME için yeni şifre belirlendi ve E-posta gönderilmedi. Lütfen yeni ayrıntıları kullanıcıya bildirin.";
// Function parsebytesize()
$locale['global_460'] = "Boş";
$locale['global_461'] = "Bayt";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "%s sayfasına yönlendiriliyorsunuz, lütfen bekleyin. Yönlendirilmediyseniz, buraya tıklayın.";
// Captcha Locales
$locale['global_600'] = "Doğrulama Kodu";
$locale['global_601'] = "Doğru bir doğrulama kodu girmelisiniz";
$locale['recaptcha'] = "tr";
// Site links
$locale['global_700'] = "Daha Fazla Göster";
//Miscellaneous
$locale['global_900'] = "Unable to convert HEX to DEC";
$locale['global_901'] = "Medya Ekle";
//Language Selection
$locale['global_ML100'] = "Dil:";
$locale['global_ML101'] = "- Dil Seçiniz -";
$locale['global_ML102'] = "Site dili";
$locale['global_ML103'] = "Dili Değiştir";
// Flood Control
$locale['flood'] = "Akın saldırı süresi bitene kadar mesaj gönderemezsiniz. Lütfen %s bekleyin.";
$locale['no_image'] = "Resim Yok";
$locale['send_message'] = "Mesaj Gönder";
$locale['go_profile'] = "%s Profil Sayfasına Git";
// Global one word locales
$locale['hello'] = "Merhaba!";
$locale['goodbye'] = "Hoşça kal!";
$locale['welcome'] = "Tekrar Hoşgeldiniz";
$locale['home'] = "Ana Sayfa";
// Status
$locale['error'] = "Hata!";
$locale['success'] = "Başarı!";
$locale['enable'] = "Etkinleştir";
$locale['disable'] = "Disable";
$locale['can'] = "can";
$locale['cannot'] = "cannot";
$locale['no'] = "Hayır";
$locale['yes'] = "Evet";
$locale['off'] = "Kapalı";
$locale['on'] = "Açık";
$locale['or'] = "veya";
$locale['by'] = "by";
$locale['in'] = "in";
$locale['of'] = "of";
$locale['and'] = "and";
$locale['na'] = "Bilgi bulunmamaktadır";
$locale['joined'] = "Joined since: ";
// Navigation
$locale['next'] = "Sonraki";
$locale['previous'] = "Önceki";
$locale['back'] = "Geri";
$locale['forward'] = "İleri";
$locale['go'] = "Git";
$locale['cancel'] = "İptal";
$locale['clear'] = "Temizle";
$locale['move'] = "Taşı";
$locale['move_up'] = "Yukarı çık";
$locale['move_down'] = "Aşağı in";
$locale['load_more'] = "Daha fazla ürün yükle";
$locale['load_end'] = "Load from Beginning";
// Actions
$locale['add'] = "Ekle";
$locale['save'] = "Kaydet";
$locale['save_changes'] = "Değişiklikleri Kaydet";
$locale['save_and_close'] = "Kaydet ve Kapat";
$locale['confirm'] = "Onayla";
$locale['update'] = "Güncelleştir";
$locale['updated'] = "Güncellendi";
$locale['remove'] = "Kaldır";
$locale['delete'] = "Sil";
$locale['search'] = "Ara";
$locale['help'] = "Yardım";
$locale['register'] = "Kayıt";
$locale['ban'] = "Yasak";
$locale['reactivate'] = "Yeniden Etkinleştir";
$locale['user'] = "Kullanıcı";
$locale['promote'] = "Promote";
$locale['show'] = "Göster";
$locale['actions'] = "Eylemler";
$locale['language'] = "Dil";
// Persons & Identifiers
$locale['you'] = "Sen";
$locale['me'] = "Ben";
$locale['they'] = "Onlar";
$locale['we'] = "Biz";
$locale['us'] = "Biz";
$locale['he'] = "O";
$locale['she'] = "She";
$locale['it'] = "It";
//Tables
$locale['order'] = "Order";
$locale['sort'] = "Sort";
$locale['id'] = "ID";
$locale['title'] = "Başlık";
$locale['rights'] = "Rights";
$locale['info'] = "Bilgi";
$locale['image'] = "Resim";
// Forms
$locale['choose'] = "Lütfen birini seçiniz...";
$locale['no_opts'] = "No selection";
$locale['root'] = "As Parent";
$locale['choose-user'] = "Lütfen Bir Kullanıcı Seçiniz...";
$locale['choose-location'] = "Lütfen Bir Yer Seçiniz";
$locale['parent'] = "Create as New Parent..";
$locale['item_order'] = "Item Ordering";
$locale['status'] = "Durum";
$locale['note'] = "Bu öğeyi not edin";
$locale['publish'] = "Yayınla";
$locale['unpublish'] = "Yayınlama";
$locale['sticky'] = "Sticky";
$locale['unsticky'] = "Unsticky";
$locale['draft'] = "Taslak";
$locale['settings'] = "Ayarlar";
$locale['posted'] = "gönderildi";
$locale['profile'] = "Profil";
$locale['edit'] = "Düzenle";
$locale['qedit'] = "Hızlı Düzenle";
$locale['view'] = "Görüntüle";
$locale['login'] = "Giriş";
$locale['logout'] = "Çıkış";
$locale['admin-logout'] = "Yönetim Oturumunu Kapat";
$locale['message'] = "Özel Mesajlar";
$locale['logged'] = "Oturum açtı ";
$locale['version'] = "Sürüm ";
$locale['browse'] = "Gözat ...";
$locale['close'] = "Close";
$locale['nopreview'] = "Önizleme için bir şey yok";
$locale['mark_as'] = "Farklı İşaretle";
$locale['preview'] = "Preview";
$locale['custom'] = "Custom";
$locale['submit'] = "Gönder";
// Alignment
$locale['left'] = "Sol";
$locale['center'] = "Merkez";
$locale['right'] = "Sağ";
// Comments and ratings
$locale['comments'] = "Yorumlar";
$locale['ratings'] = "Derecelendirmeler";
$locale['comments_ratings'] = "Yorumlar ve Derecelendirmeler";
$locale['user_account'] = "Kullanıcı Hesabı";
$locale['about'] = "Hakkında";
// User status
$locale['online'] = "Çevrimiçi";
$locale['offline'] = "Çevrimdışı";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "gönderim|gönderimler";
$locale['fmt_article'] = "makale|makaleler";
$locale['fmt_blog'] = "blog|bloglar";
$locale['fmt_comment'] = "yorum|yorumlar";
$locale['fmt_vote'] = "oy|oylar";
$locale['fmt_rating'] = "derecelendirme|derecelendirmeler";
$locale['fmt_day'] = "gün|günler";
$locale['fmt_download'] = "indir|indirmeler";
$locale['fmt_follower'] = "takipçi|takipçiler";
$locale['fmt_forum'] = "forum|forumlar";
$locale['fmt_guest'] = "konuk|konuklar";
$locale['fmt_hour'] = "saat|saatler";
$locale['fmt_item'] = "öğe|öğeler";
$locale['fmt_member'] = "üye|üyeler";
$locale['fmt_message'] = "mesaj|mesajlar";
$locale['fmt_minute'] = "dakika|dakikalar";
$locale['fmt_month'] = "ay|aylar";
$locale['fmt_news'] = "haber|haberler";
$locale['fmt_photo'] = "fotoğraf|fotoğraflar";
$locale['fmt_post'] = "posta|postalar";
$locale['fmt_question'] = "soru|sorular";
$locale['fmt_read'] = "read|reads";
$locale['fmt_second'] = "second|seconds";
$locale['fmt_shouts'] = "shout|shouts";
$locale['fmt_thread'] = "thread|threads";
$locale['fmt_user'] = "user|users";
$locale['fmt_views'] = "view|views";
$locale['fmt_weblink'] = "weblink|weblinks";
$locale['fmt_week'] = "week|weeks";
$locale['fmt_year'] = "year|years";
$locale['fmt_points'] = "point|points";
$locale['fmt_admin'] = "yönetim|yöneticiler";
$locale['fmt_group'] = "grup|gruplar";
$locale['fmt_category'] = "kategori|kategoriler";
// include Defender locales
include_once __DIR__."/defender.php";
