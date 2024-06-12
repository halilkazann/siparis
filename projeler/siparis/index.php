<?php
require_once "baglan.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$temizle = $con->prepare("TRUNCATE TABLE `order`");
$temizle->execute();
$sayi = $temizle->rowCount();


if($sayi!=true){
    echo "Veritabanındaki veriler sıfırlandı, tekrar ekleme işlemi başlatılıyor.<br>";
}else{
    echo "Veritabanındaki veriler sıfırlanamadı,Kontrol et.<br>";
}


$reader = new XMLReader();
        $reader->open("document/Siparis.xml");



        while ($reader->read())
		{
            if ($reader->nodeType == XMLReader::ELEMENT)
			{
				switch ($reader->name) {

    				case 'SIPARIS_NO' :
					$reader->read();
					$value = trim($reader->value);
					$siparis_no = $value;
					break;

    				case 'PAZARYERI_KARGOKODU' :
					$reader->read();
					$value = trim($reader->value);
					$pazaryeri_kargo = $value;
					break;

    				case 'POSTA' :
					$reader->read();
					$value = trim($reader->value);
					$mail = $value;
					break;

    				case 'TARIH' :
					$reader->read();
					$value = trim($reader->value);
					$tarih = $value;
					break;

    				case 'sipariszaman' :
					$reader->read();
					$value = trim($reader->value);
					$zaman = $value;
					break;

    				case 'NET_TOPLAM' :
					$reader->read();
					$value = trim($reader->value);
					$toplam_ucret = $value;
					break;

                    // Teslimat Bilgileri //
    				case 'TeslimAlici' :
					$reader->read();
					$value = trim($reader->value);
					$teslim_alici = $value;
					break;

    				case 'TeslimAdresi' :
					$reader->read();
					$value = trim($reader->value);
					$teslim_adres = $value;
					break;

    				case 'TeslimTelefon' :
					$reader->read();
					$value = trim($reader->value);
					$teslim_tel = $value;
					break;

    				case 'teslimil' :
					$reader->read();
					$value = trim($reader->value);
					$teslim_siparis_ili = $value;
					break;

    				case 'teslimilce' :
					$reader->read();
					$value = trim($reader->value);
					$teslim_siparis_ilce = $value;
					break;


                    // Fatura Bilgileri //

                    case 'faturaalici' :
					$reader->read();
					$value = trim($reader->value);
					$fatura_alici = $value;
					break;

    				case 'faturaTelefon' :
					$reader->read();
					$value = trim($reader->value);
					$fatura_tel = $value;
					break;

    				case 'faturaAdresi' :
					$reader->read();
					$value = trim($reader->value);
					$fatura_teslim_adres = $value;
					break;

    				case 'faturail' :
					$reader->read();
					$value = trim($reader->value);
					$fatura_siparis_ili = $value;
					break;

    				case 'faturailce' :
					$reader->read();
					$value = trim($reader->value);
					$fatura_siparis_ilce = $value;
					break;

                    case 'SIPDURUM_Adi' :
					$reader->read();
					$value = trim($reader->value);
					$durum_adi = $value;
					break;

                    case 'tasiyicifirma_adi' :
					$reader->read();
					$value = trim($reader->value);
					$tasiyicifirma_adi = $value;
					break;

                    case 'tasiyicifirma' :
					$reader->read();
					$value = trim($reader->value);
					$tasiyicifirma= $value;
					break;

                    case 'kargokodu' :
					$reader->read();
					$value = trim($reader->value);
					$kargo_kodu= $value;
					break;

                    // Products //

                    case 'URUNKODU' :
					$reader->read();
					$value = trim($reader->value);
					$Product['Urun_kodu'][] = $value;
					break;

                    case 'KOD' :
					$reader->read();
					$value = trim($reader->value);
                    $Product['Code'][] = $value;
					break;

                    case 'VARKOD' :
					$reader->read();
					$value = trim($reader->value);
					$Product['Varyant_code'][] = $value;
					break;

                    case 'BARCODE' :
					$reader->read();
					$value = trim($reader->value);
					$Product['barcode'][] = $value;
					break;

                    case 'URUNADI' :
					$reader->read();
					$value = trim($reader->value);
					$Product['Name'][] = $value;
					break;

                    case 'FATURA_ADI' :
					$reader->read();
					$value = trim($reader->value);
					$Product['Fatura_adi'][] = $value;
					break;

                    case 'SECENEK_DEGERI' :
					$reader->read();
					$value = trim($reader->value);
					$Product['Type'][] = $value;
					break;

                    case 'FIYAT' :
					$reader->read();
					$value = trim($reader->value);
					$Product['Fiyat'][] = $value;
					break;

                    case 'MIKTAR' :
					$reader->read();
					$value = trim($reader->value);
					$Product['Miktar'][] = $value;
					break;

                    case 'KDV' :
					$reader->read();
					$value = trim($reader->value);
					$Product['KDV'][] = $value;
					break;


				}
            }
			else if ($reader->name == 'SIPARIS' && $reader->nodeType == XMLReader::END_ELEMENT)
			{


                $duzenli = array();
                for($i=0;$i<count($Product['Urun_kodu']);$i++){
                    $duzenli[$i][] =  $Product['Urun_kodu'][$i];
                    $duzenli[$i][] =  $Product['Code'][$i];
                    $duzenli[$i][] =  $Product['Varyant_code'][$i];
                    $duzenli[$i][] =  $Product['barcode'][$i];
                    $duzenli[$i][] =  $Product['Name'][$i];
                    $duzenli[$i][] =  $Product['Fatura_adi'][$i];
                    $duzenli[$i][] =  $Product['Type'][$i];
                    $duzenli[$i][] =  $Product['Fiyat'][$i];
                    $duzenli[$i][] =  $Product['Miktar'][$i];
                    $duzenli[$i][] =  $Product['KDV'][$i];
                }







                $siparis = array(
                    'siparis_no'=>$siparis_no,
                    'pazaryeri_kargo'=>$pazaryeri_kargo,
                    'mail'=>$mail,
                    'tarih'=>$tarih,
                    'zaman'=>$zaman,
                    'teslim_alici'=>$teslim_alici,
                    'teslim_adres'=>$teslim_adres,
                    'teslim_tel'=>$teslim_tel,
                    'teslim_siparis_ili'=>$teslim_siparis_ili,
                    'teslim_siparis_ilce'=>$teslim_siparis_ilce,
                    'fatura_alici'=>$fatura_alici,
                    'fatura_tel'=>$fatura_tel,
                    'fatura_teslim_adres'=>$fatura_teslim_adres,
                    'fatura_siparis_ili'=>$fatura_siparis_ili,
                    'fatura_siparis_ilce'=>$fatura_siparis_ilce,
                    'durum_adi'=>$durum_adi,
                    'tasiyicifirma_adi'=>$tasiyicifirma_adi,
                    'tasiyicifirma'=>$tasiyicifirma,
                    'kargo_kodu'=>$kargo_kodu,
                    'product'=>$duzenli
                );



                $Product = array();


                $ekle = $con->prepare("INSERT INTO `order` (siparis_no,pazaryeri_kargo,mail,tarih,zaman,teslim_alici,teslim_adres,teslim_tel,teslim_siparis_ili,teslim_siparis_ilce,fatura_alici,fatura_tel,fatura_teslim_adres,fatura_siparis_ili,fatura_siparis_ilce,durum_adi,tasiyicifirma_adi,tasiyicifirma,kargo_kodu) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $ekle->execute([$siparis_no,$pazaryeri_kargo,$mail,$tarih,$zaman,$teslim_alici,$teslim_adres,$teslim_tel,$teslim_siparis_ili,$teslim_siparis_ilce,$fatura_alici,$fatura_tel,$fatura_teslim_adres,$fatura_siparis_ili,$fatura_siparis_ilce,$durum_adi,$tasiyicifirma_adi,$tasiyicifirma,$kargo_kodu]);
                $eklenen_sayi = $ekle->rowCount();

                if($eklenen_sayi<0){
                    echo "Hata / Veritabanına sipariş kaydı oluşmadı";
                }else{
                    echo "$siparis_no 'lu sipariş Veritabanına Kayıt edildi<br>";
                }


            }
        }

        $reader->close();
echo "<br><h3> İşlem Tamamlandı. </h3>";


?>

</body>
</html>