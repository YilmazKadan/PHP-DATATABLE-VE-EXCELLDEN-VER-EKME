<?php



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.0/datatables.min.css" />
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <!-- Burada yazdığımız alan isimleri tamamen değişkenlik gösterebilir. -->
                        <th scope="col">SIRA NO</th>
                        <th scope="col">TEZ NO</th>
                        <th scope="col">ÜNİVERSİTE ADI</th>
                        <th scope="col">TEZ ADI</th>
                        <th scope="col">YAZAR</th>
                        <th scope="col">TEZ TÜRÜ</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.0/datatables.min.js"></script>
    <script>
        /*
         Burada kendime önemli not:
         Verileri bir döngü ile tabloya aktarmak çok fazla bekleme süresine neden oluyor,
         ancak bunun yerine harici bir dosyadan verileri json formatında çekmek ve gelen verinin hangi kısımlarını
         çekeceğimizi 'columns' ile belirtmek çok daha hızlı ve mantıklı oluyor.
        */
        $(document).ready(function() {
            $('#table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
                },
                "ajax": 'ajax.php',
                // Sütunları burada belirtebilmek için verileri bir ana dizi altında yollamamız lazım, ben burada 'data' dizisi altında yolladım.
                "columns": [{
                        "data": "SIRA NO"
                    },
                    {
                        "data": "TEZ NO"
                    },
                    {
                        "data": "ÜNİVERSİTE ADI"
                    },
                    {
                        "data": "TEZ ADI"
                    },
                    {
                        "data": "YAZAR"
                    },
                    {
                        "data": "TEZ TÜRÜ"
                    }
                ]
            });
        });
    </script>
</body>

</html>