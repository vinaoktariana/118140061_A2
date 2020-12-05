<!DOCTYPE html>
<html>

<head>
    <title>Tugas 1 Modul 10</title>
</head>
<body>
    <input type="text" name="new" id="new">
    <button onclick="add()">Tambah</button>
    <ul id="ul">
        <li id="1">Buku Tulis | <a onclick="edit('1')">Edit</a> | <a onclick="hapus(1)">Hapus</a></li>
        <li id="2">Pensil | <a onclick="edit('2')">Edit</a> | <a onclick="hapus(2)">Hapus</a></li>
        <li id="3">Spidol| <a onclick="edit('2')">Edit</a> | <a onclick="hapus(2)">Hapus</a></li>     
    </ul>
</body>
<script>

    var j = 3;
    function ganti(id = j) {
        var edit = document.createElement("a");
        edit.setAttribute("onclick", "edit(" + id + ")");
        edit.append("Edit");
        return edit;
    }

    function apus(id = j) {
        var edit = document.createElement("a");
        edit.setAttribute("onclick", "hapus(" + id + ")");
        edit.append("Hapus");
        return edit;
    }

    function mTambah(li, nama, id) {
        li.append(nama + " | ");
        li.append(ganti(id));
        li.append(" | ");
        li.append(apus(id));
    }

    function add() {
        var nama = document.getElementById("new").value;
        var ul = document.getElementById("ul");
        var newel = document.createElement("li");
        newel.setAttribute("id", j);
        mTambah(newel, nama);
        ul.append(newel);
        j++;
    }
    function hapus(id) {
        document.getElementById(id).remove();
    }
    function edit(id) {
        var nama = prompt("Masukkan nama baru: ", document.getElementById(id).innerText.split(" | ")[0]);
        if (nama != null) {
            var li = document.getElementById(id);
            li.innerHTML = "";
            mTambah(li, nama, id);
        }
    }
</script>
</html>