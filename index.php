<?php
require("koneksi.php");
?>


<!DOCTYPE html>
<html>

<head>
    <title>MINGGU 6 - AJAX</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html,
        body {
            min-height: 100%;
            background-image: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhIVFRUWGBcVFhUVFRUVFxUVFxcXFxUWFRUYHSggGBolHRgVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQFy0dHSUtLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tKy0tLS0rLf/AABEIALEBHAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwABBAUGB//EADYQAAEDAgELAwMEAgIDAAAAAAEAAhEDITEEEkFRYXGBkbHB8CKh0QUy4RMjYvFyokKSFMLS/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAgEQEBAAICAgIDAAAAAAAAAAAAAQIRITEDQRJCIjJh/9oADAMBAAIRAxEAPwD6i1KeLprUNQKVqqCCiyUwSqqiwUoD1BBzt0woFajVLRaiigQFKKKi0ICSoCrUGKAiaEtEXAYplQ1hiqIw3Kn1QkuqO0H288CQkpdWmTxd2CYymBHfijbTmMdd1QYBA8xKDhjXDqqcfOauwxsk1ygpFVashJROQqa38fSKlapJolRktJ1R8LI7FdTJ2y1w129lzq4vOsD47K505PJ+1BKfkhx4dVnWjIxc7u4TqZeWklUieLoVDoRyz5IP3DtDu60FFTogVOBPvdVijNhy4et3mxLpjrHNaspYS4jdyzvygyVtxscO35Wu+HP7ZHtgwqWjK2359SkKoTptp4XCJ9IYEpmU0xIhLm6yWma2DjqS6IOcLaYV0xgNZXQjC2lADCpqJUpaIoooEBTkv9S8JrkjMuUU4YHI6ZulZvnNMphAvQiEUDSqAQEn3TQrNvOgbEv9YTje5PCO5TItC5TaLv1HnHNA5G8ck5Ba6QygTHmEhRtVpOI8lJ/Rhx/xI0fy+AjZk4I82pWHLGoxPmxJey4v5ZRoDfbv8JTa99s9B+ECfwFVsFAmVjdLUVvjxEUUVJLaslbIKwZSBbiN9ytlB8BZcpbMAfyP+xK0nTjzv5VmWrIRc7kdPIb34bVup0Q1sDVjrTKKey3Lqkub07rQ4281pdRsHge5U1rjS8nbJ4FR5IqN2j++gV5Pp3JWXuILDqTxLydkOxO93s4FWD+4f8h1AWbPvz9widUh8jYfeVppjto+pMiOPUHusC6H1F8gb+sR0XPCc6F7d7KMFmLY81rVXwQFmN9CyXpmyMeuNV10lnpgAnh7BND0DSOVEK3Kyg4BUESFJSnlLY7HgjOnzWga3HgElTpbSm0ktoRUinCppSweyIuSy/ziE0Ar1Y5HolUKwznndbmpWwIxsefqSKFIgP1y1p/6t+U4VbBW/wDbvCbSqT7rHTEC98PwmUzads+ckj1we+Mdg7rEMZ2g84+U57rRhbXsWeRO4xyhC5NGnuUMInYDzUjdTsoaW6hKpWFIQvZjMEeTsFtYCEImGFo4reWpwVgyCglUTB3oNHHD/Eoa5uFRN2bkmubqbWuM5HQdzlLy5ssOwjuFdOfcFHlTf23HWJ95RiXkjjKFRE+fTbRzuVuwRxMX39kEptcYbh890qEB6IOBGlQQhqIGu0bli20dZXKBpRBBLKpRRAUqIRqggbZ5x4q2Gx3oWmxtr7qiIClqYD0UB9kFOUbRYppsRzuqW4/HNERYJT/u4hI5CX1DeP5YcRKbkzvS8/zPsGx0WOi4Zpg4k3jXJ7omuIpmcDe4IuYK0Z06qfTw7LOK0ctfFQVJOq2AxkGLjclkWdOM69sKbF43cPqVsdUjShyU4bx0clXzW7ZPIKZKZqRtJ5Nd8p6FrpxJHFOeLJNP7hx6przbzUoh5MoCKEKIJwZUQVyoQoqc7QDIUddBRdoTShUKfTJAVspYE6vdNCgdIt5BS0r5XWgMbYbkOUt/bcNhTWiylVsgjWCOacKvPMF1pyynAbG0d+61U8k/bGhxgnnghy2nLMNPY/AV75RorLAC0EaB8CPZYl0K1GKUjSAe655Tgruud5wQ6eIVHuqaeqwdEhtIpqQzEbk5VEXtFFSIIKooVCheLIDKo4onaP6VVD5yUtojTdEH+md3UIANYTAPSEFQ1jhwQO8/1V1TcbEir9pAxw4xo5IPXDJSqECBm6MN+BlHWcc28WjQbwBjqVPp3uLEtmdmMDh7peUgWIxGq+q88lqwq2PEi202gcJuVA8Bsm+HVCy/qn2AnRe+FlQb6BZKrxFVqRmRs90/IfumL3vwYO6xVzcTq6LqfTgc2T5GaOyXofY6nj5rTDgqot7dE39O3JTFZXlihE0J1ZqWnIzy8mzCLIEYNkJTZow3T8606CJSGm6GlX9RbpFuEnNPIhBxpDlTDB4pQN9kA4aZv2VvcQQNv5nkCg9nZ1uMe8K2nQs7a33yRaTbUIxVs+6eQ3x72KDPc3seSTVbOcDqBG8ghVRqEh0nCWgYbZPCOSCu71b2n/s0zHXkgJlQ/bGi3Y2WZuTAySfIB7plR0sZfSR7EIaL4GOroFSTgUdMW82IWjDzWmMGHmkLKOnKip48E1JonHgnKoyy7UrCigQSIKuGKNLyjBBzss+6W7FXTPn4QuPnspaycrEkfnonRYBKLbRj/etaIw3lETlWeqL81mqOM2E3/Hda62Ltlua5+VYWx0e2lE7V9QPbeSdBsAYtt0/lJq/dEzYa4w1QfAmUqkuMjVvgg6cNSRUdcuBvskHQFrGAnVAW2gY2E2meWKcftAOOneBCWCQ06CdBw1SbSVoDcNNylkvBiyhku06ceIXZyZsNH+M8zK5mVQc7+I9yfyuzm+wASvQnY6OnenQl08OKalE5Xkms1Z4Wx4SMy4TRYWri3mxOpsR5qBpkSH1c2phc5pmLxEasLLoOprHldMySCB6TJM2g53fBODQyPUBeDnDZeI7pVapLQYJNovp0yeBTnGwd9xgG24wRrukZW2A7D7tVvVgDr08kQCe6SQIOeDEbW234IclqSBIvmyIi0AyZSjSIY2Dhe2nNMdHHkqyf0kNwu4YGw+65nUEzVRq/vPANjhAmSAfk8loaCWMNwQ4EyDMzDjGoyUl7yKowJdLdRAEfla8lEyDPPC8QBwBRQ5pfAA1FCXYI8rbDjz5pQVJdZpsmm3nmpICcdPmtYR05CoaU1Lpd0xVGeXaKwgLxMSiQS0uoeyDKKxbhFgswy0zcAoEPzZPGUDR5xSKuUSBEjigdVPgU6aSt5GnzH+1bnRE+QFiblRiICfTqF2Iix+E0xbnSHbSFirgGx1xzt8LYCAOP4WNrc4u0aePwlGnqkUWEH0xGcdE2ibpNFkkk42neXLbTZumDzhgPUpDMnkzN5FzBj0g2Wm2NNew43IEbTjjftqRuIGbM7jukqyy0HXrsQJiwQZUCXRH/ABd0HdI96hVnOdte0acLfC6oOO8dlzMgpX3knlbquiTY7/n8JZKxaaWATEtmpWXIRoSkKs5CXILQ1aWKiKUHpaXVG/htsic5UHJjRNI+j7jaZLhgcbhJlzgWuGjURMOgHO2g+xTcpu0wYkSDY3GiFbXjNuQM0QRNhv3JpKpepo0XixuJBbwv0SXxnXccWbZJ9PDCVqqVIDhqGeOEOXKr5WDUm0YzfVItvTgdEUSHFwaItaBsxOOtXkNDMcW4mM4nUScBst7I2V5qPbaBm8zKrJXE1HyMIbqmC490gwfUh+4eHRZgtf1YevgEFClIVzpPtujDzamOGPBVq82IvlYOi0dLBMKFowSssfAjSfxPVUzqqxmw2KgDnebEcdegVE+ckEHKY0+aO6xFurd7rRVPx1/CWxnqARVQmoLgLVTMBIez1Dzb3T3Wjd+UjhjW7Ln+lbTfZHcKg9VNuHyinIW82CyOtcb+bD8rS8282IWEEkRpjgQ0IxVn1pVQW56f5H8JWR1B/wAhE5xttcAFpBwB0R57FZpiRGDBhG047wqjKtQsBaD/AMRv181nzpedrZnD/lCfWdcEYAdIKy1rSf42w/keyehtPpglwOz/AOPyujTbZu+eiw/TB6XHVDeQv1XTaLAeaFN7VLwY0IKgTAoQhEpQSHuT3WWd5SrXDsAci/VKBUpbajSHyqa9KaVUp7R8WN+Ufp1Has8O4EXjgfZIrZcfUGk5rr3GGGGpN+ossHbIPC47rHUq3tpaGuBFsAO0rbHlzZTV0s5WYaBaAAdsT+OSSHXBxwx6IFaone+lAXJMuIDyd8j5XTXnsgrGCBjmho2kv/K7lJpnGwDRvN5PRZ2GXXybOqNJEiDPA26oXZNckHE8lsQwlsaZdPBWTbiVYOPBU0WG9Q2PYgrNkjZ+EbEJxPmgKmdU82WfKz6I1kfKZXdb39ljyx1xu7FMj/1JLbbe/wAI6eJOxZaBngD7plNxg+akqeIKrvUd34RtWfStLR07pLk9gdUN4w8lW2ro8t/aKSExlIQLeXQcugG7ZPnkKqVPrPuAnZoAOoApAMGL6dP8inIjKoTJm4vEEe+5IrH1EDS1reGcZTH18LRJ16tKy5M6SDN4b7SSqhNFQwHR/MjiABjgsznksk6c0cy4I6jzBvo7tKH9EkAYRHtKILHSySlDQNp6kdlrQUGQBz5knumAKQgKuUt9lM6yBpdTBYiVofUWUlTW/jiyFFUqSpaCaVSEK5QNKqNtxBWD6rT9WcNN/PZdFwkELPlFSWR5ZaY3THPHbjKwre2CqC2c7VkDjnRos5x2Nv8AC9Dk9TOaHHTB3WAjnK8tScAQSJE3Gsal2/p1e5ZLbCRfXcCOKnKHHUVJTawzs3TE9PlR1YKDBEA8ehTA3BA8WjzSmhSu1YKVVcBjt9gnLFlbrkR4RCaC61SzRrjosZdN9kdldUz5yS00tGSaeHymkwPPNCz0XaPMCre5KtMLAhbmtkY6unysNI3Wum37QNJnheeiND5cHht9dsNuhOa1LpCTMab8vmE+UFst4idx7LBUqS61omdsz8roVZvGMWHm5c00CXEbAd5BEdSqiapzBaNBI3+oyl/TqU8Q0f637Le+j1J/2nujyalBNtcc0lbZ/wDx78+g+EVOhePPLp5peo+aCnNagbGoFFEEF4S05KqhKql9M1VKRkoYUV04qUUKpJSK1SsICwEmsL+cU9qCsE4izlzsrpWnUsZXVe2VgrUoK2wyYeTHnZJVtdFxiqVK2Lv/AE1zn5r3XjOE8o7rpspxgMTPE4rmfSqUNnQc0gCcYIPfkuq1wjSs6okNVhMe06BKV6tXnNTo5dqqFc3Lnerl5HmC15TUcPB8rn5Y504DlGnBMqUogBPnm9GgltKhVKICwtn2k7BAO8/2stLEbL8lppHDWT0H5QbfSiM7WExDRbZEg0hCKYmUTVaAEi6trfOatRI0hRRRBLUUUTCKnBWheYCRxhcLqFR2Kih1KAQlEqKRqUUVhBoChqIilvcE0lPKzVwn1XWWH9XFaYxlnfRTghCslUtXO730TKAWZlpE77nH3hdLJ6cNAJuLE615JryDIJB2LqUvqYIGdOdp23UXEbd9LKiimniy5WsOV/HdRRArMooogkUUUQBNWqlizj1VqIDpU8BuU1qKJKW1WoogIqUUQaKKKIC1CoomSJWUYK1EqrHtkOKpRRQ6FKiookqKVhRRAR2HLqsqiiqJZamKyFRRbYubNRUUUVIWrCiiCf/Z");
        }
        body,
        div,
        form,
        input,
        select,

        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }
        h1 {
            position: absolute;
            margin: 0;
            line-height: 55px;
            font-size: 30px;
            color: #fff;
            z-index: 2;
        }
        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 10px;
        }
        form {
            width: 40%;
            padding: 20px;
            border-radius: 6px;
            background-color: grey;
            box-shadow: 0 0 30px 0 white;
        }
        .table {
            width: 43%;
            border-radius: 6px;
            background: rgba(0, 0, 0, 0.0);
            box-shadow: 0 0 30px 0 white;
            border: "1";
        }
        th {
            background-color: rgba(0, 9, 66, 0.5);
            color: white;
        }
        .td-number {
            background-color: rgba(0, 9, 66, 0.5);
            color: white;
            text-align: center;
        }
        .td-data {
            background-color: rgba(1, 4, 28, 0.8);
            color: white;
            text-align: center;
        }
        .td-foto {
            height: 80px;
            width: 80px;
            text-align: center;
            object-fit: cover;
        }
        .banner {
            position: relative;
            height: 80px;
            background-image: url("https://images.unsplash.com/photo-1506318137071-a8e063b4bec0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .banner::after {
            content: "";
            background-color: pink;
            position: absolute;
            width: 100%;
            height: 100%;
        }

        input,
        select {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 20px);
            padding: 5px;
        }

        select {
            width: 100%;
            padding: 7px 0;
            background: transparent;
        }

        .item:hover p,
        .item:hover i,
        input:hover::placeholder {
            color: pink;
        }

        .item input:hover,
        .item select:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 6px 0 #a37547;
            color: #a37547;
        }

        .item {
            position: relative;
            margin: 10px 0;

        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: pink;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        button:hover {
            box-shadow: 0 0 18px 0 #3d2914;
        }

        .nama-bet {
            font-size: 25pt;
            padding: 10px 10px 20px 20px;
        }

        @media (min-width: 568px) {

            .name-item,
            .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .name-item input,
            .city-item input {
                width: calc(50% - 20px);
            }

            .city-item select {
                width: calc(50% - 8px);
            }
        }
    </style>
</head>

<body>
    <div class="testbox">
        <form method="POST" id="form_tambah">
            <div class="banner">
                <h1>FORM MAHASISWA</h1>
            </div>
            <div class="item">
                <p>NIM</p>
                <input type="text" name="nim" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Nama</p>
                <input type="text" name="nama" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Angkatan</p>
                <input type="text" name="angkatan" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Program Studi</p>
                <select name="prodi" required>
                    <option value="1">Teknik Informatika</option>
                    <option value="2">Manajemen</option>
                    <option value="3">Hukum</option>
                    <option value="4">Arsitektur</option>
                </select>
            </div>
            <div class="btn-block">
                <button type="submit" id="tambah_data" name="tambah">Tambah Data</button>
            </div>
        </form>
    </div>
    <div id="show" class="testbox"></div>
    <script>
        $(document).ready(function() {
            $('#show').load("show.php");
            $('#tambah_data').click(function() {
                var data = $('#form_tambah').serialize();
                $.ajax({
                    type: 'POST',
                    url: "add.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $('#show').load("show.php");
                    }
                });
            });
        });
    </script>
</body>

</html>