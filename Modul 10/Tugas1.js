var a = 4;

function mTambah() {
    var nama=document.getElementById("new").value;
    var ul=document.getElementById("ul");
    var mNewList=document.createElement("li");
    mNewList.setAttribute("id", a);
    mAddNew(mNewList, nama);
    ul.append(mNewList);
    a++;
    }

function mHapus(id) {
    document.getElementById(id).remove();
}

function mEdit(id) {
    var nama=prompt("Masukkan nama baru: ", document.getElementById(id).innerText.split(" | ")[0]);
    if (nama != null) {
        var li = document.getElementById(id);
        li.innerHTML = "";
        mAddNew(li, nama, id);
    }
}

function mAddNew(li, nama, id) {
    li.append(nama + " | ");
    li.append(mEdit(id));
    li.append(" | ");
    li.append(mHapus(id));
}

function mEdit(id = a) {
    var edit = document.createElement("b");
    edit.setAttribute("onclick", "edit(" + id + ")");
    edit.append("Edit");
    return edit;
}

function mHapus(id = a) {
    var edit = document.createElement("b");
    edit.setAttribute("onclick", "hapus(" + id + ")");
    edit.append("Hapus");
    return edit;
}