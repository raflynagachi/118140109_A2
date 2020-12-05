var i = 3;
function menuHapus(id = i) {
    var edit = document.createElement("a");
    edit.setAttribute("onclick", "hapus("+id+")");
    edit.append("Hapus");
    return edit;
}
function menuEdit(id = i) {
    var edit = document.createElement("a");
    edit.setAttribute("onclick", "edit("+id+")");
    edit.append("Edit");
    return edit;
}
function addDataToView(li, nama ,id){
    li.append(nama+" | ");
    li.append(menuEdit(id));
    li.append(" | ");
    li.append(menuHapus(id));
}
function tambah() {
    var nama = document.getElementById("baru").value;
    var list = document.getElementById("list");
    var newList = document.createElement("li");
    newList.setAttribute("id", i);
    addDataToView(newList, nama);
    list.append(newList);
    i++;
    return false;
}
function hapus(id) {
    document.getElementById(id).remove();
}
function edit(id) {
    var nama = prompt("input baru: ", document.getElementById(id).innerText.split(" | ")[0]);
    if (nama != null) {
        var li = document.getElementById(id);
        li.innerHTML = "";
        addDataToView(li, nama, id);
    }
}