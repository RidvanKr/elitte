<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" href="iltsm.css">
  <link rel="icon" href="icon.ico" type="image/x-icon">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
  </script>
  <title>Kod-Can</title>
</head>
<body>
  <div class="menu">
    <ul>
        <li>
        <a href="https://ders.kod-can.com/moodle/"><b>Ders</b></a>
      </li>
      <li>
        <a href="iltsm.php"><b>İletişim</b></a>
      </li>
      <li>
        <a href="hkkmd.php"><b>Hakkımda</b></a>
      </li>
      <li>
        <a href="index.php"><b>Ana Sayfa</b></a>
      </li>
    </ul>
  </div>
  <div class="logo"><b>Kod-Can</b></div>
  <div class="panel">
     <form action="ilt.php" method="post">
       <h1>İletişim Formu</h1>
       <hr class="hrr">
       <b class="bold">İsim</b>
       <input type="text" name="u" class="inpp" maxlength="20">
       <b class="bold">E-Mail</b>
       <input type="email" name="e" class="inpp">
       <b class="bold">Konu</b>
       <input type="text" name="k" class="inpp" maxlength="50">
       <b class="bold">Mesaj</b>
       <input type="text" name="m" class="inpp" maxlength="500">
       <input type="checkbox" name="c" class="inppp">
       <b class="bol">Dönüt gönder</b>
       <button class="sub"><b>Gönder</b></button>
     </form>
  </div>
  <p class="vr">Sayfa: İletişim / iltsm<br><span></span><br>Varsayılan iltsm: PHP<br><span></span><br>Meta Yapılandırılması: Yapılandırılmamış<br><span></span><br>Bant Genişliği Oranı: %1.54<br><span></span><br>Sürüm: 0.9</p>
  </body>
  </html>