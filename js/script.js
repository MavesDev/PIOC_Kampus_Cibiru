var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var containerPost = document.getElementById('container-post');

keyword.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            containerPost.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/dataPostingan.php?keyword=' + keyword.value, true);
    xhr.send();
});