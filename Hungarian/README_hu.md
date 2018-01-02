PHP-Fusion 9.02
==================
Csak a fejleszt�k p�ld�nya: Ez a m�solat m�g pr�ba verzi�, ami instabilit�s�hoz vezethet, k�rj�k, ne friss�tse tov�bbi �rtes�t�sig.
Important Announcements:
=============
02/Mar/2017(GMT+8) 17:50hr - https://www.php-fusion.co.uk/forum/viewthread.php?thread_id=38308


RC5 Napl�k m�dos�t�sok:
===============================
- �j Artemis �s Material Adminisztr�ci�s fel�let
- �j Fusion Fel�let Csomag (Nebula csomag a WIP, am�g v�get �r minden egyes szakaszban fut� min�s�g� egyedi sablonokat)
- H�rek Infusion friss�tve 1.02-re, sok k�dv�ltoztat�ssal �gy m�r t�mogatja a H�r Gall�ri�t, (Automatikus ment�s funkci� WIP)
- T�r�lve Admin Rights NC, DC, WC �s tov�bbiak
- SecureImage v3, SecureImage v1 and v2 t�r�lve
- Bootstrap friss�tve 3.3.7 verzi�ra
- �j telep�t� a PHP-Fusion 9-hez, �j friss�t�si futtat�sokat.



�rtes�t�sek
===========

Friss�t�s PHP-Fusion 9 RC5
-----------------=========
Ez vonatkozik a PHP-Fusion b�rmely verzi�j�ra, amelyre friss�teni k�v�nja a PHP-Fusion Release Candidate 5 leg�jabb fejleszt�i verzi�j�t, amely v�gleges kiad�sra jel�lt, m�g miel�tt v�glegesre jel�lt�k volna.

A friss�t�shez l�teznie kell egy l�tez� config.php �s egy l�tez� adatb�zisnak. Futtasd a install.php f�jlt, �s k�vesse az �sszes l�p�st. Az Infusions l�p�sben kattintson a friss�t�sre ahol lehet, hogy friss�tse az adatb�zis rekordokat a PF9 inf�zi�khoz. Az �sszes friss�t�si f�jlt elt�vol�thatja hiba n�lk�l a telep�t� befejez�se ut�n. Ha b�rmilyen hiba van, k�rj�k, jelezze a hivatalos t�mogat�si f�rumon.


Szoftver K�vetelm�ny a PHP-Fusion 9 RC5-h�z:
----
|   Software    |   Aj�nlott |   Minimum |
|---|---|---|
| PHP   |  5.6.8 | 5.5.35 |
| MySQL |   5.5.3   | 5.1 |
| Apache    | 2.4+  | 2.0 |
| Nginx     |  1.8+ |   1.0 |

K�z�s Git parancsok:
----

````
git pull origin
git merge
git push
````

or for clones

````
git fetch https://www.github.com/PHP-Fusion/php-fusion.git 9.00
git merge
git push
````

Ukr�n, orosz Magyar nyelven mindent leford�tottak. A litv�n �s a d�n r�szlegesen leford�tva, de a f�jl integrit�s�t ellen�rzik. Ha hiba t�rt�nt, k�rj�k, olvassa el az angol v�ltozatot.


PHP-Fusion Developers Only verzi�
=================================
A PHP-Fusion 9.00 jelenleg akt�v fejleszt�s alatt �ll. A Beta kiad�s�nak els� verzi�ja 2014 negyedik negyed�v�ben indult el.
A PHP-Fusion 9.00-ben SEO permalineket vezettek be, a biztons�g n�vel�se �rdek�ben. Sablonok ker�ltek bevezet�sre a hat�konys�g n�vel�se �rdek�ben.
Added Features in the Version 9.00 includes blog.

A PHP-Fusion egy k�nny�, ny�lt forr�sk�d� PHP-ben fut� tartalomkezel� rendszer (CMS), amelyet Nick Jones (m�s n�ven Digitanium) alap�tott. MySQL adatb�zis felhaszn�l�s�val t�rolja a weboldal tartalm�t, �s egy egyszer�, de �tfog� adminisztr�ci�s rendszerrel rendelkezik. A PHP-Fusion t�bb m�s CMS-csomagban is haszn�lhat� szolg�ltat�sokat tartalmaz.


A Github Development Repository haszn�lata
==========================================
<strong>Saj�t PHP-Fusion Fork friss�t�se</strong>
<ol>
    <li><strong>K�vetelm�ny</strong>:
    <ul>
        <li>Hozz l�tre egy Github Hozz�f�r�st</li>
        <li>Telep�tsd a Github [Windows](https://desktop.github.com/)/Mac vagy telep�tse a [GitSCM](https://git-scm.com/downloads) Hogy el�rje a leg�jabb GitBash verzi�t</li>
        <li>Ind�tsa el a Gitbash parancssori termin�lj�t
        <ol>
        <li><strong>Mac :</strong> Nyissa meg a termin�lt vagy egyszer�en �rja be <strong>terminal</strong> a Spotlight/Finderben</li>
        <li><strong>PC:</strong> Start, �rja be <strong>cmd</strong> a keres�be.</li>
        <li>�gy megnyit egy hozz�f�r�st a <strong>Terminal vagy Dos vagy GitBash</strong> �rja be a parancsot <strong>cd</strong> parancsal navig�lhatja mag�t a t�rhelye munkak�nyvt�r�hoz (i.e. C:\User\user\Documents\Github\PHP-Fusion\ > - )
    </ul>
	</li>
    <li><strong>Most hajtsa v�gre �s futtassa soronk�nt</strong>
<ol>
<li>git init</li>
<li>git checkout 9.00</li>
<li>git pull upstream</li>
<li>git push</li>
<li>�rja be <strong>Felhaszn�l� n�v</strong> �s a <strong>jelsz�t</strong> (ha van)</li>
</ol>
<strong>P�lda:</strong>
<ol>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git init</li>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git checkout 9.00</li>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git pull upstream</li>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git push</li>
<li>�rja be <strong>Felhaszn�l� n�v</strong> �s a <strong>jelsz�t</strong> (ha van)</li>
</ol>
</li>
</ul>

Fejleszt�si v�ltoz�sok (9. verzi�)
==================================
<strong>Elk�sz�lt</strong>
<ul>
<li><strong>Gyors Mag</strong> - Leegyszer�s�thet� a teljes�tm�ny. El�ssz�r is, �j class autoloader hoztak l�tre a class helyett, szerveroldali ment�sek f�jl el�r�si utakon kereszt�l. A f�jlok kezel�se a Mag funkci�ja �jra felhaszn�lhat� a maincore.php h�v�sa n�lk�l</li>
<li><strong>Hat�konyabb �s k�nnyebb k�dol�s</strong> - Automatiz�lt �sszetev�k n�lk�l sok html k�dol�s. Az �rlapok l�trehoz�sa k�nnyebb, mint kor�bban, a r�szek �s a szabv�nyos form�j� �sszetev�k funkci�i, amelyek a szinte minden egyes HTML attrib�tumot magukban foglalj�k, �s szinte minden egyes jquery implement�ci�t egy �rlapmez�ben.</li>
<li><strong>360 degree Automatic Sanitization</strong> - A PHP-Fusion Defender mindent mag�ba foglal. Nincs t�bb egy�ni sanitization vagy f�jlfelt�lt�s �rv�nyes�t�s. Ha a mag seg�ts�g�vel meg tudjuk csin�lni, akkor a magon kereszt�l tessz�k.</li>
<li><strong>�j PDO</strong> - �j PDO T�mogatja a MSQLi szerver b�zist.</li>
<li><strong>Id�z�na</strong> - A kiszolg�l�i id� eltol�d�sokat az Id�z�n�k szerint �jradefini�ltuk, �gy a DST a mi nat�v funkci�inkban is el�rhet� showdate(), timer(), countdown(), etc</li>
<li><strong>�sszevont funkci�k</strong> - A 6,7-es verzi� �ta t�mogatott, egyedi, be�p�tett nat�v funkci�k fel�lvizsg�ltuk, elavultak �t�rtuk.</li>
<li>Bootstrapp & Letisztult diz�jn</strong> - Minden alapvet� sablon r�gt�n alkalmazkodik a tervez�shez. Le lehet kapcsolni, hogy t�mogassa az id�sebb gener�ci�k t�m�itt vagy m�s olyan �rz�keny kereteket, mint az Foundation, a grid360, a Szemantikus felhaszn�l�i fel�let stb. Mindazon�ltal k�rj�k, vegye figyelembe, hogy alapvet� rendszereink kiz�r�lag a Bootstrap alkalmaz�s�ra �p�lnek.
</ul>

A PHP-Fusion lehet�s�get ny�jt a felhaszn�l�knak arra, hogy a szabv�nyos csomagokkal �n. Inf�zi�kkal b�v�ts�k. Ezek az inf�zi�k k�nnyen felt�lthet�k, telep�thet�k �s kezelhet�k. Sz�mos inf�zi� �rhet� el, melyek �gy megtal�lhat�k a hivatalos PHP-Fusion Mods adatb�zis�ban. Az inf�zi�k mellett vannak olyan modok is, amelyek legink�bb a magk�dot �s a paneleket tartalmaznak, amelyek valamelyik oldals� oldalon jelennek meg. Ezek mind sz�les k�rben rendelkez�sre �llnak, ellen�rzik �s fel vannak t�ntetve a PHP-Fusion Mods adatb�zisban.
A PHP-Fusion emellett t�m�k l�trehoz�s�t �s weboldala k�nny� haszn�lat�t is k�n�lja, kev�s munk�val. K�t f�jl van, a theme.php �s a styles.css, amelyeken a t�ma nagy r�sze meghat�rozhat� �s m�dos�that�.

F�bb jellemz�i
==============
A PHP-Fusion a k�vetkez� f�bb jellemz�kkel rendelkezik:
<ul>
<li>H�rek</li>
<li>Blog</li>
<li>Cikkek</li>
<li>F�rum</li>
<li>Gal�ria</li>
<li>Web Linkek</li>
<li>Let�lt�sek</li>
<li>Szavaz�s</li>
<li>�zen�fal</li>
<li>Priv�t �zenetek</li>
<li>Keres�</li>
<li>Fel�letek</li>
</ul>

�j funkci�k 9.00
================
<strong>Fejleszt�i funkci�k</strong><br/>
<P>A CMS-t �gy tervezt�k meg, hogy alkalmazkodjon a felhaszn�l�k ig�nyeihez, els�sorban az egy�ni ig�nyek kiel�g�t�s�re. Ebben az �j verzi�ban dolgoztunk CMS �tstruktur�l�s�ban, hogy egyre t�bbet hozzunk ki a PHP-Fusion-b�l, k�l�n�s tekintettel a k�vetkez�kre: </ p>
- Maxim�lis fejleszt�si produktivit�s
- Maxim�lis fejleszt�si sebess�g
- Egyszer� haszn�lat.

<strong>�j Mag</strong><br/>
A PHP-Fusion 9.00-et a maincore.php ut�n n�gy extra core seg�ti.<br/>
- A Dynamic Output handling Class.
- A PHP-Fusion Quantum-Dynamic Field Class.
- A PHP-Fusion Defender Class.
- A PHP-Fusion Atom theme Class.
- A PHP-Fusion Autoloader Class.

<strong>�j Telep�t�</strong><br/>
Egy �j telep�t�t terveztek �s alak�tottak ki az egyedi ig�nyek kiel�g�t�s�re:<br/>
- Telep�t�s/T�rl�s a Mag rendszer Modulja.
- A weboldal tulajdonjoga �truh�z�sa m�s szem�lyekre an�lk�l, hogy ki kellene adnia az eredeti jelsz�t (Jelsz�-vissza�r�si m�dszer).
- Friss�t�s A kor�bbi verzi�kb�l - �gy d�ntenek, hogy 2 legfontosabb okb�l �tker�lnek
- A config.php �tnevez�se �gy le�ll�tja a Weboldal m�k�d�s�t, �s nem zavarja a DB fel�l�r�s�t.
  -- fast-in-fast-out. Annak �rdek�ben, hogy a telep�t� v�grehajtsa a weboldalon a sz�ks�ges m�dos�t�sokat, a webhely l�togat�i nem tudnak beavatkozni a folyamatba, �s hogy a felhaszn�l�k biztons�gi okb�l ne vegy�k k�nnyed�n ezeket a folyamatokat.

<P>Vegye figyelembe, hogy az adatb�zis ment�se az Admin Panel-ban maradt, mivel nem m�k�dik k�zre a weboldal futtat�s�val. A rendszergazd�nak lehet�s�ge van a webhely karbantart�sa bekapcsol�s�ra, ha azt szeretn�.</ P>

<strong>�j Fel�let SDK</strong>
<P>Most robusztusabb �s testre szabhat�bb. Az eddigi 7.00-es verzi�b�l a kiterjesztett render_news(), a 9.00-es verzi�ban adt�k hozz�:</ p>

<strong>Cikkek:</strong>: display_main_articles(), render_article(), render_article_item()<br/>
<strong>Blog:</strong>: render_main_blog(), display_blog_item(), display_blog_index(), display_blog_menu()<br/>
<strong>Let�lr�sek:</strong>: render_downloads(), display_download_menu()<br/>
<strong>GyiK</strong>: display_main_faq(), render_faq_item()<br/>
<strong>F�rum (Part A: Forms)</strong>: display_forum_postform(), display_forum_pollform(), display_quickReply()<br/>
<strong>F�rum (Part B: Main)</strong>: render_forum(), render_forum_main(), render_forum_item(), forum_viewforum(), render_forum_threads(), render_thread_item(), render_participated(), render_laft(), render_tracked(), render_unanswered(), render_unsolved(), forum_filter(), forum_newtopic(), render_postify()<br/>
<strong>F�rum (Part C: Tags)</strong>: display_forum_tags()<br/>
<strong>F�rum (Part D: Thread)</strong>: render_thread(), render_post_item()<br/>
<strong>Priv�t �zenetek</strong>: display_inbox()<br/>
<strong>H�rek:</strong> render_news(), render_main_news(), render_news_item()<br/>
<strong>Felhaszn�l�i Profil: </strong> display_user_profile(), display_user_field(), display_user_field_container()<br/>
<strong>Web Linkek:</strong> display_main_weblinks(), render_weblinks_item()<br/>
<br/>
Ha szeretn� testreszabni b�rmelyik r�szt, tegye be a f�ggv�nyeket a t�ma k�z�, hogy fel�l�rja az alap�rtelmezett �rt�keket.

<strong>�j Admin Panel</strong><br/>
<ul>
<li><strong>Fel�let</strong> :Az adminisztr�tor Fel�let alap�rtelmezett �tvonala /themes/admin_themes/</li>
<li><strong>Letisztult Diz�jn</strong> : �j Admin fel�let az Artemis.</li>
<li><strong>Ir�ny�t�pult</strong> : �j Adminisztr�ci�s fel�let.</li>
<li><strong>Admin Bel�p�s �s Kil�p�s</strong>: Kiterjesztette a biztons�got, �s elt�vol�totta az adminisztr�tor jelszav�nak be�r�s�t a bejelentkez�s ut�n.</li>
</ul>

<strong>Hat�kony felhaszn�l�i mez�k Modul</strong><br/>
A felhaszn�l�i mez�k dinamikusak, modulok n�lk�l is hozz�adhat�k. Csak add hozz� az Admin Panel seg�ts�g�vel.

<strong>Fel�let motor</strong><br/>
Hozz�adtja az alap�rtelmezett css t�m�kat a m�dos�t�shoz.

<strong>T�bbnyelv�</strong><br/>
T�mogatjuk T�bbnyelv� opci�t a 9.00 Verzi�t�l. Az alapvet� funkci�kat e k�r� fejlesztj�k. A kompatibilit�si ok miatt nem �rtunk SDK-t vagy API-t, csak egyszer�en
a felhaszn�l�i n�zet nyelvezet�t k�nnyen az al�bbi parancs "?lang=English" / "?lang=Russian" seg�ts�g�vel a felhaszn�l� �ltal haszn�lt nyelvi modell v�lt�shoz. Tartalomkezel�s bele�rtve
a felhaszn�l�i mez�k l�trehoz�sa, a panel nyelv�nek v�lt�sa alkalmazkodni fog ehhez a m�dszerhez, �s ennek megfelel�en v�lthat. Ha azonban egy tartalom angolul �ll rendelkez�sre, akkor nem jelenik meg
m�s nyelven, am�g egy m�sik tartalom nem �ll rendelkez�sre. A cikkek / h�rek / sz�lait minden nyelv�t k�l�n kezelj�k.
<strong>SEO Integr�ci�</strong><br/>
V�grehajtottuk az els� l�p�st a rendszer eg�sz�re kiterjed�, modul�ris alap� SEO permalinkekre. Kulcsszavakkal �s met�kkat eg�sz�tet�k ki a rendszert.

<strong>�j Almen� Rendszer</strong>
A Beta 4 alatt a fejleszt�i csapat �j hierarchia men�rendszert ind�tott a 9.00-es verzi�ra.

�j Mag Rendszer
===============
 -- Sablon Mag
 -- Korl�tlan hierarchia
 -- �j Adminisztr�ci�s Fel�let

- Blog Rendszer
- Navig�ci�s almen� rendszer

Kiemelt v�ltoz�sok �s M�dos�t�sok az �j Rendszerben
===================================================
- F�rum - a f�rumok korl�tlan sz�ma adhat� hozz�. Korl�tlan f�rum-hierarchia szinteket, �s hozz�adott 2 �j t�pus� f�rumot - V�laszok �s t�mogat�sok �s linkek.
- Folyamatosan vizsg�lja hogy a felhaszn�l� �ppen mit haszn�l @username a f�rum, �zen�fal, �s az �sszes aplik�ci�t felhaszn�lja a parseSmileys();

A J�v�
======
A PHP-Fusion egy egyszer� CMS, amelyet a kiszolg�l� bet�lt�si idej�nek vill�mgyors teljes�tm�nye miatt haszn�ltak, mert a k�dokat k�nny�v� �s t�m�r�tj�k.
M�g az �jonnan kifejlesztett funkci�kkal is, hogy t�bb alapmunk�t v�gezzenek, nagyon val�sz�n�, hogy a r�gebbi elemeket nem t�mogatj�k. Lessz id� az �t�ll�sra.
Amikor minden alapm�veletet elind�tottunk, j�v�beni fejleszt�si verzi�ink a jquery, az ajax �s a mobil eszk�z�kkel fognak haladni.
