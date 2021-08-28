<?php


/*

Bu sayfada 'SimpleXLSX' sınıfı aracılığı ile tüm excell'deki satırları çekiyoruz ve bir dizi elde ediyoruz
elde ettiğimiz dizi düzgün olmadığı için onu PDO ile veri çekerken elde ettiğimiz bir diziye çeviriyoruz,
ardından Datatable'de kullanabilmek için 'data' dizisi içerisine atıyoruz ve json formatında bir çıktı sağlıyoruz.

Burada elimizde bulunan excell dosyasında bazı satırlar birleştirildiği için onları da alıyor ve bu nedenle onlar da bir veri gibi
diziye ekleniyor ve sadece birkaç alanı dolu geliyor geri kalanı boş gidiyor.
Ancak herbirinide gerekli alanlar var olduğu için hata vermiyor.

Bunun yerine eldeki veriyi json formatında çıktı aldığımızda bu sefer o satırları da bir veri olarak json dosyasına dahil ediyor, ancak 
sütun değerleri boş olduğu için onları json dönüştürücüler boş alan isimlerini özellik olarak eklemiyor. Bu nedenle hata alıyoruz.


*/
include_once("SimpleXLSX.php");
if ($excell = SimpleXLSX::parse('liste.xlsx')) {
    // rows()  fonksiyonu bize ilk dizi olarak sütun isimlerini veriyor , ve diğer dizi elemanlarına sırası ile satırları ekliyor
    // biz ise veritabanından veri çeker gibi alan ismi ve karşısında değer istediğimiz için aşağıdaki kod ile o yapıyı oluşturuyoruz.
    $header_values = $rows = [];
    foreach ($excell->rows() as $k => $r) {
        if ($k === 0) {
            $header_values = $r;
            continue;
        }
        if (empty($r[0])) // Bu kod içerisi boş olan verileri almamak için eklenmiştir
            continue;
        $rows[] = array_combine($header_values, $r);
        $_SESSION['liste'] = $rows;
        $liste = $_SESSION['liste'];
    }
} else {
    SimpleXLSX::parseError();
}
// Verilerin sütunlarını belirtebilmek için burada bir üst dizi belirliyoruz ve ismini 'data' olarak belirliyoruz.
$data['data'] = $liste;
echo json_encode($dizimiz['kisiler'], JSON_UNESCAPED_UNICODE);
