# PHP-DATATABLE-VE-EXCELLDEN-VER-EKME
Bu proje excell'den çektiğimiz satırları diziye alıp ardından bu diziyi json formatı ile Jquery Datatableye göndererek veri listelemeyi konu almıştır. Verimizi daha hızlı çekebilmek adına "server side processing" yaklaşımı kullanılmıştır.

## Amaç nedir ?

Projedeki amaç Datatable'ye verileri direkt dom üzerinden  bir döngü ile '<tr>' ve '</td>'  oluşturarak aktarmanın , veriler büyüdükçe doğru orantıda bekleme süresinin de artmasına  ve sistem performansının düşmesine yol açacağından , verileri Jquery Datatable'nin **ajax** özelliği sayesinde farklı bir dosyadan json formatında almasını sağlamaktır.
Bu sayede sayfa çok daha hızlı açılacaktır, çünkü sayfalama, sıralama ve arama yaparken belirttiğimiz dosyaya sürekli gidip istek doğrultusunda veri listeleyecektir.

### Veri seti

Veri seti olarak Türkiye'de yayınlanan son tezler hakkında bilgiler kullanılmıştır.
Veri seti 7000 çoğul 5000 civarı tekil kayıttan oluşmaktadır.
Veriler excell dosyasında bulunmakta , oradan çekilip json formatına dönüştürülmüştür.

### Gereklilikler

Halihazırda gerekli dosyalar cdn olarak import edilmiştir , ancak zaman içerisinde değişkenlik gösterebilir.
içerisinde :
**Jquery Datatable**
**Bootstrap**
ve
**Jquery**
Script ve CSS dosyaları dahil edilmiştir. Bu dosyalarda değişiklik olursa güncel linklerini eklemeniz yeterlidir.

### Görsel
![CPT2108290213-1144x811-min](https://user-images.githubusercontent.com/44698680/131233258-dc28ddfd-7291-4558-8e7f-0cec6a7c74f9.gif)



